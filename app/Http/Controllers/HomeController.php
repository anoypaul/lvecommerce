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
        return view('frontend.welcome', compact('category', 'subcategory', 'brand', 'unit', 'size', 'color', 'product'));
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
}
