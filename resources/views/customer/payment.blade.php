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

                        <div class="col-md-9">
                            <h4>Payment Page</h4>
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
