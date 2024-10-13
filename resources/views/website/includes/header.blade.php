
    <!-- Top bar -->
    <div class="top-bar">
        <div class="container">
            <p>Welcome to SmartTech center!</p>
            <div class="right-sec">
                <ul>
                    <li>
                        <select class="selectpicker">
                            <option>French</option>
                            <option>German</option>
                            <option>Italian</option>
                            <option>Japanese</option>
                        </select>
                    </li>
                    <li>
                        <select class="selectpicker">
                            <option>(USD)Dollar</option>
                            <option>GBP</option>
                            <option>Euro</option>
                            <option>JPY</option>
                        </select>
                    </li>

                    <li><a href="#.">Store Location </a></li>
                    <li><a href="#.">FAQ </a></li>
                    <li><a href="#.">Newsletter </a></li>
                    @if(Session::get('customer_id'))
                    <li>
                        Hello {{Session::get('customer_name')}}
                    </li>
                    <li>
                        <a href="{{route('customer.dashboard')}}">Dashboard </a>
                    </li>
                    <li>
                        <a href="{{route('customer.logout')}}">Logout </a>
                    </li>
                    @else
                        <li>
                            <a href="{{route('customer.login')}}">Login </a>
                        </li>
                        <li>
                            <a href="{{route('customer.register')}}">Register </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="logo">
                <a href="{{route('home')}}">
                    <img src="{{asset('/')}}website/assets/images/logo.png" alt=""/>
                </a>
            </div>
            <div class="search-cate">
                <select class="selectpicker">
                    <option> All Categories</option>
                    <option> Accessories</option>
                    <option> TV & Video</option>
                    <option> Camera, Photo & Video</option>
                    <option> Cell Phones & Accessories</option>
                    <option> Headphones</option>
                    <option> Video Games</option>
                    <option> Bluetooth & Wireless </option>
                    <option> Gaming Console</option>
                    <option> Computers & Tablets</option>
                    <option> Monitors </option>
                </select>
                <input type="search" placeholder="Search entire store here...">
                <button class="submit" type="submit"><i class="icon-magnifier"></i></button>
            </div>

            <!-- Cart Part -->
            <ul class="nav navbar-right cart-pop">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="itm-cont">{{count(Cart::content())}}</span>
                        <i class="flaticon-shopping-bag"></i>
                        <strong>My Cart</strong> <br>
                        <span>{{count(Cart::content())}}  Item</span>
                    </a>
                    <ul class="dropdown-menu">
                        @foreach(Cart::content() as $item)
                        <li>
                            <div class="media-left">
                                <a href="#." class="thumb">
                                    <img src="{{asset($item->options->image)}}" class="img-responsive" alt="" >
                                </a>
                                <a href="#." class="tittle">{{$item->name}}</a>

                                <span>{{$item->qty}} x {{$item->price}} =</span>
                            </div>
                            <div class="media-right">
                                <span>{{$item->qty * $item->price}}</span>
                            </div>
                        </li>
                        @endforeach
                        <li class="btn-cart"> <a href="{{route('cart.show')}}" class="btn-round">View Cart</a> </li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- Nav -->
        <nav class="navbar ownmenu">
            <div class="container">

                <!-- Categories -->
                <div class="cate-lst">
                    <a  data-toggle="collapse" class="cate-style" href="#cater">
                        <i class="fa fa-list-ul"></i> Our Categories
                    </a>
                    <div class="cate-bar-in">
                        <div id="cater" class="collapse">
                            <ul>
                                @foreach($categories as $category)
                                <li class="sub-menu">
                                    <a href="{{route('product-category',['id'=>$category->id])}}">
                                        {{$category->name}}
                                    </a>
                                    @if(count($category->subCategories)>0)
                                    <ul>
                                        @foreach($category->subCategories as $subCategory)
                                        <li>
                                            <a href="{{route('product-sub-category',['id'=>$subCategory->id])}}">{{$subCategory->name}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Navbar Header -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span><i class="fa fa-navicon"></i></span> </button>
                </div>
                <!-- NAV -->
                <div class="collapse navbar-collapse" id="nav-open-btn">
                    <ul class="nav">
                        <li class="dropdown megamenu active">
                            <a href="{{route('home')}}" class="">Home </a>

                        </li>
                        <li class="dropdown"> <a href="index.html" class="dropdown-toggle" data-toggle="dropdown">Pages </a>
                            <ul class="dropdown-menu multi-level animated-2s fadeInUpHalf">
                                <li><a href="About.html"> About </a></li>
                                <li><a href="LoginForm.html"> Login Form </a></li>
                                <li><a href="GridProducts_3Columns.html"> Products 3 Columns </a></li>
                                <li><a href="GridProducts_4Columns.html"> Products 4 Columns </a></li>
                                <li><a href="ListProducts.html"> List Products </a></li>
                                <li><a href="Product-Details.html"> Product Details </a></li>
                                <li><a href="ShoppingCart.html"> Shopping Cart</a></li>
                                <li><a href="PaymentMethods.html"> Payment Methods </a></li>
                                <li><a href="DeliveryMethods.html"> Delivery Methods</a></li>
                                <li><a href="Confirmation.html"> Confirmation </a></li>
                                <li><a href="CheckoutSuccessful.html"> Checkout Successful </a></li>
                                <li><a href="Error404.html"> Error404 </a></li>
                                <li><a href="contact.html"> Contact </a></li>
                                <li class="dropdown-submenu"><a href="#."> Dropdown Level </a>
                                    <ul class="dropdown-menu animated-2s fadeInRight">
                                        <li><a href="#.">Level 1</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- Mega Menu Nav -->
                        <li class="dropdown megamenu"> <a href="index.html" class="dropdown-toggle" data-toggle="dropdown">Mega menu </a>
                            <div class="dropdown-menu animated-2s fadeInUpHalf">
                                <div class="mega-inside">
                                    <div class="top-lins">
                                        <ul>
                                            <li><a href="#."> Cell Phones & Accessories </a></li>
                                            <li><a href="#."> Carrier Phones </a></li>
                                            <li><a href="#."> Unlocked Phones </a></li>
                                            <li><a href="#."> Prime Exclusive Phones </a></li>
                                            <li><a href="#."> Accessories </a></li>
                                            <li><a href="#."> Cases </a></li>
                                            <li><a href="#."> Best Sellers </a></li>
                                            <li><a href="#."> Deals </a></li>
                                            <li><a href="#."> All Electronics </a></li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6>Electronics</h6>
                                            <ul>
                                                <li><a href="#."> Cell Phones & Accessories </a></li>
                                                <li><a href="#."> Carrier Phones </a></li>
                                                <li><a href="#."> Unlocked Phones </a></li>
                                                <li><a href="#."> Prime Exclusive Phones </a></li>
                                                <li><a href="#."> Accessories </a></li>
                                                <li><a href="#."> Cases </a></li>
                                                <li><a href="#."> Best Sellers </a></li>
                                                <li><a href="#."> Deals </a></li>
                                                <li><a href="#."> All Electronics </a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h6>Computers</h6>
                                            <ul>
                                                <li><a href="#."> Computers & Tablets</a></li>
                                                <li><a href="#."> Monitors</a></li>
                                                <li><a href="#."> Laptops & tablets</a></li>
                                                <li><a href="#."> Networking</a></li>
                                                <li><a href="#."> Drives & Storage</a></li>
                                                <li><a href="#."> Computer Parts & Components</a></li>
                                                <li><a href="#."> Printers & Ink</a></li>
                                                <li><a href="#."> Office & School Supplies </a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-2">
                                            <h6>Home Appliances</h6>
                                            <ul>
                                                <li><a href="#."> Refrigerators</a></li>
                                                <li><a href="#."> Wall Ovens</a></li>
                                                <li><a href="#."> Cooktops & Hoods</a></li>
                                                <li><a href="#."> Microwaves</a></li>
                                                <li><a href="#."> Dishwashers</a></li>
                                                <li><a href="#."> Washers</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4"> <img class=" nav-img" src="{{asset('/')}}website/assets/images/navi-img.png" alt="" > </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown"> <a href="blog.html" class="dropdown-toggle" data-toggle="dropdown">Blog</a>
                            <ul class="dropdown-menu multi-level animated-2s fadeInUpHalf">
                                <li><a href="Blog-2.html">Blog </a></li>
                                <li><a href="Blog_details.html">Blog Single </a></li>
                            </ul>
                        </li>
                        <li> <a href="shop.html">Buy theme! </a></li>
                    </ul>
                </div>

                <!-- NAV RIGHT -->
                <div class="nav-right"> <span class="call-mun"><i class="fa fa-phone"></i> <strong>Hotline:</strong> (+100) 123 456 7890</span> </div>
            </div>
        </nav>
    </header>
