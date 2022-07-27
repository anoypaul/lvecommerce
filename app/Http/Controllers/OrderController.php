<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function manage_order(){
        $order = Order::all();
        return view('admin.order.manage_order', compact('order'));
    }
    public function view_order_details($id){
        $order = Order::where('orders_id', $id)->first();
        $order_details = OrderDetail::where('orders_id', $id)->get();
        return view('admin.order.view_order', compact('order', 'order_details'));
    }
}
