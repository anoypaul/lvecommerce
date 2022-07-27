@extends('admin.master')
@section('admin_content')

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <p class="alert-success">
                <?php

                $message = Session::get('message');
                if($message)
                {
                    echo $message;
                    Session::put('message',null);
                }
                ?>
            </p>

        </div>


        <div class="box-content">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Customer Name</th>
                    <th>Order Total</th>
                    <th>Order Date & Time</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>

                <tbody>
                    @foreach ($order as $value)
                        <tr>
                            <td>{{$value->orders_id}}</td>
                            <td class="center">{{$value->customer->customers_name}}</td>
                            <td class="center">{{$value->orders_total}}</td>
                            <td class="center">{{date('d-m-Y  H:i:s', strtotime($value->created_at));}}</td>
                            {{-- <td class="center">Dec 31,2021, 08:38PM</td> --}}

                            <td class="center">

                                <span class="label label-success">Active</span>

                                <span class="label label-danger">Unactive</span>

                            </td>
                            <td class="center">

                                <a class="btn btn-danger" href="#">
                                    <i class="halflings-icon white thumbs-down"></i>
                                </a>

                                <a class="btn btn-success" href="#">
                                    <i class="halflings-icon white thumbs-up"></i>
                                </a>

                                <a class="btn btn-info" href="{{url('/view-order-details/'.$value->orders_id)}}">
                                    <i class="halflings-icon white edit"></i>
                                </a>
                                <a class="btn btn-danger" href="#" id="delete">
                                    <i class="halflings-icon white trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection