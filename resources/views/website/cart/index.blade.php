@extends('website.master')

@section('title')
    Cart Page
@endsection

@section('body')

    <!-- Content -->
    <div id="content">
        <h5 class="text-success text-center">{{session('message')}}</h5>

        <!-- Shopping Cart -->
        <section class="shopping-cart padding-bottom-60">
            <div class="container">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Items</th>
                        <th class="text-center">Quantity</th>
                        <th class="text-center">Unit Price (TK)</th>
                        <th class="text-center">Total Price (TK)</th>
                        <th class="text-center">Remove</th>

                    </tr>
                    </thead>
                    <tbody>

                    <!-- Item Cart -->
                    @php($sum = 0)
                    @foreach($cart_products as $cart_product)
                    <tr>
                        <td><div class="media">
                                <div class="media-left">
                                    <a href="#.">
                                        <img class="img-responsive" src="{{asset($cart_product->options->image)}}
                                            " alt="" >
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h6>{{$cart_product->name}}</h6>
                                    <span>Code: {{$cart_product->options->code}}</span>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">
                            <!-- Quinty -->
                            <div class="quinty padding-top-20 ">
                                <form action="{{route('cart.update',['rowId'=> $cart_product->rowId])}}" method="POST">
                                    @csrf
                                    <div class="input-group">
                                        <input type="number" name="qty" value="{{$cart_product->qty}}" min="1">
                                        <button class="btn-lg btn-success" type="submit">Update</button>
                                    </div>
                                </form>
                            </div>
                        </td>
                        <td class="text-center padding-top-60">
                            {{$cart_product->price}}
                        </td>

                        <td class="text-center padding-top-60">
                            {{$cart_product->price * $cart_product->qty}}
                        </td>
                        <td class="text-center padding-top-60">
                            <a href="{{route('cart.remove',['rowId'=> $cart_product->rowId])}}" class="remove">
                                <i class="fa fa-close"></i>
                            </a>
                        </td>
                    </tr>
                        @php($sum = $sum + ($cart_product->price * $cart_product->qty))
                    @endforeach

                    </tbody>
                </table>

            </div>
        </section>

        <section class="padding-bottom-60">
            <div class="container">
                <div class="row">

                        <div class="col-md-12">
                            <div class="col-md-8"></div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header"></div>
                                    <div class="card-body">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th class="text-center">Cost Detail</th>
                                                <th class="text-center">Price (TK)</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Cart Subtotal :</td>
                                                <td>{{$sum}}</td>
                                            </tr>
                                            <tr>
                                                <td>Tax Amount :</td>
                                                <td>{{$tax = round($sum*0.15)}}</td>
                                            </tr>
                                            <tr>
                                                <td>Shiping Amount :</td>
                                                <td>{{$shipping = 100}}</td>
                                            </tr>
                                            <tr>
                                                <td>Total Payable :</td>
                                                <td>{{$sum+$tax+$shipping}}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <!-- Button -->
                                        <div class="">
                                            <a href="{{route('home')}}" class="btn-round btn-light">Continue Shopping</a>
                                            <a href="{{route('checkout')}}" class="btn-round">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                </div>
            </div>
        </section>

        <!-- Clients img -->
        <section class="light-gry-bg clients-img">
            <div class="container">
                <ul>
                    <li><img src="{{asset('/')}}website/assets/images/c-img-1.png" alt="" ></li>
                    <li><img src="{{asset('/')}}website/assets/images/c-img-2.png" alt="" ></li>
                    <li><img src="{{asset('/')}}website/assets/images/c-img-3.png" alt="" ></li>
                    <li><img src="{{asset('/')}}website/assets/images/c-img-4.png" alt="" ></li>
                    <li><img src="{{asset('/')}}website/assets/images/c-img-5.png" alt="" ></li>
                </ul>
            </div>
        </section>

        <!-- Newslatter -->
        <section class="newslatter">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Subscribe our Newsletter <span>Get <strong>25% Off</strong> first purchase!</span></h3>
                    </div>
                    <div class="col-md-6">
                        <form>
                            <input type="email" placeholder="Your email address here...">
                            <button type="submit">Subscribe!</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- End Content -->

@endsection

