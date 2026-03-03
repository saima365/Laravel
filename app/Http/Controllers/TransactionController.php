<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Branche;
use App\Models\Customer;
use App\Models\Transaction;
use App\Models\Transaction_type;
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
        $transactions = Transaction::with(['account.branch', 'customer', 'transaction_type'])->get();
        $customers=Customer::all();
        $branches=Branche::all();
        return view("pages.erp.transaction.index",compact("transactions","customers","branches"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $transactionTypes=TransactionType::all();
        return view("pages.erp.transaction.create", compact("transactionTypes"));
    }

    /**
     * Store a newly created resource in storage.
     */
   public function save(Request $request)
{
    $request->validate([
        'account_id' => 'required|exists:accounts,id',
        'transaction_type_id' => 'required|exists:transaction_types,id',
        'amount' => 'required|numeric|min:0.01',
        'description' => 'nullable|string',
        'transfer_to' => 'nullable|string',
        'receive_from' => 'nullable|string',
        'date' => 'nullable|date',
    ]);

    DB::transaction(function () use ($request) {

        $lastTransaction = Transaction::where('account_id', $request->account_id)
            ->latest('id')
            ->lockForUpdate() // prevents race condition
            ->first();

        $balanceBefore = $lastTransaction
            ? (float)$lastTransaction->balance_after
            : 0;

        $amount = (float)$request->amount;

        $type = TransactionType::findOrFail($request->transaction_type_id);
        $typeName = strtolower(trim($type->type_name));

        if (in_array($typeName, ['withdraw','payment','expense'])) {

            if ($amount > $balanceBefore) {
                abort(422, 'Insufficient balance!');
            }

            $balanceAfter = $balanceBefore - $amount;

        } elseif (in_array($typeName, ['deposit','receive','income'])) {

            $balanceAfter = $balanceBefore + $amount;

        } else {
            abort(422, 'Invalid transaction type!');
        }

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
    });

    return redirect()->route('transaction.index')
        ->with('success', 'Transaction saved!');
}
    /**
     * Display the specified resource.
     */
    public function show($id)
{
    $customer= Customer::find($id);

    $lastTransaction = Transaction::orderBy('id', 'desc')->first();

    $transactions = Transaction::with(['transaction_type','account'])
        ->where("account_id","=", $customer->account_id)->get();
        // return $transaction;

    //    return  $transaction ;
    return view('pages.erp.transaction.show', compact('transactions','customer'));
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
    public function delete($id)
    {
        //
    }
    public function user_by_account_number($account_id)
    {
        $account = Account::with('customer')
            ->where('account_number', $account_id)
            ->first();

        if (!$account) {
            return response()->json(['message' => 'Account not found'], 404);
        }

        return response()->json([
            'customer_name'  => $account->customer->name,
            'customer_id'  => $account->customer->id,
        ]);
    }
}
