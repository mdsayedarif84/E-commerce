
<header class="header mb-5">
    <!--
    *** TOPBAR ***
    _________________________________________________________
    -->
    <div id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offer mb-3 mb-lg-0"><a href="#" class="btn btn-success btn-sm">Offer of the day</a><a href="#" class="ml-1">Get flat 35% off on orders over $50!</a></div>
                <div class="col-lg-6 text-center text-lg-right">
                    <ul class="menu list-inline mb-0">
                        <li class="list-inline-item"><a href="{{ route('checkout') }}">Checkout</a></li>
                        <li class="list-inline-item">
                            @if(Session::get('customerId'))
                                <a href="#" onclick="document.getElementById('customerLogoutForm').submit(); " class="btn btn-primary btn-sm"><i class="fa fa-sign-in"></i> LogOut</a>
                                {!! Form::open(['route'=>'customer-logout', 'method'=>'POST','id'=>'customerLogoutForm']) !!}
                                {!! Form::close() !!}
                            @else
                                <a href="{{ route('new-customer-login') }}" class="btn btn-primary btn-sm"><i class="fa fa-sign-in"></i> Log in</a>
                            @endif
                        </li>
                        <li class="list-inline-item"><a href="{{ route('register') }}">Register</a></li>
                        <li class="list-inline-item"><a href="contact.html">Contact</a></li>
                        <li class="list-inline-item"><a href="#">Recently viewed</a></li>
                    </ul>
                </div>
            </div>
        </div>
{{--        Login modal--}}
        <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Customer login</h5>
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="customer-orders.html" method="post">
                            <div class="form-group">
                                <input id="email-modal" type="text" placeholder="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <input id="password-modal" type="password" placeholder="password" class="form-control">
                            </div>
                            <p class="text-center">
                                <a href="{{ route('new-customer-login') }}" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</a>
                            </p>
                        </form>
                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="register.html"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- *** TOP BAR END ***-->
    </div>
    {{--    menu section start--}}
    <nav class="navbar navbar-expand-lg">
        <div class="container"><a href="{{ route('/') }}" class="navbar-brand home"><img src="{{ asset('/') }}/front-end/imgs/logo.png" alt="Obaju logo" class="d-none d-md-inline-block"><img src="img/logo-small.png" alt="Obaju logo" class="d-inline-block d-md-none"><span class="sr-only">Obaju - go to homepage</span></a>
            <div class="navbar-buttons">
                <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
                <button type="button" data-toggle="collapse" data-target="#search" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></button><a href="basket.html" class="btn btn-outline-secondary navbar-toggler"><i class="fa fa-shopping-cart"></i></a>
            </div>
            <div id="navigation" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="{{ route('/') }}" class="nav-link active"><i class="fa fa-home faf-fw"></i>Home
                        </a>
                    </li>
                    <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Product<b class="caret"></b></a>
                        <ul class="dropdown-menu megamenu">
                            <li>
                                <div class="row">
                                    <div class="col-md-6 col-lg-3">
                                        <h5>Categories</h5>
                                        <ul class="list-unstyled mb-3">
                                            @foreach($categories as $category)
                                            <li class="nav-item"><a href="{{ route('category-product',['id'=>$category->id,'name'=>$category->category_name]) }}" class="nav-link">{{ $category->category_name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>

                                    <div class="col-md-6 col-lg-3">
                                        <h5>Featured</h5>
                                        <ul class="list-unstyled mb-3">
                                            <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                                            <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                                            <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                                        </ul>
                                        <h5>Looks and trends</h5>
                                        <ul class="list-unstyled mb-3">
                                            <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                                            <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                                            <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
{{--                    <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Brands<b class="caret"></b></a>--}}
{{--                        <ul class="dropdown-menu megamenu">--}}
{{--                            <li>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-6 col-lg-3">--}}
{{--                                        <h5>Clothing</h5>--}}
{{--                                        <ul class="list-unstyled mb-3">--}}
{{--                                            <li class="nav-item"><a href="{{ route('category-product') }}" class="nav-link">T-shirts</a></li>--}}
{{--                                            @foreach($brands as $brand)--}}
{{--                                            <li class="nav-item"><a href="" class="nav-link">{{ $brand->brand_name }}</a></li>--}}
{{--                                            @endforeach--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}

{{--                                    <div class="col-md-6 col-lg-3">--}}
{{--                                        <div class="banner"><a href="#"><img src="{{ asset('/') }}/front-end/imgs/banner.jpg" alt="" class="img img-fluid"></a></div>--}}
{{--                                        <div class="banner"><a href="#"><img src="{{ asset('/') }}/front-end/imgs/banner2.jpg" alt="" class="img img-fluid"></a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

                    <li class="nav-item"><a href="#" class="nav-link ">Mail Us</a></li>
                </ul>
                <div class="navbar-buttons d-flex justify-content-end">
                    <!-- /.nav-collapse-->
                    <div id="search-not-mobile" class="navbar-collapse collapse"></div><a data-toggle="collapse" href="#search" class="btn navbar-btn btn-primary d-none d-lg-inline-block"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></a>
                    <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block"><a href="{{ route('show-cart') }}" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span>3 items in cart</span></a></div>
                </div>
            </div>
        </div>
    </nav>
    <div id="search" class="collapse">
        <div class="container">
            <form role="search" class="ml-auto">
                <div class="input-group">
                    <input type="text" placeholder="Search" class="form-control">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</header>
