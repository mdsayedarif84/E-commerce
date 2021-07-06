@extends('admin.master')
@section('title')
    ManageOrder
@endsection
@section('body')
    <div class="container">
            <table class="table table-dark table-striped">
                @if($message   =   Session::get('message'))
                    <h1 class="text-center text-primary" id="msg">{{ $message }}</h1>
                @endif
                <tr class="text-center">
                    <th>ID </th>
                    <th>Customer Name</th>
                    <th>Order Total</th>
                    <th>Order Date</th>
                    <th>Order Status</th>
                    <th>Payment Type</th>
                    <th>Payment Status</th>
                    <th>Action</th>
                </tr>
                @php($i=1)
                @foreach($orders as $order)
                    <tr class="text-center">
                        <td>{{ $i++ }}</td>
                        <td>{{ $order->first_name.' '.$order->last_name }}</td>
                        <td>{{ $order->order_total }}</td>
                        <td>{{ $order->created_at }}</td>
                        <td>{{ $order->order_status }}</td>
                        <td>{{ $order->payment_type }}</td>
                        <td>{{ $order->payment_status }}</td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="{{ route('view-order', ['id'=>$order->id]) }}" title="View Order Details">
                                <span class=" fas fa-search-plus fa-sm"></span>
                            </a>
                            <a class="btn btn-secondary btn-sm" href="{{ route('view-order-invoice', ['id'=>$order->id]) }}" title="View Order Invoice">
                                    <span class=" fas fa-search-minus fa-sm"></span>
                            </a>
                            <a class="btn btn-primary btn-sm" href="{{ route('download-order-invoice', ['id'=>$order->id]) }}" title="Download Order Invoice">
                                <span class=" fas fa-download fa-sm"></span>
                            </a>
                            <a class="btn btn-success btn-sm" href="{{ route('edit-category', ['id'=>$order->id]) }}" title="Edit Order">
                                <span class=" fas fa-edit fa-sm"></span>
                            </a>
                            <a href="{{ route('delete-category', ['id'=>$order->id]) }}" onclick="return confirm('Are you sure to delete this ??')" class="btn btn-danger btn-sm" title="Delete Order">
                                <span class=" fa fa-trash fa-sm"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
    </div>
@endsection
