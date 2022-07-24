<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.admin_login');
    }
    public function dashboard(){
        if(session()->has('admins_id')){
            return view('admin.dashboard');
        }else{
            return redirect('/admins');
        }
    }
    public function show_dashboard(Request $request){
        $admins_email = $request->email;
        $admins_password = md5($request->password);
        $result = Admin::where('admins_email', $admins_email)->where('admins_password', $admins_password)->first();

        if($result){
            $request->session()->put('admins_id', $result->admins_id);
            $request->session()->put('admins_name', $result->admins_name);
            return redirect('/dashboard');
        }else{
            return redirect('/admins')->with('status', 'Data is not Valid');;
        }
    }
    public function admin_logout(){
        session()->flush();
        return redirect('admins');
    }
}
