@extends('layouts.frontend')
<base href="/public">
@section('title')
    Product Details
@endsection
@section('content')
<div class="py-1 mt-4">
    <div class="container">
        <h6 class="mb-0">
            <a href="{{ url('/home2') }}">
                Home
            </a> /
            <a href="">
                Product Details
            </a>
        </h6>
    </div>
</div>
 <section class="container py-1">
    <h2><strong>Product Details</strong></h2>
        <hr>
    <div class="container">
        
        <div class="row shadow product_data" style="padding-top: 20px; background-color:azure; border-radius: 10px">
            <div class="col-lg-6 col-md-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__item">
                        <img class="product__details__pic__item"
                            src="{{ asset('assets/upload/productimage/'.$product->product_img)}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product__details__text">
                    <h3>{{$product->product_name}}</h3>
                    <input type="hidden" value="{{ $product->id }}" class="prod_id">
                    <input type="hidden" value="1" class="quantities">
                    <div class="product__details__price">RM {{$product->price}}</div>
                    <p>{{$product->description}}</p>
                    <br>
                    @if($product->quantity > 0)
                    <button type="button" class="primary-btn addToCart-btn">ADD TO CART</button>
                    @else
                    <span class="badge rounded-pill bg-danger float-start">Out of Stock</span>  
                    @endif
                    <ul> 
                 
                        <li><b>Category</b> <span>{{$product->category}}</span></li>
                        <li><b>Shop</b> <span>{{$product->shops->shop_name}}</span></li>
                    </ul>
                </div>   
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection