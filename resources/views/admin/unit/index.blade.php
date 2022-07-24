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
                <h2><i class="halflings-icon user"></i><span class="break"></span>Unit</h2>
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
                          <th style="width:25%">Unit Name</th>
                          <th style="width:30%">Description</th>
                          <th style="width:20%">Status</th>
                          <th style="width:20%">Actions</th>
                      </tr>
                  </thead>   
                  <tbody>
                    @foreach ($unit as $value)
                    <tr>
                        <td>{{ $value->units_id }}</td>
                        <td class="center">{{ $value->units_name }}</td>
                        <td class="center">{{ $value->units_description}}</td>
                        <td class="center">
                            @if ($value->units_status == 1)
                                <span class="label label-success">Active</span>
                            @else
                                <span class="label label-success">DeActive</span>
                            @endif
                        </td>
                        <td class="center">
                            @if ($value->units_status == 1)
                                <a class="btn btn-success" href="{{url('/unit-status/'.$value->units_id)}}">
                                    <i class="halflings-icon white thumbs-down"></i>  
                                </a>
                            @else
                                <a class="btn btn-danger" href="{{url('/unit-status/'.$value->units_id)}}">
                                    <i class="halflings-icon white thumbs-up"></i>  
                                </a>
                            @endif
                            
                            <a class="btn btn-info" href="{{url('/unit/'.$value->units_id)}}">
                                <i class="halflings-icon white edit"></i>  
                            </a>
                            {{-- <form action="{{url('/categories/'.$value->category_ms_id)}}" method="post">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-danger" type="submit">
                                    <i class="halflings-icon white trash"></i> 
                                </button>
                            </form> --}}

                            <a class="btn btn-danger" href="{{url('/unit/destroy/'.$value->units_id)}}">
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