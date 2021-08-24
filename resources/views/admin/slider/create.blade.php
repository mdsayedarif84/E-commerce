@extends('admin.master')
@section('title')
    SliderCreate
@endsection
@section('body')
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                @if($message   =   Session::get('message'))
                    <h1 class="text-center text-primary" id="msg">{{ $message }}</h1>
                @endif
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-1 d-none d-lg-block bg-info"></div>
                            <div class="col-lg-10">
                                <div class="p-5">
                                    <div class="text-center text-success">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back Add Slide </h1>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h4> Add Slider
                                                <a href="{!! url('home.slider') !!}" class="btn btn-danger btn-sm float-right">Back</a>
                                            </h4>
                                        </div>
                                        <div class="card-body">
                                            {!! Form::open( ['url'=>'store.slider','method'=>'POST','class'=>'user','enctype'=>'multipart/form-data']) !!}
                                            <div class="form-group text-success">
                                                {!! Form::label('headding','Headding','',['class'=>'from-control']) !!}
                                                {!! Form::text('headding','',['class' => 'form-control form-control-user','placeholder'=>'Headding']) !!}
                                                <span class="text-danger">{{ $errors->has('headding') ? $errors->first('headding') : ' ' }}</span>
                                            </div>
                                            <div class="form-group text-success">
                                                {!! Form::label('description','Description','',['class'=>'from-control']) !!}
                                                {!! Form::textarea('description','',['class' => 'form-control','placeholder'=>'Description ']) !!}
                                                <span class="text-danger">{{ $errors->has('description') ? $errors->first('description') : ' ' }}</span>
                                            </div>
                                            <div class="form-group text-success">
                                                {!! Form::label('link','Link','',['class'=>'from-control']) !!}
                                                {!! Form::text('link','',['class' => 'form-control form-control-user','placeholder'=>'link ']) !!}
                                                <span class="text-danger">{{ $errors->has('link') ? $errors->first('link') : ' ' }}</span>
                                            </div>
                                            <div class="form-group text-success">
                                                {!! Form::label('link_name','Link Name','',['class'=>'from-control']) !!}
                                                {!! Form::text('link_name','',['class' => 'form-control form-control-user','placeholder'=>'link name ']) !!}
                                                <span class="text-danger">{{ $errors->has('link_name') ? $errors->first('link_name') : ' ' }}</span>
                                            </div>
                                            <div class="form-group text-success">
                                                {!! Form::label('image','Image Upload','',['class'=>'from-control']) !!}
                                                {!! Form::file('image',['class' => 'form-control']) !!}
                                                <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : ' ' }}</span>
                                            </div>
                                            <div class="form-group text-success">
                                                <label> Status</label>
                                                <input type="checkbox" name="status"  >0-visible, 1-hidden
                                            </div>
                                            {!! Form::submit('Save Data',['class'=>'btn btn-success btn-user btn-block']) !!}
                                            <hr>
                                            {!! Form::close() !!}
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 d-none d-lg-block bg-info"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

