<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;

class CustomerController extends Controller

{
    function list() {
        return Customer::all();
}

function add(Request $req){

    $validator = Validator::make($req->all(), [
        'email' => 'required|email'
    ]);

    if ($validator->fails()) {
        
        return response()->json([
            'errorMessage'=> true,
            'message' => $validator->errors()
        ]);
    }

    $customer = New Customer;
    $customer -> title = $req -> title;
    $customer -> category = $req -> category;
    $customer -> fname = $req -> fname;
    $customer -> lname = $req -> lname;
    $customer -> email = $req -> email;
    $customer -> address1 = $req -> address1;
    $customer -> address2 = $req -> address2;
    $customer -> city = $req -> city;
    $customer -> mobile = $req -> mobile;
    $customer -> phone = $req -> phone;
    $customer -> company_name = $req -> company_name;
    $customer -> photo = $req -> photo;
    $customer -> credit_limit = $req -> credit_limit;
    $customer -> credit_period = $req -> credit_period;
    $result = $customer -> save();

    if($result){
        return ["Result" => "Data has been posted successfully!"];
    }
    else{
        return ["Result" => "Operation Filed!"];
    }
}

function update(Request $req){

    $validator = Validator::make($req->all(), [
        'email' => 'required|email'
    ]);

    if ($validator->fails()) {
        
        return response()->json([
            'errorMessage'=> true,
            'message' => $validator->errors()
        ]);
    }

    
    $customer = Customer::find($req -> id);
    $customer -> title = $req -> title;
    $customer -> category = $req -> category;
    $customer -> fname = $req -> fname;
    $customer -> lname = $req -> lname;
    $customer -> email = $req -> email;
    $customer -> address1 = $req -> address1;
    $customer -> address2 = $req -> address2;
    $customer -> city = $req -> city;
    $customer -> mobile = $req -> mobile;
    $customer -> phone = $req -> phone;
    $customer -> company_name = $req -> company_name;
    $customer -> photo = $req -> photo;
    $customer -> credit_limit = $req -> credit_limit;
    $customer -> credit_period = $req -> credit_period;
    $result = $customer->save();

    if($result){
        return ["result" => "Data Updated!"];
    }
    else{
        return ["result" => "Update failed"];
    }
}

function delete($id){

    $customer = Customer::find($id);
    $result = $customer -> delete();

    if($result){
        return ["Result" => "Record has been deleted successfully!" .$id];
    }
    else{
        return ["Result" => "Delete operation failed!" .$id];
    }

}

function test(Request $req){
    $rules=array(
        "fname"=>"required",
        "email"=>"required | unique"
    );

    $validator = validator::make($req->all(), $rules);

    if($validator->fails())
    {
        return response()->json($validator->errors(), 401);
    }
    else{
        $customer = New Customer;
        $customer -> title = $req -> title;
        $customer -> category = $req -> category;
        $customer -> fname = $req -> fname;
        $customer -> lname = $req -> lname;
        $customer -> email = $req -> email;
        $customer -> address1 = $req -> address1;
        $customer -> address2 = $req -> address2;
        $customer -> city = $req -> city;
        $customer -> mobile = $req -> mobile;
        $customer -> phone = $req -> phone;
        $customer -> company_name = $req -> company_name;
        $customer -> photo = $req -> photo;
        $customer -> credit_limit = $req -> credit_limit;
        $customer -> credit_period = $req -> credit_period;
       
        $result = $customer -> save();
    
        if($result){
            return ["Result" => "Data has been posted successfully!"];
        }
        else{
            return ["Result" => "Operation Filed!"];
        }
    }
}

}
