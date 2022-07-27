<!-- TOP HEADER -->
<div id="top-header">
    <div class="container">
        <ul class="header-links pull-left">
            <li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
            <li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
            <li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
        </ul>
        <ul class="header-links pull-right">
            <li><a href="#"><i class="fa fa-dollar"></i> BDT</a></li>
            @php
                $customers_id = session()->get('customers_id');
            @endphp
            @if ($customers_id != null)
                <li><a href="{{url('customer-logout/')}}"><i class="fa fa-user-o"></i> Logout</a></li>
            @else
                <li><a href="{{url('login-check/')}}"><i class="fa fa-user-o"></i> login</a></li>
            @endif
            {{-- <li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li> --}}
        </ul>
    </div>
</div>
<!-- /TOP HEADER -->

<!-- MAIN HEADER -->
<div id="header">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- LOGO -->
            <div class="col-md-3">
                <div class="header-logo">
                    <a href="{{url('/')}}" class="logo">
                        <img src="/img/logo.png" alt="">
                    </a>
                </div>
            </div>
            <!-- /LOGO -->

            <!-- SEARCH BAR -->
            <div class="col-md-6">
                <div class="header-search">
                    <form>
                        <select class="input-select">
                            <option value="0">All Categories</option>
                            @foreach ($category as $value)
                                <option value="{{$value->category_ms_id}}">{{$value->category_ms_name}}</option>
                            @endforeach
                        </select>
                        <input class="input" placeholder="Search here">
                        <button class="search-btn">Search</button>
                    </form>
                </div>
            </div>
            <!-- /SEARCH BAR -->

            <!-- ACCOUNT -->
            <div class="col-md-3 clearfix">
                <div class="header-ctn">
                    <!-- Wishlist -->
                    <div>
                        <a href="#">
                            <i class="fa fa-heart-o"></i>
                            <span>Your Wishlist</span>
                            <div class="qty">2</div>
                        </a>
                    </div>
                    <!-- /Wishlist -->

                    <!-- Cart -->
                    @php
                        $cardarray = cardArray();
                    @endphp
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Your Cart</span>
                            <div class="qty">{{count($cardarray)}}</div>
                        </a>
                        <div class="cart-dropdown">
                            <div class="cart-list">
                                @foreach ($cardarray as $value)
                                    @php
                                        $images = $value['attributes'];
                                        $images=implode('|', $images);
                                        $img = explode('|', $images);
                                        $image = $img[0];
                                    @endphp

                                    <div class="product-widget">
                                        <div class="product-img">
                                            <img src="{{asset('/uploads/image/'.$image)}}" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#"><?= $value['name'] ?></a></h3>
                                            <h4 class="product-price"><span class="qty">{{$value['quantity']}}</span>&#2547;{{$value['price']}}</h4>
                                        </div>
                                        <button class="delete">
                                            <a href="{{url('/cart-item-delete/'.$value['id'])}}">
                                                <i class="fa fa-close"></i>
                                            </a>
                                        </button>
                                    </div>
                                @endforeach
                            </div>
                            <div class="cart-summary">
                                <small>{{count($cardarray)}} Products</small>
                                <h5>SUBTOTAL: &#2547; {{Cart::getTotal()}}</h5>
                            </div>
                            <div class="cart-btns">
                                <a href="{{url('login-check/')}}">View Cart</a>

                                @php
                                    $customer_id = session()->get('customer_id');
                                @endphp
                                @if ($customer_id != null)
                                    <a href="{{url('checkout-page/')}}">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
                                @else
                                    <a href="{{url('login-check/')}}">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
                                @endif
                            </div>

                        </div>
                    </div>
                    <!-- /Cart -->

                    <!-- Menu Toogle -->
                    <div class="menu-toggle">
                        <a href="#">
                            <i class="fa fa-bars"></i>
                            <span>Menu</span>
                        </a>
                    </div>
                    <!-- /Menu Toogle -->
                </div>
            </div>
            <!-- /ACCOUNT -->
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</div>
<!-- /MAIN HEADER -->