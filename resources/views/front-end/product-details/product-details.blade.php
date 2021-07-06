@extends('front-end.master')
@section('title')
    ProductDetails
@endsection
@section('body')
    <div id="all">
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- breadcrumb-->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Ladies</a></li>
                                <li class="breadcrumb-item"><a href="#">Tops</a></li>
                                <li aria-current="page" class="breadcrumb-item active">White Blouse Armani</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-3 order-2 order-lg-1">
                        <!--
                        *** MENUS AND FILTERS ***
                        _________________________________________________________
                        -->
                        <div class="card sidebar-menu mb-4">
                            <div class="card-header">
                                <h3 class="h4 card-title">Categories</h3>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-pills flex-column category-menu">
                                    <li><a href="category.html" class="nav-link">Men <span class="badge badge-secondary">42</span></a>
                                        <ul class="list-unstyled">
                                            <li><a href="category.html" class="nav-link">T-shirts</a></li>
                                            <li><a href="category.html" class="nav-link">Shirts</a></li>
                                            <li><a href="category.html" class="nav-link">Pants</a></li>
                                            <li><a href="category.html" class="nav-link">Accessories</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="category.html" class="nav-link active">Ladies  <span class="badge badge-light">123</span></a>
                                        <ul class="list-unstyled">
                                            <li><a href="category.html" class="nav-link">T-shirts</a></li>
                                            <li><a href="category.html" class="nav-link">Skirts</a></li>
                                            <li><a href="category.html" class="nav-link">Pants</a></li>
                                            <li><a href="category.html" class="nav-link">Accessories</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="category.html" class="nav-link">Kids  <span class="badge badge-secondary">11</span></a>
                                        <ul class="list-unstyled">
                                            <li><a href="category.html" class="nav-link">T-shirts</a></li>
                                            <li><a href="category.html" class="nav-link">Skirts</a></li>
                                            <li><a href="category.html" class="nav-link">Pants</a></li>
                                            <li><a href="category.html" class="nav-link">Accessories</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card sidebar-menu mb-4">
                            <div class="card-header">
                                <h3 class="h4 card-title">Brands <a href="#" class="btn btn-sm btn-danger pull-right"><i class="fa fa-times-circle"></i> Clear</a></h3>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Armani  (10)
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Versace  (12)
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Carlo Bruni  (15)
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Jack Honey  (14)
                                            </label>
                                        </div>
                                    </div>
                                    <button class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil"></i> Apply</button>
                                </form>
                            </div>
                        </div>
                        <div class="card sidebar-menu mb-4">
                            <div class="card-header">
                                <h3 class="h4 card-title">Colours <a href="#" class="btn btn-sm btn-danger pull-right"><i class="fa fa-times-circle"></i> Clear</a></h3>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"><span class="colour white"></span> White (14)
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"><span class="colour blue"></span> Blue (10)
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"><span class="colour green"></span>  Green (20)
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"><span class="colour yellow"></span>  Yellow (13)
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"><span class="colour red"></span>  Red (10)
                                            </label>
                                        </div>
                                    </div>
                                    <button class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil"></i> Apply</button>
                                </form>
                            </div>
                        </div>
                        <!-- *** MENUS AND FILTERS END ***-->
                        <div class="banner">
                            <a href="#">
                                <img src="{{ asset($product->product_image) }}" alt="sales 2014" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-9 order-1 order-lg-2">
                        <div id="productMain" class="row">
                            <div class="col-md-6">
                                <div data-slider-id="1" class="owl-carousel shop-detail-carousel">
                                    <div class="item"> <img src="{{ asset($product->product_image) }}" alt="" class="img-fluid"></div>
                                    <div class="item"> <img src="{{ asset($product->product_image) }}" alt="" class="img-fluid"></div>
                                    <div class="item"> <img src="{{ asset($product->product_image) }}" alt="" class="img-fluid"></div>
                                </div>
                                <div class="ribbon sale">
                                    <div class="theribbon">SALE</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon-->
                                <div class="ribbon new">
                                    <div class="theribbon">NEW</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon-->
                            </div>
                            <div class="col-md-6">
                                <div class="box">
                                    <h1 class="text-center">{{ $product->product_name }}</h1>
                                    <p class="goToDescription">{{ $product->short_description }}</p>
                                    <p class="price">TK. {{ $product->product_price }}<i class="fa fa-try"></i></p>

                                </div>
                                {{ Form::open(['route'=>'add-to-cart', 'method'=>'POST']) }}
                                    <div class="box">
                                        <div class="form-group">
                                            <label for="name">Quantiy</label>
                                            <input id="name" type="number" name="qty" min="1" value="" class="form-control">
                                            <input id="name" type="hidden" name="id"  value="{{ $product->id }}" class="form-control">
                                        </div>
                                        <p class="text-center">XXl/Xl</p>
                                        <div class="form-group">
                                            <div class="text-center buttons">
                                                <button type="submit" name="btn"  class="btn btn-primary">
                                                    <i class="fa fa-shopping-cart"></i>{{__('Add to cart') }}
                                                </button>
                                                <button href="" class="btn btn-outline-primary">
                                                    <i class="fa fa-heart"></i> {{__('Add to wishlist')}}
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                {{ Form::close() }}
                                <div data-slider-id="1" class="owl-thumbs">
                                    <button class="owl-thumb-item"><img src="{{ asset($product->product_image) }}" alt="" class="img-fluid"></button>
                                    <button class="owl-thumb-item"><img src="{{ asset($product->product_image) }}" alt="" class="img-fluid"></button>
                                    <button class="owl-thumb-item"><img src="{{ asset($product->product_image) }}" alt="" class="img-fluid"></button>
                                </div>
                            </div>
                        </div>
                        <div id="details" class="box">
                            <div class="box text-center text-primary"><h4>Product details</h4></div>

                            {{$product->long_description}}
                            <hr>
                            <div class="social">
                                <h4>Show it to your friends</h4>
                                <p><a href="#" class="external facebook"><i class="fa fa-facebook"></i></a><a href="#" class="external gplus"><i class="fa fa-google-plus"></i></a><a href="#" class="external twitter"><i class="fa fa-twitter"></i></a><a href="#" class="email"><i class="fa fa-envelope"></i></a></p>
                            </div>
                        </div>
                        <div class="row same-height-row">
                            <div class="col-md-3 col-sm-6">
                                <div class="box same-height">
                                    <h3>You may also like these products</h3>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="product same-height">
                                    <div class="flip-container">
                                        <div class="flipper">
                                            <div class="front"><a href=""><img src="{{ asset('/') }}/front-end/imgs//product2.jpg" alt="" class="img-fluid"></a></div>
                                            <div class="back"><a href=""><img src="{{ asset('/') }}/front-end/imgs//product2_2.jpg" alt="" class="img-fluid"></a></div>
                                        </div>
                                    </div><a href="" class="invisible"><img src="{{ asset('/') }}/front-end/imgs//product2.jpg" alt="" class="img-fluid"></a>
                                    <div class="text">
                                        <h3>Fur coat</h3>
                                        <p class="price">$143</p>
                                    </div>
                                </div>
                                <!-- /.product-->
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="product same-height">
                                    <div class="flip-container">
                                        <div class="flipper">
                                            <div class="front"><a href=""><img src="{{ asset('/') }}/front-end/imgs//product1.jpg" alt="" class="img-fluid"></a></div>
                                            <div class="back"><a href=""><img src="{{ asset('/') }}/front-end/imgs//product1_2.jpg" alt="" class="img-fluid"></a></div>
                                        </div>
                                    </div><a href="" class="invisible"><img src="{{ asset('/') }}/front-end/imgs//product1.jpg" alt="" class="img-fluid"></a>
                                    <div class="text">
                                        <h3>Fur coat</h3>
                                        <p class="price">$143</p>
                                        <p class="buttons"><a href="" class="btn btn-outline-secondary">View detail</a><a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a></p>

                                    </div>
                                </div>
                                <!-- /.product-->
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="product same-height">
                                    <div class="flip-container">
                                        <div class="flipper">
                                            <div class="front"><a href="#"><img src="{{ asset('/') }}/front-end/imgs//product3.jpg" alt="" class="img-fluid"></a></div>
                                            <div class="back"><a href="#"><img src="{{ asset('/') }}/front-end/imgs//product3_2.jpg" alt="" class="img-fluid"></a></div>
                                        </div>
                                    </div><a href="#" class="invisible"><img src="{{ asset('/') }}/front-end/imgs//product3.jpg" alt="" class="img-fluid"></a>
                                    <div class="text">
                                        <h3>Fur coat</h3>
                                        <p class="price">$143</p>
                                    </div>
                                </div>
                                <!-- /.product-->
                            </div>
                        </div>
                        <div class="row same-height-row">
                            <div class="col-md-3 col-sm-6">
                                <div class="box same-height">
                                    <h3>Products viewed recently</h3>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="product same-height">
                                    <div class="flip-container">
                                        <div class="flipper">
                                            <div class="front"><a href="#"><img src="{{ asset('/') }}/front-end/imgs//product2.jpg" alt="" class="img-fluid"></a></div>
                                            <div class="back"><a href="#"><img src="{{ asset('/') }}/front-end/imgs//product2_2.jpg" alt="" class="img-fluid"></a></div>
                                        </div>
                                    </div><a href="#" class="invisible"><img src="{{ asset('/') }}/front-end/imgs//product2.jpg" alt="" class="img-fluid"></a>
                                    <div class="text">
                                        <h3>Fur coat</h3>
                                        <p class="price">$143</p>
                                    </div>
                                </div>
                                <!-- /.product-->
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="product same-height">
                                    <div class="flip-container">
                                        <div class="flipper">
                                            <div class="front"><a href="#"><img src="{{ asset('/') }}/front-end/imgs//product1.jpg" alt="" class="img-fluid"></a></div>
                                            <div class="back"><a href="#"><img src="{{ asset('/') }}/front-end/imgs//product1_2.jpg" alt="" class="img-fluid"></a></div>
                                        </div>
                                    </div><a href="#" class="invisible"><img src="{{ asset('/') }}/front-end/imgs//product1.jpg" alt="" class="img-fluid"></a>
                                    <div class="text">
                                        <h3>Fur coat</h3>
                                        <p class="price">$143</p>
                                    </div>
                                </div>
                                <!-- /.product-->
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="product same-height">
                                    <div class="flip-container">
                                        <div class="flipper">
                                            <div class="front"><a href="#"><img src="{{ asset('/') }}/front-end/imgs//product3.jpg" alt="" class="img-fluid"></a></div>
                                            <div class="back"><a href="#"><img src="{{ asset('/') }}/front-end/imgs//product3_2.jpg" alt="" class="img-fluid"></a></div>
                                        </div>
                                    </div><a href="#" class="invisible"><img src="{{ asset('/') }}/front-end/imgs//product3.jpg" alt="" class="img-fluid"></a>
                                    <div class="text">
                                        <h3>Fur coat</h3>
                                        <p class="price">$143</p>
                                    </div>
                                </div>
                                <!-- /.product-->
                            </div>
                        </div>
                    </div>

                    <!-- /.col-md-9-->
                </div>
            </div>
        </div>
    </div>
    @endsection
