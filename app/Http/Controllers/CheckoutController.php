<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category_m;

class CheckoutController extends Controller
{
    public function index(){
        $category = Category_m::all();
        return view('frontend.pages.checkout', compact('category'));
    }
    public function login_check(){
        $category = Category_m::all();
        return view('frontend.pages.login',compact('category'));
    }
}
