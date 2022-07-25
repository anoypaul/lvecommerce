<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Cart;
class CartController extends Controller
{
    public function add_to_cart(Request $request){
        // echo '<pre>';
        // print_r($_POST);
        // exit;
        $quantity = $request->quantity;
        $id = $request->id;

        $products = Product::where('products_id', $id)->first();
        // echo '<pre>';
        // print_r($products);
        // exit;
        $data['quantity'] = $quantity;
        $data['id'] = $products->products_id;
        $data['name'] = $products->products_name;
        $data['price'] = $products->products_price;
        $data['attributes'] = [$products->products_image];

        Cart::add($data);
        cardArray();
        return redirect()->back();
    }
    public function cart_item_delete($id){
        Cart::remove($id);
        return redirect()->back();
    }
}
