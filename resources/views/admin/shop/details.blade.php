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
                        <strong><b>Shop Details</b></strong>
                    </div>
                    <div class="card-body card-block shadow">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="shop_name" class=" form-control-label" readonly>Shop Name</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="shop_name" name="shop_name" value="{{$shop->shop_name}}" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Tell Shop</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="tell_no" name="tell_no" value="{{$shop->tell_no}}" class="form-control" readonly>
                                </div>
                            </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="address" class=" form-control-label">Address</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <textarea name="address" id="address" rows="9" placeholder="Enter Shop Address" class="form-control" readonly>{{$shop->address}}</textarea>
                            </div>
                        </div>
                        <div class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="city" class=" form-control-label">City</label>
                                </div>
                                <div class="col-5 col-md-9">
                                    <select name="city" id="city" class="form-control" readonly>
                                        <option value="{{$shop->address}}">Please select</option>
                                        <option value="Bangi">Bangi</option>
                                        <option value="Kajang">Kajang</option>
                                        <option value="Shah Alam">Shah Alam</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                            <label for="postcode" class=" form-control-label">Postcode</label>
                                </div>
                                <div class="col-5 col-md-9">
                            <input type="text" id="postcode" name="postcode" value="{{$shop->postcode}}" class="form-control" readonly>
                                </div>
                        </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                            <label for="state" class=" form-control-label">State</label>
                                </div>
                                <div class="col-5 col-md-9">
                            <input type="text" id="state" name="state" value="{{$shop->state}}" class="form-control" readonly>
                                </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                        <label for="state" class=" form-control-label">Logo</label>
                            </div>
                            <div class="col-5 col-md-9">
                                <img src="{{ asset('assets/upload/shopimage/'.$shop->shop_img)}}" class="shadow" style="height: 300px;" alt="Shop Logo">
                            </div>
                    </div>
                        <div class="card-footer" align="center">
                            <a href="{{url('edit-shop/'.$shop->id)}}" class="btn btn-primary" style="margin-right: 70px;">
                                <i class="fa fa-pencil-square-o"></i> Edit
                            </a>
                            <a href="{{url('shop')}}" class="btn btn-danger">
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