@extends('admin.master')
@section('admin_content')
    {{-- **** Table Start **** --}}

    <div class="row-fluid sortable">		
        <div class="box span12">
            <div class="box-header" data-original-title>
                @if (session()->get('success'))
                <p class="alert-success">
                    @php
                    $message = session()->get('success');
                        if ($message) {
                            echo $message;
                            Session::put('message', null);
                        }
                    @endphp
                </p>
                @endif
                <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                  <thead>
                      <tr>
                          <th style="width:5%">Id</th>
                          <th style="width:5%">Product Code</th>
                          <th style="width:10%">Name</th>
                          <th style="width:10%">Description</th>
                          <th style="width:5%">price</th>
                          <th style="width:15%">image</th>
                          <th style="width:10%">Category Name</th>
                          <th style="width:10%">SubCategory Name</th>
                          <th style="width:10%">Brand</th>
                          <th style="width:5%">Status</th>
                          <th style="width:15%">Actions</th>
                      </tr>
                  </thead>   
                  <tbody>
                    @foreach ($product as $value)
                    @php
                        $products_image = explode('|', $value->products_image);
                    @endphp
                    <tr>
                        <td>{{ $value->products_id }}</td>
                        <td class="center">{{ $value->products_code }}</td>
                        <td class="center">{{ $value->products_name}}</td>
                        <td class="center">{{ $value->products_description}}</td>
                        <td class="center">&#2547;{{ $value->products_price}}</td>
                        <td class="center">
                            @foreach ($products_image as $image)
                                <img src="{{asset('uploads/image/'.$image)}}" style="width: 50px; height:50px;">
                            @endforeach
                        </td>
                        <td class="center">{{ $value->category->category_ms_name}}</td>
                        <td class="center">{{ $value->subcategory->sub_categories_name}}</td>
                        <td class="center">{{ $value->brand->brands_name}}</td>

                        <td class="center">
                            @if ($value->products_status == 1)
                                <span class="label label-success">Active</span>
                            @else
                                <span class="label label-success">DeActive</span>
                            @endif
                        </td>
                        <td class="center">
                            @if ($value->products_status == 1)
                                <a class="btn btn-success" href="{{url('/product-status/'.$value->products_id)}}">
                                    <i class="halflings-icon white thumbs-down"></i>  
                                </a>
                            @else
                                <a class="btn btn-danger" href="{{url('/product-status/'.$value->products_id)}}">
                                    <i class="halflings-icon white thumbs-up"></i>  
                                </a>
                            @endif
                            
                            <a class="btn btn-info" href="{{url('/product/'.$value->products_id)}}">
                                <i class="halflings-icon white edit"></i>  
                            </a>

                            <a class="btn btn-danger" href="{{url('/product/destroy/'.$value->products_id)}}">
                                <i class="halflings-icon white trash"></i> 
                            </a>
                        </td>
                    </tr>
                    @endforeach

                  </tbody>
              </table>            
            </div>
        </div><!--/span-->
    
    </div><!--/row-->

    {{-- **** Table End **** --}}
@endsection