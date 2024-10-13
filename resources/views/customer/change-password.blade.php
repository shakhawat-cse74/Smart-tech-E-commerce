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
                        <div class="heading">
                            <h2>Change Password</h2>
                            <hr>
                        </div>


                        <div class="col-md-9">
                            <h4>{{Session('message')}}</h4>
                            <form class="form-horizontal" action="{{route('customer.update-password')}}" method="POST">
                                @csrf
                                <div class="row mb-4">
                                    <label class="col-md-3 form-label">Old Password</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="password" name="old_password">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-md-3 form-label">New Password</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="password" name="new_password">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-md-3 form-label"></label>
                                    <div class="col-md-9">
                                        <input class="btn-round" type="submit" value="Update Password">
                                    </div>
                                </div>

                            </form>

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
