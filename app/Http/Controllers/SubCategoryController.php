<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category_m;
use App\Models\SubCategory;


class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $SubCategory = SubCategory::all();
        return view('admin.subcategory.index', compact('SubCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category_m::all();
        return view('admin.subcategory.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // echo '<pre>';
        // print_r($_POST);
        // exit;
        $subcategory = new SubCategory();
        $subcategory->category_ms_id = $request->category;
        $subcategory->sub_categories_name = $request->name;
        $subcategory->sub_categories_description = $request->description;
        $subcategory->save();
        return redirect()->back()->with('success', 'Data Insert Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function change_status(SubCategory $subcategory)
    {
        // echo '<pre>';
        // print_r($subcategory);
        // exit;
        if($subcategory->sub_categories_status == 1){
            $subcategory->update(['sub_categories_status'=>0]);
        }else{
            $subcategory->update(['sub_categories_status'=>1]);
        }
        return redirect()->back()->with('success', 'Status Change Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($subcategory)
    {
        $category = Category_m::all();
        $subcategory = SubCategory::find($subcategory);
        // echo '<pre>';
        // print_r($subcategory);
        // exit;
        return view('admin.subcategory.edit', compact('category', 'subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $subcategory)
    {
        // echo '<pre>';
        // print_r($request);
        // exit;
        $subcategory = SubCategory::find($subcategory);
        $subcategory->category_ms_id = $request->category;
        $subcategory->sub_categories_name = $request->name;
        $subcategory->sub_categories_description = $request->description;
        $subcategory->save();
        return redirect()->back()->with('success', 'Data updated Successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SubCategory::find($id)->delete();
        return redirect()->back()->with('status', 'Data Deleted Successfully');
    }
}
