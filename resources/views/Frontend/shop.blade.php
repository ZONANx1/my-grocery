@extends('layouts.frontend')


@section('content')

<section class="breadcrumb-section set-bg" data-setbg="assets/images/bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2 style="font-color: black;">E Grocery System</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.html">Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="categories">
    <div class="container" >
        <div class="row" style="margin-top: 50px;">
            <div class="section-title">
                <h2>Nearby Shop</h2>
            </div>
            <div class="categories__slider owl-carousel">
                @foreach ($shop as $shops)
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{ asset('assets/upload/shopimage/'.$shops->shop_img)}}">
                        <h5><a href="#">{{$shops->shop_name}}</a></h5>
                    </div>
                </div>
                 @endforeach
            </div>
        </div>
    </div>
</section>


<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Latest Product</h2>
                </div>
                <div class="featured__controls">
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            @foreach ($product as $products)
            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">

                <div class="featured__item">

                    <div class="featured__item__pic set-bg" data-setbg="{{ asset('assets/upload/productimage/'.$products->product_img)}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="{{url('product-details/'.$products->id)}}"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="{{url('add-to-cart2/'.$products->id)}}"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">{{$products->product_name}}</a></h6>
                        <h5>{{$products->price}}</h5>
                    </div>

                </div>

            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
