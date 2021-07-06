@extends('admin.master')
@section('title')
    AddProduct
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
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back Add Product</h1>
                                    </div>
                                    {!! Form::open(['route'=>'new-product','method'=>'POST','class'=>'user','enctype'=>'multipart/form-data']) !!}
                                    <div class="form-group text-success">
                                        {!! Form::label('category_id','Category Name','',['class'=>'form-control']) !!}
                                        <select class="form-control" name="category_id">
                                            <option value="">Select Option</option>
                                            @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group text-success">
                                        {!! Form::label('brand_id','Brand Name','',['class'=>'form-control col-md-3']) !!}
                                        <select class="form-control" name="brand_id">
                                            <option value="">Select Option</option>
                                            @foreach($brands as $brand)
                                                <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group text-success">
                                        {!! Form::label('product_name','Product Name','',['class'=>'from-control']) !!}
                                        {!! Form::text('product_name','',['class' => 'form-control form-control-user','placeholder'=>'product name ']) !!}
                                        <span class="text-danger">{{ $errors->has('product_name') ? $errors->first('product_name') : ' ' }}</span>
                                    </div>
                                    <div class="form-group text-success">
                                        {!! Form::label('product_price','Product Price','',['class'=>'from-control']) !!}
                                        {!! Form::number('product_price','',['class' => 'form-control form-control-user','placeholder'=>'product price ']) !!}
                                        <span class="text-danger">{{ $errors->has('product_price') ? $errors->first('product_price') : ' ' }}</span>
                                    </div>
                                    <div class="form-group text-success">
                                        {!! Form::label('product_quantity','Product Quantity','',['class'=>'from-control']) !!}
                                        {!! Form::number('product_quantity','',['class' => 'form-control form-control-user','placeholder'=>'product name ']) !!}
                                        <span class="text-danger">{{ $errors->has('brand_description') ? $errors->first('brand_description') : ' ' }}</span>
                                    </div>
                                    <div class="form-group text-success">
                                        {!! Form::label('short_description','Short Description','',['class'=>'from-control']) !!}
                                        {!! Form::textarea('short_description','',['class' => 'form-control','placeholder'=>'Short Description ']) !!}
                                        <span class="text-danger">{{ $errors->has('short_description') ? $errors->first('short_description') : ' ' }}</span>
                                    </div>
                                    <div class="form-group text-success">
                                        {!! Form::label('Long Description','',['class'=>'from-control']) !!}
                                        {!! Form::textarea('long_description','',['class' => 'form-control','id'=>'editor','placeholder'=>'Long Description ']) !!}
                                        <span class="text-danger">{{ $errors->has('long_description') ? $errors->first('long_description') : ' ' }}</span>
                                    </div>
                                    <div class="form-group text-success">
                                        {!! Form::label('product_image','Product Image','',['class'=>'from-control col-md-3']) !!}
                                        <div class="col-md-9">
                                            {!! Form::file('product_image',['accept'=>'image/*']) !!}
                                            <span class="text-danger">{{ $errors->has('brand_description') ? $errors->first('brand_description') : ' ' }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group text-success">
                                        {!! Form::label('publication_status','Publication Status','',['class'=>' col-md-3']) !!}
                                        <div class="col-md-9">
                                            {!! Form::select('publication_status',
                                                 [
                                                     'select '=>'Select Option',
                                                     '1'=>'published',
                                                     '0'=>'unpublished'
                                                 ])
                                            !!}
                                            <span class="text-danger">{{ $errors->has('publication_status') ? $errors->first('publication_status') : ' ' }}</span>
                                        </div>
                                    </div>
                                        {!! Form::submit('Save Product Info',['class'=>'btn btn-success btn-user btn-block']) !!}
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
