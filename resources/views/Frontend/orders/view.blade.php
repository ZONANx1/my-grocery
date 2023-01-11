@extends('layouts.frontend')
<base href="/public">
@section('title')
    Order Details
@endsection

@section('content')
<div class="py-1 mt-4">
    <div class="container">
        <h6 class="mb-0">
            <a href="{{ url('/') }}">
                Home
            </a> /
            <a href="{{ url('my-orders') }}">
                Order Details
            </a>
        </h6>
    </div>
</div>
<div class="container py-1">
    <div class="row">
        <h2>Order Details</h2>
        <hr>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-success">
                    <h4>Order View
                        <a href="{{ url('my-orders') }}" class="btn btn-primary float-end">Back</a>
                    </h4>
                    @php
                        $total = 0;
                        $count = 0;
                    @endphp
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 order-details">
                            <h4>Shipping Details</h4>
                            <hr>

                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form" for="">First Name</label>
                                    <div class="form-control">{{ $orders->fname }}</div>
                                </div>

                                <div class="col-md-6">
                                    <label class="form" for="">Last Name</label>
                                    <div class="form-control">{{ $orders->lname }}</div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <label class="form" for="">Email</label>
                                    <div class="form-control">{{ $orders->email }}</div>
                                </div>

                                <div class="col-md-6 mt-3">
                                    <label class="form" for="">Contact No.</label>
                                    <div class="form-control">{{ $orders->phone }}</div>
                                </div>

                            </div>

                            <label class="form mt-3" for="">Address</label>
                            <textarea name="address" id="address" rows="4" class="form-control">{{ $orders->address }}</textarea>  
                            </textarea>

                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <label class="form" for="">City</label>
                                    <div class="form-control">{{ $orders->city }}</div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label class="form" for="">State</label>
                                    <div class="form-control">{{ $orders->state }}</div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label class="form" for="postcode">Postcode</label>
                                    <div name="postcode" class="form-control">{{ $orders->postcode }}</div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label class="form" for="postcode">Tracking No</label>
                                    <div name="postcode" class="form-control">{{ $orders->tracking_no }}</div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <h4>Order Details</h4>
                            <hr>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Product Price</th>
                                        <th>Total Price</th>
                                        <th>Image</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders->orderitems as $item)

                                        <tr>
                                            <td>{{ $count = $count + 1 }}.
                                            <td>{{ $item->products->product_name }}</td>
                                            <td>{{ $item->qty }}</td>
                                            <td>RM {{ number_format($item->price, 2) }}</td>
                                            <td>RM {{ number_format($item->price * $item->qty, 2) }}</td>
                                            <td>
                                                <img src="{{ asset('assets/upload/productimage/' . $item->products->product_img) }}"
                                                    width="50px" alt="">
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <h5 class="px-2">Total Amount: <span class="float-end">RM
                                    {{ number_format($orders->total_price, 2) }}</span></h5>


                        </div>

                    </div>


                </div>
            </div>


        </div>
    </div>
</div>
@endsection