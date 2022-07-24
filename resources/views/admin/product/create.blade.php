@extends('admin.master')
@section('admin_content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<div class="row-fluid sortable">
<div class="box span12">
   
    <div class="box-header" data-original-title>
        @if (Session::get('success'))
        <p class="alert-success">
            @php
               $message = Session::get('success');
                if ($message) {
                    echo $message;
                    Session::put('message', null);
                }
            @endphp
        </p>
        @endif
        
        <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Product</h2>
    </div>

    <div class="box-content">
        <form class="form-horizontal" action="{{url('/product/')}}" method="post" enctype="multipart/form-data">
            @csrf
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="date01">Product Code</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="code" required>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Product Name</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="name" required>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="date01">Select Category</label>
                    <div class="controls">
                        <select name="category" style="margin-left: 0px;">
                            <option>Select Category</option>
                            @foreach ($category as $value)
                                <option value="{{$value->category_ms_id }}">{{$value->category_ms_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Select SubCategory</label>
                    <div class="controls">
                        <select name="subcategory" style="margin-left: 0px;">
                            <option>Select SubCategory</option>
                            @foreach ($subcategory as $value)
                                <option value="{{$value->sub_categories_id }}">{{$value->sub_categories_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Select Brand</label>
                    <div class="controls">
                        <select name="brand" style="margin-left: 0px;">
                            <option>Select Brand</option>
                            @foreach ($brand as $value)
                                <option value="{{$value->brands_id }}">{{$value->brands_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Select Unit</label>
                    <div class="controls">
                        <select name="unit" style="margin-left: 0px;">
                            <option>Select Unit</option>
                            @foreach ($unit as $value)
                                <option value="{{$value->units_id }}">{{$value->units_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Select Size</label>
                    <div class="controls">
                        <select name="size" style="margin-left: 0px;">
                            <option>Select Size</option>
                            @foreach ($size as $value)
                                <option value="{{$value->sizes_id }}">{{$value->sizes_size}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Select Color</label>
                    <div class="controls">
                        <select name="color" style="margin-left: 0px;">
                            <option>Select color</option>
                            @foreach ($color as $value)
                                <option value="{{$value->colors_id }}">{{$value->colors_color}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Product Description</label>
                    <div class="controls">
                        <textarea class="cleditor" name="description" rows="3" required></textarea>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Product Price</label>
                    <div class="controls">
                        <input type="number" class="input-xlarge" name="price" required>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">File Upload</label>
                    <div class="controls">
                        <input type="file" name="file[]" multiple required>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </div>
            </fieldset>
        </form>

    </div>
</div><!--/span-->
</div><!--/row-->
</div><!--/row-->
@endsection