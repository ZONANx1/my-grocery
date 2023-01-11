@extends('layouts.frontend')
<base href="/public">
@section('title')
Shop Product
@endsection
@section('content')
<div class="py-3 mb-4">
    <div class="container">
        <h6 class="mb-0">
            <a href="{{ url('/home2') }}">
                Home
            </a> /
            <a href="{{ url('') }}">
                Shop Product
            </a>
        </h6>
    </div>
</div>
    <div class="container">
        <h2><strong>{{$shops->shop_name}} Shop Product</strong></h2>
        <hr>
        <div class="row">
            <div class="col-lg-3 col-md-5 mt-1">
                <div class="sidebar bg-white">
                    <div class="sidebar__item shadow p-4">
                        <h4>Category</h4>
                        <hr class="bg-success">
                        <ul>
                            <li><a href="{{url('shop-product-category/'.$shops->id.'/'.$category = 'Meat')}}">Meat</a></li>
                            <li><a href="{{url('shop-product-category/'.$shops->id.'/'.$category = 'Vegetables')}}">Vegetables</a></li>
                            <li><a href="{{url('shop-product-category/'.$shops->id.'/'.$category = 'Fruit')}}">Fruit</a></li>
                            <li><a href="{{url('shop-product-category/'.$shops->id.'/'.$category = 'Household')}}">Household</a></li>
                            <li><a href="{{url('shop-product-category/'.$shops->id.'/'.$category = 'Drinks')}}">Drinks</a></li>
                            <li><a href="{{url('shop-product-category/'.$shops->id.'/'.$category = 'Health & Beauty')}}">Health & Beauty</a></li>
                            <li><a href="{{url('shop-product-category/'.$shops->id.'/'.$category = 'Fastfood')}}">Fastfood</a></li>
                            <li><a href="{{url('shop-product-category/'.$shops->id.'/'.$category = 'Snacks')}}">Snacks</a></li>
                            <li><a href="{{url('shop-product-category/'.$shops->id.'/'.$category = 'Fozen')}}">Fozen</a></li>
                            <li><a href="{{url('shop-product-category/'.$shops->id.'/'.$category = 'Bakery')}}">Bakery</a></li>
                            <li><a href="{{url('shop-product-category/'.$shops->id.'/'.$category = 'Pantry')}}">Pantry</a></li>
                            <li><a href="{{url('shop-product-category/'.$shops->id.'/'.$category = 'Canned')}}">Canned</a></li>
                            <li><a href="{{url('shop-product-category/'.$shops->id.'/'.$category = 'Pet')}}">Pet</a></li>
                            <li><a href="{{url('shop-product-category/'.$shops->id.'/'.$category = 'Baby Care')}}">Baby Care</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-7">
              <form action="{{ url('product-shop-search/'.$shops->id) }}" method="POST">
                @csrf
                    <div class="input-group mb-3 pull-right">
                        <input type="search" name="product_search" class="form-control rounded" style="margin-left: 550px;" placeholder="Search Product Name Here" aria-label="Search" aria-describedby="search-addon"/>
                        <button type="submit" class="btn btn-outline-success">Search</button>
                    </div>
                </form>
                <div class="row">
                    @foreach ($product as $products)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item shadow" style="border-radius: 10px; border:solid rgb(66, 192, 102)">
                            <div class="product__item__pic set-bg" style="border-top-left-radius: 10px; border-top-right-radius: 10px;" data-setbg="{{ asset('assets/upload/productimage/'.$products->product_img)}}">
                                <ul class="product__item__pic__hover">
                                    <li><a href="{{url('product-details/'.$products->id)}}"><i class="fa fa-info"></i></a></li>
                                    <li><a href="{{url('add-to-cart2/'.$products->id)}}"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text" style="background-color: rgb(44, 186, 72)">
                                <h4><a href="#">{{$products->product_name}}</a></h4>
                                <h5>RM {{$products->price}}</h5>
                                <br>
                            </div>
                        </div>
                    </div>
                    @endforeach 
                </div>
                <div class="row float-initial">
                    <div class="mx-auto">
                        {!! $product->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection