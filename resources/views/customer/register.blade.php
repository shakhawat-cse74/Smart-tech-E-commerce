@extends('website.master')

@section('title')
    Login Page
@endsection

@section('body')
    <!-- Blog -->
    <section class="login-sec padding-top-30 padding-bottom-100">
        <div class="container">
            <div class="row">

                <!-- Don’t have an Account? Register now -->
                <div class="col-md-12">
                    <h5>Don’t have an Account? Register now</h5>

                    <!-- FORM -->
                    <form action="{{route('customer.store')}}" method="POST">
                        @csrf
                        <ul class="row">
                            <li class="col-sm-12">
                                <label for="fullName">Full Name
                                    <input type="text" class="form-control" name="name" id="fullName" placeholder="Enter Full Name">
                                </label>
                            </li>
                            <li class="col-sm-12">
                                <label for="email-fun">Email
                                    <input type="email" class="form-control" name="email" id="email-fun" placeholder="Enter Email">
                                </label>
                            </li>
                            <li class="col-sm-12">
                                <label for="reg-pass">Password
                                    <input type="password" class="form-control" name="password" id="reg-pass" placeholder="Enter Password">
                                </label>
                            </li>

                            <li class="col-sm-12">
                                <label for="cus-mob">Mobile No.
                                    <input type="number" class="form-control" name="mobile" id="cus-mob" placeholder="Enter Mobile Number">
                                </label>
                            </li>
                            <li class="col-sm-12 text-left">
                                <button type="submit" class="btn-round">Register</button>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </section>



@endsection
