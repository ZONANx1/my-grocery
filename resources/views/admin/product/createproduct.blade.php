@extends('layouts.admin')
<base href="/public">
@section('main-content')
<div class="section__content section__content--p30" style="margin-left: 50px; padding-top:20px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header" style="background-color: rgb(72, 186, 72); font-colour: white;">
                        <strong><b>Add Product</b></strong>
                        <small> Form</small>
                    </div>
                    <div class="card-body card-block shadow">
                        <form action="{{url('create-product')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="product_name" class=" form-control-label">Product Name</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="product_name" name="product_name" placeholder="Enter Product Name" class="form-control">
                                </div>
                            </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="address" class=" form-control-label">Description</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <textarea name="description" id="description" rows="9" placeholder="Description" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="category" class=" form-control-label">Category</label>
                                </div>
                                <div class="col-5 col-md-9">
                                    <select name="category" id="category" class="form-control">
                                        <option value="">Please select</option>
                                        <option value="Meat">Meat</option>
                                        <option value="Vegetables">Vegetables</option>
                                        <option value="Fruit">Fruit</option>
                                        <option value="Household">Household</option>
                                        <option value="Drinks">Drinks</option>
                                        <option value="Health & Beauty">Health & Beauty</option>
                                        <option value="Fastfood">Fastfood</option>
                                        <option value="Snacks">Snacks</option>
                                        <option value="Fozen">Fozen</option>
                                        <option value="Bakery">Bakery</option>
                                        <option value="Pantry">Pantry</option>
                                        <option value="Canned">Canned</option>
                                        <option value="Pet">Pet</option>
                                        <option value="Baby Care">Baby Care</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                            <label for="price" class=" form-control-label">Price</label>
                                </div>
                                <div class="col-5 col-md-9">
                            <input type="text" id="price" name="price" placeholder="Price" class="form-control">
                                </div>
                        </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                            <label for="quantity" class=" form-control-label">Quantity</label>
                                </div>
                                <div class="col-5 col-md-9">
                            <input type="text" id="quantity" name="quantity" placeholder="Quantity" class="form-control">
                                </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="product_img" class=" form-control-label">Product Image</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="file" id="product_img" name="product_img" class="form-control-file">
                            </div>
                        </div>
                        <div class="card-footer" align="center">
                            <button type="submit" class="btn btn-primary" style="margin-right: 70px;">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                            <button type="reset" class="btn btn-danger">
                                <i class="fa fa-ban"></i> Reset
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection