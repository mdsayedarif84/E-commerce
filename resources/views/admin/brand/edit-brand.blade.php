@extends('admin.master')
@section('title')
    EditBrand
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
                            <div class="col-lg-1 d-none d-lg-block bg-dark"></div>
                            <div class="col-lg-10">
                                <div class="p-5">
                                    <div class="text-center text-success">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back Edit Brand</h1>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h4> Edit Slider
                                                <a href="{!! route('manage-brand') !!}" class="btn btn-danger btn-sm float-right">Back</a>
                                            </h4>
                                        </div>
                                        <div class="card-body">
                                            {!! Form::open(['route'=>'update-brand','method'=>'POST','class'=>'user','name'=>'editBrandForm']) !!}
                                            <div class="form-group text-success">
                                                {!! Form::label('brand_name','Brand Name','',['class'=>'from-control']) !!}
                                                {!! Form::text('brand_name',$brand->brand_name,['class' => 'form-control form-control-user']) !!}
                                                {!! Form::hidden('brand_id',$brand->id,['class' => 'form-control form-control-user']) !!}
                                                <span class="text-danger">{{ $errors->has('id') ? $errors->first('id') : ' ' }}</span>
                                            </div>
                                            <div class="form-group text-success">
                                                {!! Form::label('brand_description','Brand Description','',['class'=>'from-control']) !!}
                                                {!! Form::textarea('brand_description',$brand->brand_description,['class' => 'form-control','placeholder'=>'Brand Description ']) !!}
                                                <span class="text-danger">{{ $errors->has('brand_description') ? $errors->first('brand_description') : ' ' }}</span>
                                            </div>
                                            <div class="form-group text-success">
                                                {!! Form::label('publication_status','Publication Status::','',['class'=>'from-control']) !!}
                                                {!! Form::select('publication_status',
                                                     [
                                                        'select option'=>'Select Option',
                                                        '1'=>'published',
                                                        '0'=>'unpublished'
                                                     ])
                                                !!}
                                                <span class="text-danger">{{ $errors->has('publication_status') ? $errors->first('publication_status') : ' ' }}</span>
                                            </div>
                                            {!! Form::submit('Update Brand Info',['class'=>'btn btn-success btn-user btn-block']) !!}
                                            <hr>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                            <div class="col-lg-1 d-none d-lg-block bg-dark"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.forms['editBrandForm'].elements['publication_status'].value= '{{ $brand->publication_status }}';
    </script>
@endsection
