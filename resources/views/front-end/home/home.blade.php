@extends('front-end.master')
@section('title')
    Home
@endsection
@section('body')
    <div id="all" class="pr-1" >
        <div id="content">
            <section style="background: url('{{asset('/')}}/front-end/imgs/yahama-150.jpg'); background-size: 100% 100%; background-attachment: fixed;">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-xl-12 col-md-12">
                            <div id="mySlider" class="carousel slide" data-ride="carousel" data-interval="5000">
                                <ol class="carousel-indicators">
                                    <li class="active" data-target="#mySlider" data-slide-to="0"></li>
                                    <li class="" data-target="#mySlider" data-slide-to="1"></li>
                                    <li class="" data-target="#mySlider" data-slide-to="2"></li>
                                    <li class="" data-target="#mySlider" data-slide-to="3"></li>
                                    <li class="" data-target="#mySlider" data-slide-to="4"></li>
                                </ol>
                                <div class="carousel-inner">
                                    @php $i = 1; @endphp
                                    @foreach( $slider as $slider)
                                        <div class="carousel-item {{ $i == '1' ? 'active':'' }} ">
                                            @php $i++; @endphp
                                            <img src="{!! asset('upload/slider/'.$slider->image) !!}" alt=""  class="d-block w-100" style="height: 500px;width: 100px;"/>
                                            <div class="carousel-caption">
                                                <h2 class="text-info">{!! $slider->headding !!}</h2>
                                                <p class="bg-danger">{!! $slider->description !!}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <a href="#mySlider" class="carousel-control-prev" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a href="#mySlider" class="carousel-control-next" data-slide="next" >
                                    <span class="carousel-control-next-icon"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--
                *** ADVANTAGES HOMEPAGE ***
                _________________________________________________________
                -->
                <div id="advantages" class="">
                    <div class="container">
                        <div class="row mb-4">
                            <div class="col-md-4">
                                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                                    <div class="icon"><i class="fa fa-heart"></i></div>
                                    <h3><a href="#">We love our customers</a></h3>
                                    <p class="mb-0">We are known to provide best possible service ever</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                                    <div class="icon"><i class="fa fa-tags"></i></div>
                                    <h3><a href="#">Best prices</a></h3>
                                    <p class="mb-0">You can check that the height of the boxes adjust when longer text like this one is used in one of them.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                                    <div class="icon"><i class="fa fa-thumbs-up"></i></div>
                                    <h3><a href="#">100% satisfaction guaranteed</a></h3>
                                    <p class="mb-0">Free returns on everything for 3 months.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.row-->
                    </div>
                    <!-- /.container-->
                </div>
            </section>
            <!-- /#advantages-->
            <!-- *** ADVANTAGES END ***-->
            <!--
            *** HOT PRODUCT SLIDESHOW ***
            _________________________________________________________
            -->
            <section style="background: url('{{asset('/')}}/front-end/imgs/slider3.jpg'); background-size: 100% 100%; background-attachment: fixed;" >
                <div id="hot">
                    <div class="box py-4">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="mb-0">Hot New Brand</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="product-slider owl-carousel owl-theme">
                            @foreach( $newProducts as $newProduct)
                                <div class="item">
                                    <div class="product">
                                        <div class="flip-container">
                                            <div class="flipper">
                                                <div class="front">
                                                    <a href="">
                                                        <img src="{{ asset($newProduct->product_image) }}" alt="" class="img-fluid">
                                                    </a>
                                                </div>
                                                <div class="back">
                                                    <a href="">
                                                        <img src="{{ asset($newProduct->product_image) }}" alt="" class="img-fluid">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="" class="invisible">
                                            <img src="{{ asset($newProduct->product_image) }}" alt="" class="img-fluid"></a>
                                        <div class="text">
                                            <h3><a href="">{!! $newProduct->product_name !!}</a></h3>
                                            <p class="price">
                                                <del></del>{!! $newProduct->product_price !!}
                                            </p>
                                        </div>
                                        <!-- /.text-->
                                        <!-- /.ribbon-->
                                    </div>
                                    <!-- /.product-->
                                </div>
                        @endforeach
                        <!-- /.product-slider-->
                        </div>
                        <!-- /.container-->
                    </div>
                    <!-- /#hot-->
                    <!-- *** HOT END ***-->
                </div>
            </section>
            <!--
            *** GET INSPIRED ***
            _________________________________________________________
            -->
            <div class="container">
                <div class="col-md-12">
                    <div class="box slideshow">
                        <h3>Get Inspired</h3>
                        <p class="lead">Get the inspiration from our world class designers</p>
                        <div id="get-inspired" class="owl-carousel owl-theme">
                            <div class="item active"><a href="#"><img src="{{ asset('/') }}/front-end/imgs/getinspired1.jpg" alt="Get inspired" class="img-fluid"></a></div>
                            <div class="item"><a href="#"><img src="{{ asset('/') }}/front-end/imgs/getinspired2.jpg" alt="Get inspired" class="img-fluid"></a></div>
                            <div class="item"><a href="#"><img src="{{ asset('/') }}/front-end/imgs/getinspired3.jpg" alt="Get inspired" class="img-fluid"></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- *** GET INSPIRED END ***-->
            {{--        new products--}}
            <section style="background: url('{{asset('/')}}/front-end/imgs/slider1.jpg'); background-size: 100% 100%; background-attachment: fixed;">
                <div id="hot">
                    <div class="box py-4">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="mb-0 text-danger">New Products</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="product-slider owl-carousel owl-theme">
                            @foreach($newProducts as $newProduct)
                                <div class="item">
                                    <div class="product">
                                        <div class="flip-container">
                                            <div class="flipper">
                                                <div class="front">
                                                    <a href="{{ route('product-details', ['id'=>$newProduct->id, 'name'=>$newProduct->product_name]) }}">
                                                        <img src="{{ asset($newProduct->product_image) }}" alt="" class="img-fluid">
                                                    </a>
                                                </div>
                                                <div class="back">
                                                    <a href="{{ route('product-details', ['id'=>$newProduct->id, 'name'=>$newProduct->product_name]) }}">
                                                        <img src="{{ asset($newProduct->product_image) }}" alt="" class="img-fluid">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{ route('product-details', ['id'=>$newProduct->id, 'name'=>$newProduct->product_name]) }}" class="invisible">
                                            <img src="{{ asset($newProduct->product_image) }}" alt="" class="img-fluid">
                                        </a>
                                        <div class="text">
                                            <h3><a href="{{ route('product-details', ['id'=>$newProduct->id, 'name'=>$newProduct->product_name]) }}">
                                                    {{ $newProduct->product_name }}</a>
                                            </h3>
                                            <p class="price">
                                                <del></del>{{$newProduct->product_price}}
                                            </p>

                                            <p class="buttons">
                                                <a href="{{ route('product-details', ['id'=>$newProduct->id, 'name'=>$newProduct->product_name]) }}" class="btn btn-outline-secondary">View detail </a>
                                                <a href="" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </p>
                                        </div>
                                        <!-- /.text-->
                                        <div class="ribbon sale">
                                            <div class="theribbon">CLICK</div>
                                            <div class="ribbon-background"></div>
                                        </div>
                                        <!-- /.ribbon-->
                                        <div class="ribbon new">
                                            <div class="theribbon">ADD</div>
                                            <div class="ribbon-background"></div>
                                        </div>
                                        <!-- /.ribbon-->
                                        <div class="ribbon gift">
                                            <div class="theribbon">CART</div>
                                            <div class="ribbon-background"></div>
                                        </div>
                                        <!-- /.ribbon-->
                                    </div>
                                    <!-- /.product-->
                                </div>
                        @endforeach
                        <!-- /.product-slider-->
                        </div>
                        <!-- /.container-->
                    </div>
                    <!-- /#hot-->
                    <!-- *** new products END ***-->
                </div>
            </section>
            <!--
            *** BLOG HOMEPAGE ***
            _________________________________________________________
            -->
            <div class="box text-center">
                <div class="container">
                    <div class="col-md-12">
                        <h3 class="text-uppercase">From our blog</h3>
                        <p class="lead mb-0">What's new in the world of fashion? <a href="blog.html">Check our blog!</a></p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="col-md-12">
                    <div id="blog-homepage" class="row">
                        <div class="col-sm-6">
                            <div class="post">
                                <h4><a href="post.html">Fashion now</a></h4>
                                <p class="author-category">By <a href="#">John Slim</a> in <a href="">Fashion and style</a></p>
                                <hr>
                                <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                <p class="read-more"><a href="post.html" class="btn btn-primary">Continue reading</a></p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="post">
                                <h4><a href="post.html">Who is who - example blog post</a></h4>
                                <p class="author-category">By <a href="#">John Slim</a> in <a href="">About Minimal</a></p>
                                <hr>
                                <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                <p class="read-more"><a href="post.html" class="btn btn-primary">Continue reading</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- /#blog-homepage-->
                </div>
            </div>
            <!-- /.container-->
            <!-- *** BLOG HOMEPAGE END ***-->
        </div>
    </div>
    <script>

    </script>
@endsection





