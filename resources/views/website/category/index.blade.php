@extends('website.master')

@section('title')
    Category Page
@endsection

@section('body')

    <!-- Linking -->
    <div class="linking">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">
                    @if(isset($products[0]))
                    {{$products[0]->category->name}}
                    @else
                        No Product Availeable Now...
                    @endif
                </li>
            </ol>
        </div>
    </div>

    <!-- Content -->
    <div id="content">

        <!-- Products -->
        <section class="padding-top-40 padding-bottom-60">
            <div class="container">
                <div class="row">

                    <!-- Shop Side Bar -->
                    <div class="col-md-3">
                        <div class="shop-side-bar">

                            <!-- Categories -->
                            <h6>Categories</h6>
                            <div class="checkbox checkbox-primary">
                                <ul>
                                    <li>
                                        <input id="cate1" class="styled" type="checkbox" >
                                        <label for="cate1"> Home Audio & Theater </label>
                                    </li>
                                    <li>
                                        <input id="cate2" class="styled" type="checkbox" >
                                        <label for="cate2"> TV & Video</label>
                                    </li>
                                    <li>
                                        <input id="cate3" class="styled" type="checkbox" >
                                        <label for="cate3"> Camera, Photo & Video</label>
                                    </li>
                                    <li>
                                        <input id="cate4" class="styled" type="checkbox" >
                                        <label for="cate4"> Cell Phones & Accessories</label>
                                    </li>
                                    <li>
                                        <input id="cate5" class="styled" type="checkbox" >
                                        <label for="cate5"> Headphones</label>
                                    </li>
                                    <li>
                                        <input id="cate6" class="styled" type="checkbox" >
                                        <label for="cate6"> Video Games</label>
                                    </li>
                                    <li>
                                        <input id="cate7" class="styled" type="checkbox" >
                                        <label for="cate7"> Bluetooth & Wireless Speakers</label>
                                    </li>
                                    <li>
                                        <input id="cate8" class="styled" type="checkbox" >
                                        <label for="cate8"> Gaming Console</label>
                                    </li>
                                    <li>
                                        <input id="cate9" class="styled" type="checkbox" >
                                        <label for="cate9"> Computers & Tablets</label>
                                    </li>
                                    <li>
                                        <input id="cate10" class="styled" type="checkbox" >
                                        <label for="cate10"> Monitors</label>
                                    </li>
                                    <li>
                                        <input id="cate11" class="styled" type="checkbox" >
                                        <label for="cate11"> Home Appliances</label>
                                    </li>
                                    <li>
                                        <input id="cate12" class="styled" type="checkbox" >
                                        <label for="cate12">Office Supplies </label>
                                    </li>
                                </ul>
                            </div>

                            <!-- Categories -->

                        </div>
                    </div>

                    <!-- Products -->
                    <div class="col-md-9">


                        <!-- Items -->
                        <div class="item-col-4">
                            <!-- Product -->
                            @foreach($products as $product)
                            <div class="product">
                                <article>
                                    <a href="{{route('product-detail',['id'=> $product->id])}}"><img src="{{asset($product->image)}}" height="200"  alt="" ></a>
                                    <!-- Content -->
                                    <span class="tag">{{$product->brand->name}}</span>
                                    <a href="{{route('product-detail',['id'=> $product->id])}}" class="tittle">{{$product->name}}</a>
                                    <!-- Reviews -->
                                    <p class="rev">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">TK. {{$product->regular_price}}
                                        <span>TK. {{$product->selling_price}}</span>
                                    </div>
                                    <a href="#." class="cart-btn">
                                        <i class="icon-basket-loaded"></i>
                                    </a>
                                </article>
                            </div>
                        @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Your Recently Viewed Items -->
        <section class="padding-bottom-60">
            <div class="container">

                <!-- heading -->
                <div class="heading">
                    <h2>Your Recently Viewed Items</h2>
                    <hr>
                </div>
                <!-- Items Slider -->
                <div class="item-slide-5 with-nav">
                    <!-- Product -->
                    <div class="product">
                        <article> <img class="img-responsive" src="{{asset('/')}}website/assets/images/item-img-1-1.jpg" alt="" >
                            <!-- Content -->
                            <span class="tag">Latop</span> <a href="#." class="tittle">Laptop Alienware 15 i7 Perfect For Playing Game</a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00 </div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                    </div>
                    <!-- Product -->
                    <div class="product">
                        <article> <img class="img-responsive" src="{{asset('/')}}website/assets/images/item-img-1-2.jpg" alt="" > <span class="sale-tag">-25%</span>

                            <!-- Content -->
                            <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00 <span>$200.00</span></div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <article> <img class="img-responsive" src="{{asset('/')}}website/assets/images/item-img-1-3.jpg" alt="" >
                            <!-- Content -->
                            <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00</div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <article> <img class="img-responsive" src="{{asset('/')}}website/assets/images/item-img-1-4.jpg" alt="" > <span class="new-tag">New</span>

                            <!-- Content -->
                            <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00</div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <article> <img class="img-responsive" src="{{asset('/')}}website/assets/images/item-img-1-5.jpg" alt="" >
                            <!-- Content -->
                            <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7" 128GB full HD</a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00</div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <article> <img class="img-responsive" src="{{asset('/')}}website/assets/images/item-img-1-6.jpg" alt="" > <span class="sale-tag">-25%</span>

                            <!-- Content -->
                            <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00 <span>$200.00</span></div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <article> <img class="img-responsive" src="{{asset('/')}}website/assets/images/item-img-1-7.jpg" alt="" >
                            <!-- Content -->
                            <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00</div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <article> <img class="img-responsive" src="{{asset('/')}}website/assets/images/item-img-1-8.jpg" alt="" > <span class="new-tag">New</span>

                            <!-- Content -->
                            <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00</div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
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
