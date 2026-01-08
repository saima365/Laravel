<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $accounts= Account::all();
       return view("pages.erp.account.index", compact("accounts"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view("pages.erp.account.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate(
        [
            "name"=>"required|min:3",
            "email"=>"email|unique:customers,email",
            "address"=>"required|min:4",
            "phone"=>"required|min:4",
            'opening_balance' => 'required|numeric|digits_between:4,12',
            "img"=>"image|mimes:png,jpg,jpeg,webp|max:2048",
        ],
        [
            "name.required"=>"please give a name",
            "address.required"=>"please give your address",
            "phone.required"=>"please Enter your phone number",
            "img.required"=>"please select a photo",
            "date_of_birth.required"=>"please give your Birth date",
            "branch.required"=>"This Field Required",
            "account_type.required"=>"This Field Required",
            "currency.required"=>"This Field Required",
            "opening_balance.required"=>"This Field Required",
            "status.required"=>"This Field Required",
            "role.required"=>"This Field Required",
        ]


       );
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
