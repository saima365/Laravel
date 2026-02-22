<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Models\Customer;
use App\Models\Transaction;
use App\Models\Transaction_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

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

        //  return response()->json($request->all());
        DB::beginTransaction();

        try {

            $request->validate([
                'account_id' => 'required|exists:accounts,id',
                'transaction_type_id' => 'required|exists:transaction_types,id',
                'amount' => 'required|numeric|min:0.01',
                'description' => 'nullable|string',
                'transfer_to' => 'nullable|string',
                'receive_from' => 'nullable|string',
                'date' => 'nullable|date',
            ]);

            // Lock rows for update (prevents race condition)
            $lastTransaction = Transaction::where('account_id', $request->account_id)
                ->lockForUpdate()
                ->latest('id')
                ->first();

            $balanceBefore = $lastTransaction ? $lastTransaction->balance_after : 0;

            $addIds = [1, 2, 3];
            $subtractIds = [4, 5, 6];

            if (
                in_array($request->transaction_type_id, $subtractIds)
                && $request->amount > $balanceBefore
            ) {
                return back()->with('error', 'Insufficient balance!');
            }

            $balanceAfter = in_array($request->transaction_type_id, $addIds)
                ? $balanceBefore + $request->amount
                : $balanceBefore - $request->amount;

            $transaction = Transaction::create([
                'account_id' => $request->account_id,
                'transaction_type_id' => $request->transaction_type_id,
                'amount' => $request->amount,
                'balance_before' => $balanceBefore,
                'balance_after' => $balanceAfter,
                'transfer_to' => $request->transfer_to,
                'receive_from' => $request->receive_from,
                'date' => $request->date ?? now(),
                'description' => $request->description,
            ]);

            DB::commit();

            return response()->json([
                "success" => "Transaction Created successfully"
            ], 200);
        } catch (\Throwable $th) {

            DB::rollBack();

            return response()->json([
                "error" => $th->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer = Customer::findOrFail($id);
        $lastTransaction = Transaction::orderBy('id', 'desc')->first();
        $transactions = Transaction::with(['transaction_type','account'])
        ->where("account_id","=", $customer->account_id)->get();
        return response()->json(compact("customer"), 200);
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
        $transaction_types = Transaction_type::all();
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
