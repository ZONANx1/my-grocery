@extends('layouts.admin')
<base href="/public">
@section('title')
    Shop
@endsection
@section('main-content')
<div class="section__content section__content--p30" style="background-color: rgb(228, 228, 228);">
    <div class="container-fluid">
            <div class="col-md-12">
                <!-- DATA TABLE -->
                <h3 class="title-1 m-b-1 m-t-30">Product List</h3>
                @php
                $count = 0;
                @endphp
                <hr>
                <div class="table-data__tool">
                    <div class="table-data__tool-right">
                        <a class="au-btn au-btn-icon au-btn--green au-btn--small" href="{{url('add-product')}}">
                            <i class="zmdi zmdi-plus"></i>Create New Product</a>
                    </div>
                    <form action="{{ url('admin-search/'.$shop->id) }}" method="POST">
                        @csrf
                            <div class="input-group mb-2 pull-right">
                                <input type="search" name="product_search" class="form-control rounded" style="width: 300px;" placeholder="Search Product Name Here" aria-label="Search" aria-describedby="search-addon"/>
                                <button type="submit" class="btn btn-outline-success" style="color: rgb(255, 255, 255); background: green;">Search</button>
                            </div>
                        </form>
                </div>

                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Product Name</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Quantity</th>
                                <th>Price RM</th> 
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $products)
                            <tr class="tr-shadow">
                                <td>{{ ($product->currentPage() - 1) * $product->perPage() + $loop->iteration }}.
                                <td>{{$products->product_name}}</td>
                                <td>{{$products->description}}</td>
                                <td>{{$products->category}}</td>
                                <td>{{$products->quantity}}</td>
                                <td>{{$products->price}}</td>
                                <td>
                                    <img src="{{ asset('assets/upload/productimage/'.$products->product_img)}}" class="shadow" style="height: 100px;" alt="Product Image">
                                <td>
                                    <div class="table-data-feature">
                                        <a class="item" data-toggle="tooltip" data-placement="top" title="Details" href="{{url('details-product/'.$products->id)}}">
                                            <i class="zmdi zmdi-mail-send"></i>
                                        </a>
                                        <a class="item" data-toggle="tooltip" data-placement="top" title="Edit" href="{{url('edit-product/'.$products->id)}}">
                                            <i class="zmdi zmdi-edit"></i>
                                        </a>
                                        <a class="item" data-toggle="tooltip" data-placement="top" title="Delete" href="{{url('delete-product/'.$products->id)}}" onclick="return confirm('Are you sure to delete this category?')">
                                            <i class="zmdi zmdi-delete"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="spacer"></tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                    <div class="row float-initial mt-3">
                        <div class="mx-auto">
                            {!! $product->links() !!}
                        </div>
                    </div>
                    
                </div>
                <!-- END DATA TABLE -->
            </div>
        </div>
    </div>
@endsection