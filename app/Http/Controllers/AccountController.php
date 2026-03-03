<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Branche;
use App\Models\Customer;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $accounts= Account::all();
    //    $branches=Branche::all();
       $customers=Customer::all();
       return view("pages.erp.account.index", compact("accounts","customers"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $branches=Branche::all();
       return view("pages.erp.account.create",compact("branches"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function save(Request $request)
    {
       $request->validate(
        [
            "name"=>"required|min:3",
            "email"=>"email|unique:customers,email",
            "address"=>"required|min:4",
            "phone"=>"required|min:4",
            'balance' => 'required|numeric|digits_between:4,12',
            "img"=>"image|mimes:png,jpg,jpeg,webp|max:2048",
            'account_number' => 'required|numeric|unique:accounts,account_number'

        ],
        [
            "name.required"=>"please give a name",
            "address.required"=>"please give your address",
            "phone.required"=>"please Enter your phone number",
            "date_of_birth.required"=>"please give your Birth date",
            "branch.required"=>"Branch Field Required",
            "account_type.required"=>"account type Field Required",
            "currency.required"=>"currency Field Required",
            "balance.required"=>"opening_balance Field Required",
            "status.required"=>"status Field Required",
            "role.required"=>"role Field Required",
            "account_number.required"=>"account_number Field Required",
        ]);
        // $img = "";
        $imgname = "";
         if ($request->hasFile("img")) {
            $slug = Str::slug($request->name);
            $imgname = $slug . "." . $request->file("img")->extension();
            $request->file("img")->storeAs("img/customer", $imgname, "public");
        }
        $account= new Account();
        $account->branch_id=$request->branch_id;
        $account->account_type=$request->account_type;
        $account->balance=$request->balance;
        $account->currency=$request->currency;
        $account->status=$request->status;
        $account->account_number=$request->account_number;
        $account->save();


        // return    $account;

        $customer= new Customer();
        $customer->img = $imgname;
        $customer->name= $request->name;
        $customer->email= $request->email;
        $customer->phone= $request->phone;
        $customer->address= $request->address;
        $customer->gender= $request->gender;
        $customer->national_id= $request->national_id;
        $customer->date_of_birth= $request->date_of_birth;
        $customer->status= $request->status;
        $customer->account_id= $account->id;
        $customer->save();

         return redirect()->route('account.index')->with('success', 'Account saved!');
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
}
