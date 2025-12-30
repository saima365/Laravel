<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    function index(){
        $customers=DB::table('customers')->get();
        // print_r($customers);
       return view("pages.erp.customer.index",compact("customers"));
        // echo "customer controller";
    }
    function create(){
        return view("customer.create");
    }
    function save(Request $request){
        print_r($request->all());
        $customer= new Customer();
        $customer->name= $request->name;
        $customer->email= $request->email;
        $customer->phone= $request->phone;
        $customer->address= $request->address;
        $customer->save();
        return redirect("customers");
    }
    function delete($id){
        $customer=Customer::find($id);
         $customer->delete();
         return redirect("customers");
    }
      function update(Request $request, $id){
        print_r($request->all());
        $customer= Customer::find($id);
        $customer->name= $request->name;
        $customer->email= $request->email;
        $customer->phone= $request->phone;
        $customer->address= $request->address;
        $customer->update();
        return redirect("customers");
    }
      function edit($id){
        $customer = Customer::find($id);
        return view("pages.erp.customer.edit", compact("customer"));
    }
}
