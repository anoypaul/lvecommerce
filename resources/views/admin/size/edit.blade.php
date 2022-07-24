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
        
        <h2><i class="halflings-icon edit"></i><span class="break"></span>Update Size</h2>
    </div>

    <div class="box-content">
        <form class="form-horizontal" action="{{url('/size/'.$size->sizes_id)}}" method="post">
            @csrf
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="date01">Sizes</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="size" id="input" value="{{implode(',', Json_decode($size->sizes_size))}}" data-role="tagsinput" required>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Update Sizes</button>
                </div>
            </fieldset>
        </form>

    </div>
</div><!--/span-->
</div><!--/row-->
</div><!--/row-->
@endsection