<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category_m;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Payment;
use App\Models\Shipping;
use Cart;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function index(){
        $category = Category_m::all();
        // $customers_id = session()->get('customers_id');
        $customers_id = Customer::where('customers_id', session()->get('customers_id'))->first();
        return view('frontend.pages.checkout', compact('category', 'customers_id'));
    }
    public function login_check(){
        $category = Category_m::all();
        $customers_id = session()->get('customers_id');
        $cartCollection = Cart::getContent();
        $cartData = $cartCollection->toArray();
        if($customers_id != null){
            return view('frontend.pages.checkout', compact('category', 'customers_id', 'cartData'));
        }else{
            return view('frontend.pages.login',compact('category'));
        }
    }
    public function save_shipping_address(Request $request){
        $shipping = new Shipping;
        $data = array();
        $data['shippings_name'] = $request->name;
        $data['shippings_email'] = $request->email;
        $data['shippings_address'] = $request->address;
        $data['shippings_city'] = $request->city;
        $data['shippings_country'] = $request->country;
        $data['shippings_zip_code'] = $request->zip_code;
        $data['shippings_phone'] = $request->phone;
        $id = Shipping::insertGetId($data);
        $request->session()->put('shippings_id', $id);
        return redirect('/payment');
    }
    public function payment(){
        $category = Category_m::all();
        $cartCollection = Cart::getContent();
        $cartData = $cartCollection->toArray();
        return view('frontend.pages.payment', compact('category', 'cartData'));
    }

    public function order_place(Request $request){
        $payment_method = $request->payment;
        $data = array();
        $data['payments_method'] = $payment_method;
        $data['payments_status'] = 'pending';
        $payments_id = Payment::insertGetId($data);

        $orderData = array();
        $orderData['customers_id'] = $request->session()->get('customers_id');
        $orderData['shippings_id'] = $request->session()->get('shippings_id');
        $orderData['payments_id'] = $payments_id;
        $orderData['orders_total'] = Cart::getTotal();
        $orderData['orders_status'] = 'pending';
        $orders_id = Order::insertGetId($orderData);

        $cartCollection = Cart::getContent();
        $orDetail = array();
        foreach ($cartCollection as $value) {
            $orDetail['orders_id'] = $orders_id;
            $orDetail['products_id'] = $value->id;
            $orDetail['products_name'] = $value->name;
            $orDetail['products_price'] = $value->price;
            $orDetail['products_sales_qty'] = $value->quantity;
            DB::table('order_details')->insert($orDetail);
        }

        $category = Category_m::all();
        if($payment_method == 'cash'){
            Cart::clear();
            return view('frontend.pages.payment_method', compact('category'));
        }elseif($payment_method == 'bkash'){
            Cart::clear();
            return view('frontend.pages.payment_method', compact('category'));
        }elseif($payment_method == 'nogod'){
            Cart::clear();
            return view('frontend.pages.payment_method', compact('category'));
        }elseif($payment_method == 'roket'){
            Cart::clear();
            return view('frontend.pages.payment_method', compact('category'));
        }

    }
}
