@extends('layouts.admin')
<base href="/public">
@section('title')
    Shop
@endsection
@section('main-content')
<div class="section__content section__content--p30" style="margin-left: 50px; padding-top:20px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header" style="background-color: rgb(72, 186, 72); font-colour: white;">
                        <strong><b>Product Details</b></strong>
                    </div>
                    <div class="card-body card-block shadow">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="product_name" class=" form-control-label">Product Name</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="product_name" name="product_name" value="{{$product->product_name}}" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="description" class=" form-control-label">Description</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea name="description" id="description" rows="9" placeholder="Enter Product Description" class="form-control" readonly>{{$product->description}}</textarea>
                                </div>
                            </div>
                            <div class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="category" class=" form-control-label">Category</label>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="product_name" class=" form-control-label">Product Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="category" name="category" value="{{$product->category}}" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="price" class=" form-control-label">Price</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="price" name="price" value="{{$product->price}}" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                            <label for="quantity" class=" form-control-label">Quantity</label>
                                </div>
                                <div class="col-5 col-md-9">
                            <input type="text" id="quantity" name="quantity" value="{{$product->quantity}}" class="form-control" readonly>
                                </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                        <label for="product_img" class=" form-control-label">Image</label>
                            </div>
                            <div class="col-5 col-md-9">
                                <img src="{{ asset('assets/upload/productimage/'.$product->product_img)}}" class="shadow" style="height: 300px;" alt="Product Image">
                            </div>
                    </div>
                        <div class="card-footer" align="center">
                            <a href="{{url('edit-product/'.$product->id)}}" class="btn btn-primary" style="margin-right: 70px;">
                                <i class="fa fa-pencil-square-o"></i> Edit
                            </a>
                            <a href="{{url('product')}}" class="btn btn-danger">
                                <i class="fa fa-arrow-left"></i> Back
                            </a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection