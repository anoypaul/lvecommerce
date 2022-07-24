<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category_m;
use App\Models\Color;
use App\Models\Size;
use App\Models\SubCategory;
use App\Models\Unit;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('admin.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category_m::all();
        $subcategory = SubCategory::all();
        $brand = Brand::all();
        $unit = Unit::all();
        $size = Size::all();
        $color = Color::all();
        return view('admin.product.create', compact('category', 'subcategory', 'brand', 'unit', 'size', 'color'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $product = new Product();
       $product->category_ms_id = $request->category;
       $product->sub_categories_id = $request->subcategory;
       $product->brands_id = $request->brand;
       $product->units_id = $request->unit;
       $product->sizes_id = $request->size;
       $product->colors_id = $request->color;
       $product->products_code = $request->code;
       $product->products_name = $request->name;
       $product->products_description = $request->description;
       $product->products_price = $request->price;
        $images = array();
        if($files=$request->file('file')){
            $i=0;
            foreach($files as $file){
                $name=$file->getClientOriginalName();
                $fileNameExtract=explode('.',$name);
                $fileName=$fileNameExtract[0];
                $fileName.=time();
                $fileName.=$i;
                $fileName.='.';
                $fileName.=$fileNameExtract[1];
                $file->move('uploads/image',$fileName);
                $images[]=$fileName;
                $i++;
            }
            // $product['products_image']=implode("|", $images);
            $product->products_image=implode("|", $images);
            $product->save();
            return redirect()->back()->with('success', 'Product Added Successfully');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function change_status(Product $product)
    {
        // echo '<pre>';
        // print_r($product);
        // exit;
        if($product->products_status == 1){
            $product->update(['products_status'=>0]);
        }else{
            $product->update(['products_status'=>1]);
        }
        return redirect()->back()->with('success', 'Status Change Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($product)
    {
        $product = Product::find($product);
        $category = Category_m::all();
        $subcategory = SubCategory::all();
        $brand = Brand::all();
        $unit = Unit::all();
        $size = Size::all();
        $color = Color::all();
        return view('admin.product.edit', compact('product', 'category', 'subcategory', 'brand', 'unit', 'size', 'color'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product)
    {
        // echo '<pre>';
        // print_r($_POST);
        // exit;
        $product = Product::find($product);
        $product->category_ms_id = $request->category;
        $product->sub_categories_id = $request->subcategory;
        $product->brands_id = $request->brand;
        $product->units_id = $request->unit;
        $product->sizes_id = $request->size;
        $product->colors_id = $request->color;
        $product->products_code = $request->code;
        $product->products_name = $request->name;
        $product->products_description = $request->description;
        $product->products_price = $request->price;
        $images = array();
        if($files=$request->file('file')){
            $i=0;
            foreach($files as $file){
                $name=$file->getClientOriginalName();
                $fileNameExtract=explode('.',$name);
                $fileName=$fileNameExtract[0];
                $fileName.=time();
                $fileName.=$i;
                $fileName.='.';
                $fileName.=$fileNameExtract[1];
                $file->move('uploads/image',$fileName);
                $images[]=$fileName;
                $i++;
            }
            // $product['products_image']=implode("|", $images);
            $product->products_image=implode("|", $images);
            $product->save();
            return redirect()->back()->with('success', 'Product Update Successfully');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product)
    {
        $delete = Product::find($product)->delete();
        if($delete){
            return redirect()->back()->with('success', 'Product Delete Successfully');
        }
    }
}
