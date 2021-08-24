
@extends('admin.master')
@section('title')
    ManageProduct
@endsection
@section('body')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Manage Product
                    <a href="{!! route('add-product') !!}" class="btn btn-primary btn-sm float-right">Add Product</a>
                </h4>
            </div>
        </div>
        <form method="post" action="">
            <table class="table table-dark table-striped">
                @if($message   =   Session::get('message'))
                    <h1 class="text-center text-primary" id="msg">{{ $message }}</h1>
                @endif
                <tr class="text-center text-primary">
                    <th>ID </th>
                    <th>Category Name</th>
                    <th>Brand Name </th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Quantity</th>
                    <th>Product Image</th>
                    <th>Publication Status</th>
                    <th>Action</th>
                </tr>
                @php($i=1)
                @foreach($products as $product)
                    <tr class="text-center">
                        <td>{{ $i++ }}</td>
                        <td>{{ $product->category_name }}</td>
                        <td>{{ $product->brand_name }}</td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->product_price }}</td>
                        <td>{{ $product->product_quantity }}</td>
                        <td>
                            <img src="{{ asset($product->product_image) }}" alt="fs" style="height: 80px; width: 200px"/>
                        </td>
                        <td>{{ $product->publication_status == 1 ? 'published' : 'Unpublished' }}</td>
                        <td>
                            <a class="btn btn-success btn-sm" href="" title="View Details">
                                <span class=" fa fa-eye fa-sm"></span>
                            </a>
                            @if($product->publication_status == 1)
                                <a class="btn btn-info btn-sm" href="{!! route('unpublished-product',['id'=>$product->id]) !!}" title="Published">
                                    <span class=" fas fa-arrow-up fa-sm"></span>
                                </a>
                            @else
                                <a class="btn btn-warning btn-sm" href="{!! route('published-product',['id'=>$product->id]) !!}" title="UnPublished">
                                    <span class=" fas fa-arrow-down fa-sm"></span>
                                </a>
                            @endif
                            <a class="btn btn-success btn-sm" href="{{ route('edit-product',['id'=>$product->id]) }}" title="Edit">
                                <span class=" fas fa-edit fa-sm"></span>
                            </a>
                            <a href="{!! route('delete-product',['id'=>$product->id]) !!}" onclick="return confirm('Are you sure to delete this Brand ??')" class="btn btn-danger btn-sm" title="Delete">
                                <span class=" fas fa-trash fa-sm"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </form>
    </div>
@endsection
