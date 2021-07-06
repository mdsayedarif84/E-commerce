@extends('admin.master')
@section('title')
    ManageBrand
@endsection
@section('body')
    <div class="container">
        <form method="post" action="">
            <table class="table table-dark table-striped">
                @if($message   =   Session::get('message'))
                    <h1 class="text-center text-primary" id="msg">{{ $message }}</h1>
                @endif
                <tr class="text-center">
                    <th>ID </th>
                    <th>Category Name</th>
                    <th>Category Description</th>
                    <th>Publication Status</th>
                    <th style="width: 200px">Action</th>
                </tr>
                @php($i=1)
                @foreach($brands as $brand)
                    <tr class="text-center">
                        <td>{{ $i++ }}</td>
                        <td>{{ $brand->brand_name }}</td>
                        <td>{{ $brand->brand_description }}</td>
                        <td>{{ $brand->publication_status == 1 ? 'published' : 'Unpublished' }}</td>
                        <td>
                            @if($brand->publication_status == 1)
                                <a class="btn btn-info btn-sm" href="{{ route('unpublished-brand', ['id'=>$brand->id]) }}" title="Published">
                                    <span class=" fas fa-arrow-up fa-sm"></span>
                                </a>
                            @else
                                <a class="btn btn-warning btn-sm" href="{{ route('published-brand', ['id'=>$brand->id]) }}" title="UnPublished">
                                    <span class=" fas fa-arrow-down fa-sm"></span>
                                </a>
                            @endif

                            <a class="btn btn-success btn-sm" href="{{ route('edit-brand', ['id'=>$brand->id]) }}" title="Edit">
                                <span class=" fas fa-edit fa-sm"></span>
                            </a>
                            <a href="{{ route('delete-brand',['id'=>$brand->id]) }}" onclick="return confirm('Are you sure to delete this Brand ??')" class="btn btn-danger btn-sm" title="Delete">
                                <span class=" fas fa-trash fa-sm"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </form>
    </div>
@endsection
