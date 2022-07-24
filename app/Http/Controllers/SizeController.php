<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Size;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $size = Size::all();
        return view('admin.size.index', compact('size'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.size.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $size = new Size();
        $sizes_size = explode(',',$request->size);
        $size->sizes_size = json_encode($sizes_size);
        $size->save();
        return redirect()->back()->with('success', 'Data Insert Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function change_status(Size $size)
    {
        // echo '<pre>';
        // print_r($size);
        // exit;
        if($size->sizes_status == 1){
            $size->update(['sizes_status'=>0]);
        }else{
            $size->update(['sizes_status'=>1]);
        }
        return redirect()->back()->with('success', 'Status Change Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($size)
    {
        $size = Size::find($size);
        return view('admin.size.edit', compact('size'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $size)
    {
        $size = Size::find($size);
        $sizes_size = explode(',',$request->size);
        $size->sizes_size = json_encode($sizes_size);
        $size->save();
        return redirect()->back()->with('success', 'Data Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($size)
    {
        $delete = Size::find($size)->delete();
        if($delete){
            return redirect()->back()->with('success', 'Data Delete Successfully');
        }
    }
}
