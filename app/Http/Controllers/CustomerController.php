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
        return view("pages.erp.customer.create");
    }
 function save(Request $request)
{
    // optional: validation
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'img' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
    ]);

    $customer = new Customer();

    if ($request->hasFile('img')) {
        $image = $request->file('img');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/customers'), $imageName);
        $customer->img = $imageName;
    }

    $customer->name = $request->name;
    $customer->email = $request->email;
    $customer->phone = $request->phone;
    $customer->address = $request->address;
    $customer->gender = $request->gender;
    $customer->date_of_birth = $request->date_of_birth;
    $customer->status = $request->status;

    $customer->save();

    return redirect('customers');
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
        $customer->gender= $request->gender;
        $customer->date_of_birth= $request->date_of_birth;
        $customer->status= $request->status;
        $customer->update();
        return redirect("customers");
    }
      function edit($id){
        $customer = Customer::find($id);
        return view("pages.erp.customer.edit", compact("customer"));
    }

     public function show()
    {
         return view("pages.erp.customer.show");
    }
}
