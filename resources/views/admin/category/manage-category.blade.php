@extends('admin.master')
@section('title')
    ManageCategory
@endsection
@section('body')
    <div class="container">
        <div class="text-center text-success">
            <h1 class="h4 text-gray-900 mb-4">Welcome Back Manage Category </h1>
        </div>
        <div class="card">
            <div class="card-header">
                <h4> Manage Category
                    <a href="{!! route('add-category') !!}" class="btn btn-primary btn-sm float-right">Add Category</a>
                </h4>
            </div>
            <div class="card-body">
                <form method="post" action="">
                    <table class="table table-dark table-striped">
                        @if($message   =   Session::get('message'))
                            <h1 class="text-center text-primary" id="msg">{{ $message }}</h1>
                        @endif
                        <tr class="text-center text-uppercase text-info">
                            <th>ID </th>
                            <th>Category Name</th>
                            <th>Category Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($categories as $category)
                            <tr class="text-center">
                                <td>{{ $i++ }}</td>
                                <td>{{ $category->category_name }}</td>
                                <td>{{ $category->category_description }}</td>
                                <td>{{ $category->publication_status == 1 ? 'published' : 'Unpublished' }}</td>
                                <td>
                                    @if($category->publication_status == 1)
                                        <a class="btn btn-info btn-sm" href="{{ route('unpublished-category', ['id'=>$category->id]) }}" title="Published">
                                            <span class=" fas fa-arrow-up fa-sm"></span>
                                        </a>
                                    @else
                                        <a class="btn btn-warning btn-sm" href="{{ route('published-category', ['id'=>$category->id]) }}" title="UnPublished">
                                            <span class=" fas fa-arrow-down fa-sm"></span>
                                        </a>
                                    @endif

                                    <a class="btn btn-success btn-sm" href="{{ route('edit-category', ['id'=>$category->id]) }}" title="Edit">
                                        <span class=" fas fa-edit fa-sm"></span>
                                    </a>
                                    <a href="{{ route('delete-category', ['id'=>$category->id]) }}" onclick="return confirm('Are you sure to delete this ??')" class="btn btn-danger btn-sm" title="Delete">
                                        <span class=" fas fa-trash fa-sm"></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </form>
            </div>
        </div>
    </div>
@endsection
