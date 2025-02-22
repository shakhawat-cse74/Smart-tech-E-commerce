@extends('website.master')

@section('title')
    Confirmation Page
@endsection

@section('body')

    <!-- Content -->
    <div id="content">

        <!-- Oder-success -->
        <section>
            <div class="container">
                <!-- Payout Method -->

                <div class="order-success"> <i class="fa fa-check"></i>
                    <h6>Congratulation! Your order has been processed</h6>
                    <p>Aenean dui mi, tempus non volutpat eget, molestie a orci. Nullam eget sem et eros laoreet rutrum. Quisque sem ante, feugiat quis lorem in.</p>
                    <a href="{{route('home')}}" class="btn-round">Return to Home</a> </div>
            </div>
        </section>

    </div>
    <!-- End Content -->

@endsection
