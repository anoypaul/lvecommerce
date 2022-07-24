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
        $product = Product::all();
        return view('frontend.welcome', compact('category', 'subcategory', 'brand', 'unit', 'size', 'color', 'product'));
    }
}
