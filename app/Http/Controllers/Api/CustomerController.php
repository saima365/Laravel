<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();
        // print_r($customers);
        return response()->json(compact("customers"), 200);
        // echo "customer controller";
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {

        try {


            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'img' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
                'gender' => 'required|in:Male,Female,Others',
                'status' => 'required|in:Active,Inactive,Idle'

            ]);

            $customer = new Customer();
            $imageName = "";
            if ($request->hasFile("img")) {
                // $image = $request->file('img');
                 $imageName = $request->name . "." . $request->file("img")->extension();
                 $request->file("img")->storeAs("uploads/customers", $imageName, "public");
                $customer->img = $imageName;
            }

            // $customer->name = $request->customer['name'];
            // $customer->email = $request->customer['email'];
            // $customer->phone = $request->customer['phone'];
            // $customer->address = $request->customer['address'];
            // $customer->gender = $request->customer['gender'];
            // $customer->date_of_birth = $request->customer['date_of_birth'];
            // $customer->status = $request->customer['status'];

            $customer->name = $request->name;
            $customer->email = $request->email;
            $customer->phone = $request->phone;
            $customer->address = $request->address;
            $customer->gender = $request->gender;
            $customer->date_of_birth = $request->date_of_birth;
            $customer->status = $request->status;

            $customer->save();
            return response()->json(["success" => "Customer saved succesfully"], 200);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 200);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer = Customer::findOrFail($id);
        return response()->json(compact("customer"), 200);
    }

    /**
     * Update the specified resource in storage.
     */
    function update(Request $request, $id)
    {
         try {


            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'img' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
                'gender' => 'required|in:Male,Female,Others',
                'status' => 'required|in:Active,Inactive,Idle'

            ]);

            $customer = Customer::findOrFail($id);
            $imageName = "";
            if ($request->hasFile("img")) {
                // $image = $request->file('img');
                 $imageName = time() . "_" . $request->file("img")->getClientOriginalName();
                 $request->file("img")->storeAs("uploads/customers", $imageName, "public");
                $customer->img = $imageName;
            }

            // $customer->name = $request->customer['name'];
            // $customer->email = $request->customer['email'];
            // $customer->phone = $request->customer['phone'];
            // $customer->address = $request->customer['address'];
            // $customer->gender = $request->customer['gender'];
            // $customer->date_of_birth = $request->customer['date_of_birth'];
            // $customer->status = $request->customer['status'];

            $customer->name = $request->name;
            $customer->email = $request->email;
            $customer->phone = $request->phone;
            $customer->address = $request->address;
            $customer->gender = $request->gender;
            $customer->date_of_birth = $request->date_of_birth;
            $customer->status = $request->status;

            $customer->save();
            return response()->json(["success" => "Customer saved succesfully"], 200);
        } catch (\Throwable $th) {
            return response()->json(["error"=>$th->getMessage()], 500);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return response()->json(["success" => "Customer deleted succesfully"], 200);
    }
}
