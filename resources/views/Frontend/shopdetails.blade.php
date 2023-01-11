@extends('layouts.frontend')
<base href="/public">
@section('title')
    Shop Details
@endsection
@section('content')
<div class="py-1 mt-4">
    <div class="container">
        <h6 class="mb-0">
            <a href="{{ url('/') }}">
                Home
            </a> /
            <a href="{{ url('my-orders') }}">
                Orders
            </a>
        </h6>
    </div>
</div>
 <section class="container py-1">
    <h2><strong>Shop Details</strong></h2>
    <hr>
    <div class="container">
        <div class="row shadow" style="padding-top: 20px; background-color:azure; border-radius: 10px">
            <div class="col-lg-6 col-md-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__item">
                        <img class="product__details__pic__item"
                            src="{{ asset('assets/upload/shopimage/'.$shop->shop_img)}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product__details__text">
                    <h3>{{$shop->shop_name}}</h3>
                    <ul>
                        <li><b>Tell No</b><strong>{{$shop->tell_no}}</strong></li>
                        <li><b>Address</b> <span>{{$shop->address}}</span></li>
                        <li><b>City</b> <span>{{$shop->city}}</span></li>
                        <li><b>State</b> <span>{{$shop->state}}</span></li>
                    </ul>
                    <br>
                    <a href="{{url('product-shop/'.$shop->id)}}" class="primary-btn" style="border-radius: 10px;">Start Shop</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
