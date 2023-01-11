@extends('layouts.admin')
@section('title')
    Shop
@endsection
@section('main-content')
<div class="section__content section__content--p30" style="background-color: rgb(228, 228, 228);">
    <div class="container-fluid">
            <div class="col-md-12">
                <!-- DATA TABLE -->
                <h3 class="title-1 m-b-1 m-t-30">Shop</h3>
                <hr>
                <div class="table-data__tool">
                    <div class="table-data__tool-right">
                        <a class="au-btn au-btn-icon au-btn--green au-btn--small" href="{{url('add-shop')}}">
                            <i class="zmdi zmdi-plus"></i>Create New Shop</a>
                    </div>
                </div>
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2">
                        <thead>
                            <tr>
                                <th>Shop Name</th>
                                <th>Tell No</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>Postcode</th>
                                <th>State</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($shop as $shops)
                            <tr class="tr-shadow">
                                <td>{{$shops->shop_name}}</td>
                                <td>{{$shops->tell_no}}</td>
                                <td>{{$shops->address}}</td>
                                <td>{{$shops->city}}</td>
                                <td>{{$shops->postcode}}</td>
                                <td>{{$shops->state}}</td>
                                <td>
                                    <div class="table-data-feature">
                                        <a class="item" data-toggle="tooltip" data-placement="top" title="Details" href="{{url('details-shop/'.$shops->id)}}">
                                            <i class="zmdi zmdi-mail-send"></i>
                                        </a>
                                        <a class="item" data-toggle="tooltip" data-placement="top" title="Edit" href="{{url('edit-shop/'.$shops->id)}}">
                                            <i class="zmdi zmdi-edit"></i>
                                        </a>
                                        <a class="item" data-toggle="tooltip" data-placement="top" title="Delete" href="{{url('delete-shop/'.$shops->id)}}" onclick="return confirm('Are you sure to delete this shop?')">
                                            <i class="zmdi zmdi-delete"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="spacer"></tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                    
                </div>
                <!-- END DATA TABLE -->
            </div>
        </div>
    </div>
@endsection