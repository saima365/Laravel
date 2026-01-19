<?php

namespace App\Http\Controllers;

use App\Models\Account;

use App\Models\Transaction;
use App\Models\Transaction_type;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view("pages.erp.transaction.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $transactionTypes=Transaction_type::all();
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
     $lastTransaction = Transaction::where('account_id', $request->account_id)
                                  ->latest('id')
                                  ->first();

    // 2️⃣ Determine balance_before
    $balanceBefore = $lastTransaction ? $lastTransaction->balance_after : 0;

    // 3️⃣ Define IDs for add/subtract
    $addIds = [3,4,6];
    $subtractIds = [1, 2, 5];

    // 4️⃣ Check for insufficient balance
    if (in_array($request->transaction_type_id, $subtractIds) && $request->amount > $balanceBefore) {
        return back()->with('error', 'Insufficient balance!');
    }

    // 5️⃣ Calculate balance_after
    $balanceAfter = in_array($request->transaction_type_id, $addIds)
                    ? $balanceBefore + $request->amount
                    : $balanceBefore - $request->amount;

    // 6️⃣ Save transaction
    $transaction = new Transaction();
    $transaction->account_id = $request->account_id;
    $transaction->transaction_type_id = $request->transaction_type_id;
    $transaction->amount = $request->amount;
    $transaction->balance_before = $balanceBefore;
    $transaction->balance_after = $balanceAfter;
    $transaction->transfer_to = $request->transfer_to;
    $transaction->receive_from = $request->receive_from;
    $transaction->date = $request->date ?? now();
    $transaction->description = $request->description;
    $transaction->save();

    return redirect()->route('transaction.index')->with('success', 'Transaction saved!');
}
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function destroy(string $id)
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
