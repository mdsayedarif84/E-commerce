@extends('admin.master')
@section('title')
    AddCategory
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
                            <div class="col-lg-2 d-none d-lg-block bg-info"></div>
                            <div class="col-lg-8">
                                <div class="p-5">
                                    <div class="text-center text-success">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back Add Category</h1>
                                    </div>
                                    <form class="user" method="post" action="{{ url('/category/new-category') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="from-control text-success" for="category"> Category Name</label>
                                            <input type="text" name="category_name" class="form-control form-control-user"
                                                    autofocus id="category" placeholder="Category Name">
                                        </div>
                                        <div class="form-group">
                                            <label class="from-control text-success" for="description"> Category description</label>
                                            <textarea type="text" name="category_description" class="form-control form-control-user" placeholder="Category description" id="description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="from-control text-success"> Publication Status</label>
                                            <select class="from-control" name="publication_status">
                                                <option value="1">published</option>
                                                <option value="0">Unpublished</option>
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            {{ __('Save Category Info') }}
                                        </button>
                                        <hr>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                            <div class="col-lg-2 d-none d-lg-block bg-info"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

