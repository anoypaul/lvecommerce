<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category_m;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category_m::all();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category_m = new Category_m();
        $category_m->category_ms_name = $request->name;
        $category_m->category_ms_description = $request->description;
        // $category_m->category_ms_image = $request->image->store('category');
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time(). '.' . $extension; 
            $file->move('category', $fileName);
            $category_m->category_ms_image = $fileName;
        }
        $category_m->save();
        return redirect()->back()->with('success', 'Data Insert Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }
    // show ke duplicate kore change_status korchi
    public function change_status(Category_m $category)
    {
        if($category->category_ms_status == 1){
            $category->update(['category_ms_status'=>0]);
        }else{
            $category->update(['category_ms_status'=>1]);
        }
        return redirect()->back()->with('success', 'Change Status Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($category)
    {
        $category = Category_m::find($category);
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category_m::find($id);
        $category->category_ms_name = $request->name;
        $category->category_ms_description = $request->description;
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time(). '.' . $extension; 
            $file->move('category', $fileName);
            $category->category_ms_image = $fileName;
        }
        $category->save();
        return redirect()->back()->with('success', 'Category update Successfully');


        // if($request->hasfile('image')){
        //     $file = $request->file('image');
        //     $extension = $file->getClientOriginalExtension();
        //     $fileName = time(). '.' . $extension; 
        //     $file->move('category', $fileName);
        //     // $category_m->category_ms_image = $fileName;
        // };
        // $update = $category->update([
        //     'category_ms_name' => $request->name,
        //     'category_ms_description' => $request->description,
        //     'category_ms_image' => $fileName
        // ]);
        // if($update){
        //     return redirect()->back()->with('success', 'Category update Successfully');
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category_m::find($id)->delete();
        return redirect()->back();
    }
}
