@extends('front-end.master')
@section('title')
    SHOPPING CART
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
                                <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
                                <li aria-current="page" class="breadcrumb-item active">Shopping cart</li>
                            </ol>
                        </nav>
                    </div>
                    <div id="basket" class="col-lg-9 col-sm-9 col-md-9">
                        <div class="box">
                                <h1 class="text-center">Shopping cart</h1>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover table-dark">
                                        <thead>
                                        <tr class="text-center">
                                            <th> Sl No</th>
                                            <th>Name</th>
                                            <th >Product Image</th>
                                            <th> Price Tk</th>
                                            <th>Quantity</th>
                                            <th> Total Price Tk</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php( $i = 1)
                                        @php( $sum = 0)
                                            @foreach( $cartProducts as $cartProduct )
                                                <tr class="text-center">
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{ $cartProduct->name }}</td>
                                                    <td>
                                                        <img src="{{ asset( $cartProduct->options->image) }}" alt=" ">
                                                    </td>
                                                    <td>{{ $cartProduct->price }}</td>
                                                    <td style="height: 30px">
                                                        {!! Form::open(['route'=>'update-cart','method'=>'POST']) !!}
{{--                                                            <input type="number" class="form-control" name="qty" value="{{ $cartProduct->qty }}">--}}
{{--                                                            <input type="submit" value="update" class="btn btn-success btn-block">--}}
                                                            {!! Form::number('qty',$cartProduct->qty,['min'=>'1']) !!}
                                                            {!! Form::hidden('rowId',$cartProduct->rowId) !!}
                                                        <button class="btn btn-success" type="submit" title="Update"><i class="fa fa-upload"></i></button>
                                                        {!! Form::close() !!}
                                                    </td>
                                                    <td>{{ $total = $cartProduct->price*$cartProduct->qty }}</td>
                                                    <td>
                                                        <a href="{{ route('delete-cart-item', ['rowId'=>$cartProduct->rowId]) }}" class="btn btn-danger btn-xs" title="delete"><i class="fa fa-trash-o"></i></a>
                                                    </td>
                                                </tr>
                                                <?php $sum  = $sum + $total; ?>
                                            @endforeach
                                        </tbody>
                                        <tfoot >
                                            <tr>
                                                <th colspan="6" class="text-primary">Item Total (TK.)</th>
                                                <th class="text-center">{{ $sum }}</th>
                                            </tr>
                                            <tr>
                                                <th colspan="6" class="text-primary">Vat Total (TK.)</th>
                                                <th class="text-center">{{ $vat = 0 }}</th>
                                            </tr>
                                            <tr>
                                                <th colspan="6" class="text-primary">Grand Total (TK.)</th>
                                                <th class="text-center">{{ $orderTotal = $sum+$vat }}</th>
                                                <?php Session::put('orderTotal', $orderTotal); ?>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.table-responsive-->
                                <div class="box-footer d-flex justify-content-between flex-column flex-lg-row">
                                    <div class="left">
                                        <a href="#" class="btn btn-outline-secondary">
                                            <i class="fa fa-chevron-left"></i> Continue shopping
                                        </a>
                                    </div>
                                    <div class="right">
                                        <button class="btn btn-outline-secondary"><i class="fa fa-refresh"></i> Update cart</button>
                                        <button type="text" class="btn btn-outline-secondary">
                                            @if(Session::get('customerId') && Session::get('shippingId'))
                                                <a href="{{ route('checkout-payment') }}" >Proceed to checkout</a> <i class="fa fa-chevron-right"></i>
                                            @elseif(Session::get('customerId'))
                                                <a href="{{ route('checkout-shipping') }}" >Proceed to checkout</a> <i class="fa fa-chevron-right"></i>
                                            @else
                                                <a href="{{ route('checkout') }}" >Proceed to checkout</a> <i class="fa fa-chevron-right"></i>
                                            @endif
                                        </button>
                                    </div>
                                </div>
                        </div>
                        <!-- /.box-->
                        <div class="row same-height-row">
                            <div class="col-lg-3 col-md-6">
                                <div class="box same-height">
                                    <h3>You may also like these products</h3>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="product same-height">
                                    <div class="flip-container">
                                        <div class="flipper">
                                            <div class="front"><a href="#"><img src="{{ asset('/') }}/front-end/imgs/product2.jpg" alt="" class="img-fluid"></a></div>
                                            <div class="back"><a href="#"><img src="{{ asset('/') }}/front-end/imgs/product2_2.jpg" alt="" class="img-fluid"></a></div>
                                        </div>
                                    </div><a href="#" class="invisible"><img src="{{ asset('/') }}/front-end/imgs/product2.jpg" alt="" class="img-fluid"></a>
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
                                            <div class="front"><a href="#"><img src="{{ asset('/') }}/front-end/imgs/product1.jpg" alt="" class="img-fluid"></a></div>
                                            <div class="back"><a href="#"><img src="{{ asset('/') }}/front-end/imgs/product1_2.jpg" alt="" class="img-fluid"></a></div>
                                        </div>
                                    </div><a href="#" class="invisible"><img src="{{ asset('/') }}/front-end/imgs/product1.jpg" alt="" class="img-fluid"></a>
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
                                            <div class="front"><a href="#"><img src="{{ asset('/') }}/front-end/imgs/product3.jpg" alt="" class="img-fluid"></a></div>
                                            <div class="back"><a href="#"><img src="{{ asset('/') }}/front-end/imgs/product3_2.jpg" alt="" class="img-fluid"></a></div>
                                        </div>
                                    </div><a href="#" class="invisible"><img src="{{ asset('/') }}/front-end/imgs/product3.jpg" alt="" class="img-fluid"></a>
                                    <div class="text">
                                        <h3>Fur coat</h3>
                                        <p class="price">$143</p>
                                    </div>
                                </div>
                                <!-- /.product-->
                            </div>
                        </div>
                    </div>
                    <!-- /.col-lg-9-->
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <div id="order-summary" class="box">
                            <div class="box-header">
                                <h3 class="mb-0">Order summary</h3>
                            </div>
                            <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td>Order subtotal</td>
                                        <th>$446.00</th>
                                    </tr>
                                    <tr>
                                        <td>Shipping and handling</td>
                                        <th>$10.00</th>
                                    </tr>
                                    <tr>
                                        <td>Tax</td>
                                        <th>$0.00</th>
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <th>$456.00</th>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-header">
                                <h4 class="mb-0">Coupon code</h4>
                            </div>
                            <p class="text-muted">If you have a coupon code, please enter it in the box below.</p>
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control"><span class="input-group-append">
                      <button type="button" class="btn btn-primary"><i class="fa fa-gift"></i></button></span>
                                </div>
                                <!-- /input-group-->
                            </form>
                        </div>
                    </div>
                    <!-- /.col-md-3-->
                </div>
            </div>
        </div>
    </div>
@endsection
