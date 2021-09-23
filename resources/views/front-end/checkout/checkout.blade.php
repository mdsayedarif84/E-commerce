@extends('front-end.master')
@section('title')
    CHECKOUT
@endsection
@section('body')
    <div id="all">
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav>
                        <h4 class="text-center text-danger" style="font-size: large"> You must be login to complete valuable order.If your are not registered then register first </h4>
                        </nav>
                    </div>
                    <div id="checkout" class="col-lg-8">
                        <div class="box">
                            <h1 class="text-center text-primary">Customer Sign Up</h1>
                            {!! Form::open([ 'route'=>'customer-sign-up' ,'method'=>'POST' ]) !!}
                                <div class="content py-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="firstname">Firstname</label>
                                                <input name="first_name" id="firstname" type="text" class="form-control @error('first_name') is-invalid @enderror"
                                                       value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                                                @error('first_name')
                                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="lastname">Lastname</label>
                                                <input name="last_name" id="lastname" type="text" class="form-control @error('last_name') is-invalid @enderror"
                                                       value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
                                                @error('last_name')
                                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Email - </label>  <span class="text-danger" id="res"></span>
                                                <input name="email" id="email" type="email" class="form-control  @error('email') is-invalid @enderror"
                                                       value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="pwd">Password-</label>
                                                <input name="password" id="pwd" type="password" class="form-control @error('password') is-invalid @enderror"
                                                       value="{{ old('password') }}" required autocomplete="password" autofocus>
                                                @error('password')
                                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cpwd">Confirm Password -</label> <span class="text-danger" id="match"></span>
                                                <input name="confirm_password" id="cpwd" type="password" class="form-control @error('confirm_password') is-invalid @enderror"
                                                       value="{{ old('confirm_password') }}" required autocomplete="confirm_password" autofocus>
                                                @error('confirm_password')
                                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phone">Phone Number </label>
                                                <input name="phone_number" id="phone" type="number" class="form-control @error('phone_number') is-invalid @enderror"
                                                       value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>
                                                @error('phone_number')
                                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row-->
                                    <div class="row">
                                        <div class="col-md-6 col-lg-2"></div>
                                        <div class="col-md-6 col-lg-8">
                                            <div class="form-group">
                                                <label for="country">Address</label>
                                                <input name="address" id="country" class="form-control @error('address') is-invalid @enderror"
                                                       value="{{ old('address') }}" required autocomplete="address" autofocus>
                                                @error('address')
                                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-2"></div>
                                        <div class="text-center col-md-12">
                                            <button type="submit" id="btn" class="btn btn-primary"><i class="fa fa-user-md"></i> Register</button>
                                        </div>
                                    </div>
                                    <!-- /.row-->
                                </div>
                            {!! Form::close() !!}
                            <div class="box-footer d-flex justify-content-between"><a href="" class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i>Back to Basket</a>
                                <button type="submit" class="btn btn-primary">Continue to Delivery Method<i class="fa fa-chevron-right"></i></button>
                            </div>
                        </div>
                        <!-- /.box-->
                    </div>
                    <!-- /.col-lg-9-->
                    <div class="col-lg-4">
                        <div id="order-summary" class="card">
                            <div class="card-header">
                                <h3 class="mt-4 mb-4 text-center text-danger">Login</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    {!! Form::open(['route'=>'customer-login', 'method'=>'POST' ]) !!}
                                        <div class="form-group">
                                            <input id="email-modal" name="email" type="email" placeholder="email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input id="password-modal" name="password" type="password" placeholder="password" class="form-control">
                                        </div>
                                        <h4 class="text-center text-danger"> {{ Session::get('message') }}</h4>
                                        <p class="text-center">
                                            <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                                        </p>
                                    {!! Form::close() !!}
                                    <p class="text-center text-muted">Not registered yet?</p>
                                    <p class="text-center text-muted"><a href="register.html"><strong>Register now</strong></a>!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-lg-3-->
                </div>
            </div>
        </div>
    </div>

{{--    <script>--}}
{{--        document.querySelector('#btn').onclick = function (){--}}
{{--            var pwd     =   document.querySelector('#pwd').value,--}}
{{--            cpwd =    document.querySelector('#cpwd').value;--}}
{{--            // cpwd =    document.querySelector('#cpwd').value;--}}
{{--            if (pwd ==""){--}}
{{--                alert('Field is empty  match');--}}
{{--            }else if(pwd != cpwd){--}}
{{--                $('#match').html('Password Do not Match');--}}
{{--                $('#match').css('color','red');--}}
{{--                // alert('password do not match')--}}
{{--                return false;--}}
{{--            }else if(pwd == cpwd){--}}
{{--                $('#match').html('Password Match');--}}
{{--                $('#match').css('color','red');--}}
{{--                // alert('password  match');--}}
{{--            }return true;--}}
{{--        }--}}
{{--    </script>--}}

    <script type="text/javascript">
        $(document).ready(function (){
            $('#cpwd').keyup(function (){
                var pwd    =   $('#pwd').val();
                var cpwd   =   $('#cpwd').val();
                if(cpwd != pwd ){
                    $('#match').html('Password is not match');
                        $('#match').css('color','red');
                    return false;
                }else if(cpwd == pwd){
                    $('#match').html('Password match');
                    $('#match').css('color','green');
                    return true;
                }
            });
        });
    </script>
    <script>
        var email           =   document.getElementById('email');
        email.onblur        =   function (){
            var email       =   document.getElementById('email').value;
            var xmlHttp     =   new XMLHttpRequest();
            var serverPage  =   "http://localhost/ecommerce/public/ajax-email-check/"+email;
            xmlHttp.open('GET', serverPage);
            xmlHttp.onreadystatechange  =   function (){
                if (xmlHttp.readyState == 4 && xmlHttp.status  ==  200){
                    document.getElementById('res').innerHTML   =   xmlHttp.responseText;
                    if (xmlHttp.responseText == 'This Email Already exist.Try new email'){
                        document.getElementById('regBtn').disabled  =    true;
                    }else {
                        document.getElementById('regBtn').disabled  =    false;
                    }
                }
            }
            xmlHttp.send(null);
        }
    </script>
@endsection

