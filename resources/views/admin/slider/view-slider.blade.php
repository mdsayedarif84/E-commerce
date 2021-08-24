@extends('admin.master')
@section('title')
    View-Slider
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
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back View Slide Image</h1>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Slider
                                                <a href="{!! url('add.slider') !!}" class="btn btn-primary btn-sm float-right">Add Slider</a>
                                            </h4>
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th>ID</th>
                                                        <th>Heading</th>
                                                        <th>Image</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($sliders as $slider)
                                                    <tr>
                                                        <td>{!! $slider->id !!}</td>
                                                        <td>{!! $slider->headding !!}</td>
                                                        <td>
                                                            <img src="{!! asset('upload/slider/'.$slider->image) !!}" width='200px'; height="100px">
                                                        </td>
                                                        <td>
                                                            @if( $slider->status == 1 )
                                                                hidden
                                                            @else
                                                                Visible
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <a href="{!! route('edit-slider',$slider->id) !!}" class="btn btn-success btn-sm" title="Edit Data">
                                                                <span class=" fas fa-edit fa-sm"></span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
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

