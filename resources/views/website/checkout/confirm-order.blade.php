@extends('website.master')

@section('title')
    Chackout Page
@endsection

@section('body')

    <!-- Blog -->
    <section class="login-sec padding-top-30 padding-bottom-100">
        <div class="container">
            <div class="row">

                <!-- Content -->
                <div id="content">
                    <!-- Payout Method -->
                    <section class="padding-bottom-60">
                        <div class="container">
                            <!-- Payout Method -->
                            <div class="pay-method">
                                <div class="row">
                                    <div class="col-md-8">

                                        <!-- Your information -->
                                        <div class="heading">
                                            <h2>Your information</h2>
                                            <hr>
                                        </div>
                                        <form action="{{route('checkout.new-order')}}" method="POST">
                                            @csrf
                                            <div class="row">

                                                <!-- Name -->
                                                <div class="col-sm-12">
                                                    <label > Delivery Address
                                                        <textarea class="form-control pt-2" name="delivery_address" placeholder="Delivery Address"></textarea>
                                                    </label>
                                                </div>
                                                <div class="col-sm-12">
                                                   <div class="radio-inline">
                                                       <label for="radio1">
                                                           <input type="radio" value="Cash" name="payment_method" checked id="radio1">Cash on Delivery
                                                       </label>
                                                   </div>
                                                </div>
                                                <div class="col-sm-12">
                                                   <div class="radio-inline">
                                                       <label for="radio2">
                                                           <input type="radio" value="Online" name="payment_method" id="radio2">Online
                                                       </label>
                                                   </div>
                                                </div>
                                                <!-- Button -->
                                                <div class="col-md-12">
                                                    <a href="{{route('home')}}" class="btn-round btn-light">Continue Shopping</a>
                                                        <button class="btn-round" type="submit">Go Confirmation</button>

                                                </div>

                                            </div>
                                        </form>


                                    </div>

                                    <!-- Select Your Transportation -->
                                    <div class="col-md-4">
                                        <div class="heading">
                                            <h2>Your Cart Summery</h2>
                                            <hr>
                                        </div>
                                        <table class="table table-hover">
                                            <thead>
                                            @php($sum = 0)
                                            @foreach(Cart::content() as $item)
                                            <tr>
                                                <th>{{$item->name}}, ({{$item->price}} * {{$item->qty}})</th>
                                                <th>Tk {{$item->qty * $item->price}}</th>
                                            </tr>
                                            @php($sum = $sum+ ($item->qty * $item->price))
                                            @endforeach
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Cart Subtotal :</td>
                                                <td>{{$sum}}</td>
                                            </tr>
                                            <tr>
                                                <td>Tax Amount :</td>
                                                <td>{{$tax =  round( ($sum * 0.15) ) }}</td>
                                            </tr>
                                            <tr>
                                                <td>Shiping Amount :</td>
                                                <td>{{$shipping = 100}}</td>
                                            </tr>
                                            <tr>
                                                <td>Total Payable :</td>
                                                <td>{{$totalPayable = $sum + $tax + $shipping}}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <?php
                                        Session::put('order_total', $totalPayable);
                                        Session::put('tax_amount', $tax);
                                        Session::put('shipping_amount', $shipping);
                                        ?>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </section>

            </div>
        </div>
    </section>



@endsection
