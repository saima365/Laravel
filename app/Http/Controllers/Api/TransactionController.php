<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Models\Customer;
use App\Models\Transaction;
use App\Models\TransactionType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Transaction::with('customer', 'transaction_type', 'account.branch')->get();
        return response()->json(compact("transactions"), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    //  Validate input
    $request->validate([
        'account_id' => 'required|exists:accounts,id',
        'transaction_type_id' => 'required|exists:transaction_types,id',
        'amount' => 'required|numeric|min:0.01',
        'description' => 'nullable|string',
        'transfer_to' => 'nullable|string',
        'receive_from' => 'nullable|string',
        'date' => 'nullable|date',
    ]);

    DB::beginTransaction();

    try {

        //  Lock last transaction row to prevent race condition
        $lastTransaction = Transaction::where('account_id', $request->account_id)
            ->lockForUpdate()
            ->orderByDesc('id')
            ->first();

        $balanceBefore = $lastTransaction
            ? (float)$lastTransaction->balance_after
            : 0;

        $amount = (float)$request->amount;

        // Get transaction type safely
        $type = TransactionType::findOrFail($request->transaction_type_id);
        $typeName = strtolower(trim($type->type_name));

        // Determine transaction behavior
        $debitTypes = ['withdraw', 'payment', 'expense'];
        $creditTypes = ['deposit', 'receive', 'income'];

        if (in_array($typeName, $debitTypes)) {

            // Check for insufficient balance
            if ($amount > $balanceBefore) {
                return response()->json([
                    'error' => 'Insufficient balance!'
                ], 422);
            }

            $balanceAfter = $balanceBefore - $amount;

        } elseif (in_array($typeName, $creditTypes)) {

            $balanceAfter = $balanceBefore + $amount;

        } else {
            return response()->json([
                'error' => 'Invalid transaction type!'
            ], 422);
        }

        // Create the transaction
        Transaction::create([
            'account_id' => $request->account_id,
            'transaction_type_id' => $request->transaction_type_id,
            'amount' => $amount,
            'balance_before' => $balanceBefore,
            'balance_after' => $balanceAfter,
            'transfer_to' => $request->transfer_to,
            'receive_from' => $request->receive_from,
            'date' => $request->date ?? now(),
            'description' => $request->description,
        ]);

        DB::commit();

        //  Return success response
        return response()->json([
            'success' => 'Transaction created successfully',
            'balance_before' => $balanceBefore,
            'balance_after' => $balanceAfter
        ], 200);

    } catch (\Throwable $th) {
        DB::rollBack();

        // Return server error only for unexpected issues
        return response()->json([
            'error' => 'Server error: ' . $th->getMessage()
        ], 500);
    }
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer = Customer::with('account.branch')->findOrFail($id);
        $lastTransaction = Transaction::orderBy('id', 'desc')->first();
        $transactions = Transaction::with('transaction_type')
            ->where("account_id", "=", $customer->account_id)->get();
        return response()->json(compact("customer", "transactions", "lastTransaction"), 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function transaction_types()
    {
        $transaction_types = TransactionType::all();
        return response()->json(compact('transaction_types'));
    }

    public function account_number($id)
    {
        $account = Account::with('customer')->where("account_number", "=", $id)->get();

        // if (!$account) {
        //     return response()->json(['message' => 'Account not found'], 404);
        // }

        return response()->json($account);
    }
}
