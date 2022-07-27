<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function customer_login(Request $request){
        $customers_email = $request->email;
        $customers_password = $request->password;
        $result = Customer::where('customers_email', $customers_email)->where('customers_password', $customers_password)->first();
        if($result){
            $request->session()->put('customers_id', $result->customers_id);
            return redirect('/');
        }else{
            return redirect('/login-check');
        }
        
    }
    public function customer_registration(Request $request){
        $data = array();
        $data['customers_name'] = $request->name;
        $data['customers_email'] = $request->email;
        $data['customers_password'] = $request->password;
        $data['customers_phone'] = $request->phone;
        $id = Customer::insertGetId($data);
        $request->session()->put('customers_id', $id);
        $request->session()->put('customers_name', $request->name);
        return redirect('/login-check');
    }
    public function customer_logout(){
        session()->flush();
        return redirect('/');
    }
}
