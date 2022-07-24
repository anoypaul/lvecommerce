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
        
        <h2><i class="halflings-icon edit"></i><span class="break"></span>Update SubCategory</h2>
    </div>

    <div class="box-content">
        <form class="form-horizontal" action="{{url('/sub-categories/'.$subcategory->sub_categories_id)}}" method="post">
            @csrf
            {{-- @method('PUT') --}}
            {{-- @foreach ($subcategory as $item) --}}
            {{-- @php
                echo '<pre>';
                print_r($subcategory->sub_categories_name);
                exit;
            @endphp --}}
            {{-- @endforeach --}}

            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="date01">SubCategory Name</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="name" value="{{$subcategory->sub_categories_name}}">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="date01">Select Category</label>
                    <div class="controls">
                        <select name="category" style="margin-left: 0px;">
                            {{-- {{$subcategory->category->category_ms_name}} --}}
                            <option>Select Category {{$subcategory->category->category_ms_name}}</option>
                            @foreach ($category as $value)
                                <option value="{{$value->category_ms_id }}">{{$value->category_ms_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">SubCategory Description</label>
                    <div class="controls">
                        <textarea class="cleditor" name="description" rows="3">{{$subcategory->sub_categories_description}}</textarea>
                    </div>

                </div>


                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Update SubCategory</button>
                </div>
            </fieldset>
        </form>

    </div>
</div><!--/span-->
</div><!--/row-->
</div><!--/row-->
@endsection