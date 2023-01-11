@extends('layouts.frontend')
@section('title')
    Cart
@endsection
@section('content')
<div class="py-1 mt-4">
    <div class="container">
        <h6 class="mb-0">
            <a href="{{ url('/') }}">
                Home
            </a> /
            <a href="{{ url('') }}">
                Cart
            </a>
        </h6>
    </div>
</div>
<section class="container py-1d">
    <h2>Cart</h2>
        <hr>
    <div class="container shadow"  style="background-color: rgb(255, 255, 255); border-radius: 10px;">
        <div class="row">
            <div class="col-lg-12">
                @if($cartitems->count() > 0)
                <div class="shoping__cart__table">
                    <table>
                        <br>
                        <thead>
                            <tr>
                                <th class="shoping__product">Products</th>
                                <th class="shoping__product">Price</th>
                                <th class="shoping__product">Quantity</th>
                                <th class="shoping__product">Sub Total</th>
                                <th class="shoping__product"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php 
                            $total = 0;
                            $count = 0;
                            $sub_price = 0;
                            @endphp
                            @foreach ($cartitems as $cartitem)
                            <tr class="product_data">
                                <td class="shoping__cart__item">
                                    <input type="hidden" value="{{ $cartitem->product_id }}" class="prod_id">
                                    <img style="width: 50px;" src="{{ asset('assets/upload/productimage/'.$cartitem->products->product_img)}}" alt="Product Image">
                                    <h5>{{ $cartitem->products->product_name}}</h5>
                                </td>
                                <td class="shoping__cart__price">
                                    RM {{ $cartitem->products->price}}
                                </td>
                                
                                <td class="shoping__product">
                                    @if($cartitem->products->quantity >= $cartitem->product_quantity)
                                    <div class="input-group text-center mb-3" style="width: 100px;">
                                       
                                        <input type="number" id="num" value="{{ $cartitem->product_quantity}}" class="form-control text-center changeQuantity quantities" min="1" max="{{ $cartitem->products->quantity }}" step="1">
                                     
                                        @php 
                                        $sub_price = $cartitem->products->price * $cartitem->product_quantity ; 
                                        $total += $sub_price;
                                        @endphp
                                        </div>
                                         @else
                                         <span class="badge rounded-pill bg-danger float-start">Out of Stock</span>
                                     @endif
                                </td>
                                <td class="shoping__cart__total">
                                   RM {{ $sub_price}}
                                </td>
                                <td class="shoping__product">
                                    <button class="btn btn-danger delete-cart-item"><i class="fa fa-trash"></i> Remove</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="shoping__checkout" style="margin-bottom: 25px; margin-top: 0px;">
                    <h5>Cart Total</h5>
                    <ul>
                        <li>Total:<span>RM {{$total}}</span></li>
                    </ul>
                    @if ($total > 0)
                    <a href="{{url('checkout')}}" class="primary-btn">PROCEED TO CHECKOUT</a>
                    @endif
                </div>
            </div>
        </div>
        @else
        <div class="container" align="center">
            <div class="row">
                <div class="col-lg-12  mt-5">
                <div class="shoping__cart__table">
                   <h2 style="color: rgb(45, 67, 31)">Your <i class="fa fa-shopping-cart m"></i> Cart is empty</h2>
                   <a href="{{ url('home2') }}" class="btn btn-outline-success float-center mt-4">Continue Shopping</a>
                </div>
                </div>
            </div>
        </div>
                @endif
    </div>
</section>
@endsection