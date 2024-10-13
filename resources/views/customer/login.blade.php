@extends('website.master')

@section('title')
    Login Page
@endsection

@section('body')
    <!-- Blog -->
    <section class="login-sec padding-top-30 padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Login Your Account -->
                    <h5>Login Your Account</h5>
                    <p>{{Session('message')}}</p>

                    <!-- FORM -->
                    <form action="{{route('customer.login')}}" method="POST">
                        @csrf
                        <ul class="row">
                            <li class="col-sm-12">
                                <label>Email
                                    <input type="email" class="form-control" name="email" placeholder="">
                                    <input type="hidden" value="dashboard" name="check_page">
                                </label>
                            </li>
                            <li class="col-sm-12">
                                <label>Password
                                    <input type="password" class="form-control" name="password" placeholder="">
                                </label>
                            </li>
                            </li>
                            <li class="col-sm-12 text-left">
                                <button type="submit" class="btn-round">Login</button>
                            </li>
                        </ul>
                    </form>
                </div>

            </div>
        </div>
    </section>



@endsection
