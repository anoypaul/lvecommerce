<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category_m;
use App\Models\Color;
use App\Models\Size;
use App\Models\SubCategory;
use App\Models\Unit;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $category = Category_m::all();
        $subcategory = SubCategory::all();
        $brand = Brand::all();
        $unit = Unit::all();
        $size = Size::all();
        $color = Color::all();
        $product = Product::where('products_status', 1)->latest()->limit(12)->get();

        $top_sale = DB::table('products')
        ->leftJoin('order_details', 'products.products_id', '=', 'order_details.products_id')
        ->selectRaw('products.products_id, SUM(order_details.products_sales_qty) as total')
        ->groupBy('products.products_id')
        ->orderBy('total', 'desc')
        ->take(8)
        ->get();

        $topProducts = array();
        foreach ($top_sale as $value) {
            $product_data = Product::findOrFail($value->products_id);
            $product_data->totalQty = $value->total;
            $topProducts[] = $product_data; 
        }

        return view('frontend.welcome', compact('category', 'subcategory', 'brand', 'unit', 'size', 'color', 'product', 'topProducts'));
    }

    public function view_details($id){
        $category = Category_m::all();
        $subcategory = SubCategory::all();
        $brand = Brand::all();
        $unit = Unit::all();
        $product = Product::findOrFail($id);
        $size = Size::find($product->sizes_id);
        $color = Color::find($product->colors_id);
        $category_ms_id = $product->category_ms_id;
        $related_products = Product::where('category_ms_id', $category_ms_id)->limit(4)->get();
        return view('frontend.pages.view_details', compact('category', 'subcategory', 'brand', 'unit', 'size', 'color', 'product', 'related_products'));
    }

    public function product_by_category($id){
        $category = Category_m::all();
        $subcategory = SubCategory::all();
        $brand = Brand::all();
        $product = Product::where('products_status', 1)->where('category_ms_id', $id)->limit(12)->get();
        return view('frontend.pages.product_by_category', compact('category', 'subcategory', 'brand', 'product'));
    }
    public function product_by_subcategory($id){
        $category = Category_m::all();
        $subcategory = SubCategory::all();
        $brand = Brand::all();
        $product = Product::where('products_status', 1)->where('sub_categories_id', $id)->limit(12)->get();
        return view('frontend.pages.product_by_subcategory', compact('category', 'subcategory', 'brand', 'product'));
    }
    public function product_by_brand($id){
        $category = Category_m::all();
        $subcategory = SubCategory::all();
        $brand = Brand::all();
        $product = Product::where('products_status', 1)->where('brands_id', $id)->limit(12)->get();
        return view('frontend.pages.product_by_brand', compact('category', 'subcategory', 'brand', 'product'));
    }

    public function search(Request $request){
        $product = Product::orderBy('products_id', 'desc')->where('products_name', 'LIKE', '%'.$request->product.'%');
        if($request->categoryes != "All") $product->where('category_ms_id', $request->categoryes);
        $product = $product->get();
        $category = Category_m::all();
        $subcategory = SubCategory::all();
        $brand = Brand::all();
        return view('frontend.pages.product_by_category', compact('category', 'subcategory', 'brand', 'product'));
    }
}
