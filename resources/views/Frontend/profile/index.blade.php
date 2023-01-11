@extends('layouts.frontend')

@section('title')
    Profile
@endsection

@section('content')
<div class="py-1 mt-4">
    <div class="container">
        <h6 class="mb-0">
            <a href="{{ url('/home2') }}">
                Home
            </a> /
            <a href="{{ url('profile') }}">
                Profile
            </a>
        </h6>
    </div>
</div>
<section class="container py-1">
    <h2><strong>Profile</strong></h2>
    <hr>
    <div class="container shadow" style="background-color: rgb(255, 255, 255); width: 770px;">
        <div class="checkout__form" style="padding: 10px;">
            <h4>Account Details</h4>
            <form action="{{url('edit-profile')}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Fist Name<span>*</span></p>
                                    <input type="text" name="fname" id="fname" style="border:solid 1px" value="{{ Auth::user()->fname }}" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Last Name<span>*</span></p>
                                    <input type="text" name="lname" id="lname" style="border:solid 1px" value="{{ Auth::user()->lname }}">
                                </div>
                            </div>
                        </div>
                        <div class="checkout__input">
                            <p>Address<span>*</span></p>
                            <textarea type="text" name="address1" id="address1" rows="4" style="background-color: rgb(255, 255, 255); width: 725px; padding: 5px; border:solid 1px #b2b2b2;" value="{{ Auth::user()->address1 }}"></textarea>
                        </div>
                            <div class="row form-group" style="width: 300px;">
                                <div class="col col-md-2">
                                    <label for="city" class=" form-control-label">City<span>*</span></label>
                                </div>
                                <div class="col-5 col-md-8" style="width: 900px;">
                                    <select name="city" id="city" class="form-control" style="border:solid 1px" value="{{ Auth::user()->city }}">
                                        <option value="">{{ Auth::user()->city }}</option>
                                        <option value="Bangi">Bangi</option>
                                        <option value="Dengkil">Dengkil</option>
                                        <option value="Kajang">Kajang</option>
                                        <option value="Serdang">Serdang</option>
                                        <option value="Hulu Langat">Hulu Langat</option>
                                    </select>
                                </div>
                            </div>
                       
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>State<span>*</span></p>
                                        <input type="text" name="state" id="state" style="border:solid 1px" value="{{ Auth::user()->state }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Postcode<span>*</span></p>
                                        <input type="text" name="postcode" id="postcode" style="border:solid 1px" value="{{ Auth::user()->postcode }}">
                                    </div>
                                </div>
                            </div>   
                    </div>
                </div>
                <div class="card-footer" align="center">
                    <button type="submit" class="btn btn-primary" style="margin-right: 70px;">
                        <i class="fa fa-dot-circle-o"></i> Update
                    </button>
                    <button type="reset" class="btn btn-danger">
                        <i class="fa fa-ban"></i> Reset
                    </button>
                </div>
                </form>
        </div>
    </div>
</section>
@endsection