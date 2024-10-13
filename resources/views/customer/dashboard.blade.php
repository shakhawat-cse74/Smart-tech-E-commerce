@extends('website.master')

@section('title')
    Customer Dashboard
@endsection

@section('body')

    <div class="account-login section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="card card-body">
                        <h3>My Dashboard</h3>
                        <hr/>
                        <h5>My Recent Order</h5>
                        <div class="col-md-9">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Order ID</th>
                                    <th>Order Total</th>
                                    <th>Order Date</th>
                                    <th>Order Status</th>
                                    <th>Payment Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$order->id}}</td>
                                        <td>{{$order->order_total}}</td>
                                        <td>{{$order->order_date}}</td>
                                        <td>{{$order->order_status}}</td>
                                        <td>{{$order->opayment_status}}</td>
                                        <td>
                                            <a href="" class=" btn-success btn-sm">
                                                Detail
                                            </a>
                                            <a href="" class=" btn-danger btn-sm">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-3">
                           @include('customer.includes.sidebar-menu')
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <hr/>


@endsection
