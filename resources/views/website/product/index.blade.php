@extends('website.master')

@section('title')
    Product Detail Page
@endsection

@section('body')

    <!-- Products -->
    <section class="padding-top-40 padding-bottom-60">
        <div class="container">
            <div class="row">
       <!-- Products -->
                <div class="col-12">
                    <div class="product-detail">
                        <div class="product">
                            <div class="row">
                                <!-- Slider Thumb -->
                                <div class="col-md-6">
                                    <article class="slider-item on-nav">
                                        <div class="thumb-slider">
                                            <ul class="slides">
                                                <li data-thumb="{{asset($product->image)}}">
                                                    <img src="{{asset($product->image)}}" alt="" height="400" >
                                                </li>
                                                @foreach($product->productImages as $productImage)
                                                <li data-thumb="{{asset($productImage->image)}}">
                                                    <img src="{{asset($productImage->image)}}" height="400"  alt="" >
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Item Content -->
                                <div class="col-md-6">

                                    <h5>{{$product->name}}</h5>
                                    <hr/>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <span class="price">Tk. {{$product->selling_price}} </span>
                                        </div>
                                        <div class="col-sm-6">
                                            <p>Availability: <span class="in-stock">In stock</span></p>
                                        </div>
                                    </div>
                                    <p class="tags">Category:
                                        <a href="">{{$product->category->name}}</a>
                                    </p>
                                    <p class="tags">Brand:
                                        <a href="">{{$product->brand->name}}</a>
                                    </p>
                                    <!-- List Details -->
                                   <p style="text-align: justify">{{$product->short_description}}</p>
                                    <hr/>

                                    <!-- Quinty -->
                                    <form action="{{route('cart.add',['id'=> $product->id])}}" method="POST">
                                        @csrf
                                    <div>
                                        <div>
                                            <div class="quinty">
                                                <input type="number" name="qty" class="form-control" value="01" min="1">
                                            </div>
                                        </div>
                                        <div>
                                            <button type="submit" class="btn-round">
                                                <i class="icon-basket-loaded margin-right-5"></i> Add to Cart</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Details Tab Section-->
                        <div class="item-tabs-sec">

                            <!-- Nav tabs -->
                            <ul class="nav" role="tablist">
                                <li role="presentation" class="active"><a href="#pro-detil"  role="tab" data-toggle="tab">Product Details</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="pro-detil">

                                    {!! $product->long_description !!}

                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="cus-rev"></div>
                                <div role="tabpanel" class="tab-pane fade" id="ship"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Related Products -->
                    <section class="padding-top-30 padding-bottom-0">
                        <!-- heading -->
                        <div class="heading">
                            <h2>Related Products</h2>
                            <hr>
                        </div>
                        <!-- Items Slider -->
                        <div class="item-slide-4 with-nav">
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
                                    <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart Watch M26 Touch </a>
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
                                    <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart Watch M26 Touch </a>
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
                    </section>
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

@endsection
