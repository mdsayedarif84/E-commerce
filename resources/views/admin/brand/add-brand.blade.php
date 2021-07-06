@extends('admin.master')
@section('title')
    AddBlog
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
                            <div class="col-lg-2 d-none d-lg-block bg-dark"></div>
                            <div class="col-lg-8">
                                <div class="p-5">
                                    <div class="text-center text-success">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back Add Brand</h1>
                                    </div>
                                    {!! Form::open(['route'=>'new-brand','method'=>'POST','class'=>'user']) !!}
                                        <div class="form-group text-success">
                                            {!! Form::label('brand_name','Brand Name','',['class'=>'from-control']) !!}
                                            {!! Form::text('brand_name','',['class' => 'form-control form-control-user','placeholder'=>'brand Name']) !!}
                                            <span class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>
                                        </div>
                                        <div class="form-group text-success">
                                            {!! Form::label('brand_description','Brand Description','',['class'=>'from-control']) !!}
                                            {!! Form::textarea('brand_description','',['class' => 'form-control','placeholder'=>'Brand Description ']) !!}
                                            <span class="text-danger">{{ $errors->has('brand_description') ? $errors->first('brand_description') : ' ' }}</span>
                                        </div>
                                        <div class="form-group text-success">
                                            {!! Form::label('publication_status','Publication Status::','',['class'=>'from-control']) !!}
                                            {!! Form::select('publication_status',['select'=>'Select Option','1'=>'published','0'=>'unpublished']) !!}
                                            <span class="text-danger">{{ $errors->has('publication_status') ? $errors->first('publication_status') : ' ' }}</span>
                                        </div>
                                            {!! Form::submit('Save Brand Info',['class'=>'btn btn-success btn-user btn-block']) !!}
                                        <hr>
                                    {!! Form::close() !!}
                                    <hr>
                                </div>
                            </div>
                            <div class="col-lg-2 d-none d-lg-block bg-dark"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
