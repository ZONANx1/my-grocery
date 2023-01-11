@extends('layouts.app')

@section('content')
<div class="login-wrap">
    <div class="login-content shadow" style="border:solid rgb(53, 157, 82); border-radius: 10px;">
                <div class="login-logo">
                    <a href="#">
                        <img style="height: 100px; width: 100px;" src="images/logo/grocery.png" alt="CoolAdmin">
                        <h2 class="mt-4">{{ __('Register') }}</h2>
                        <hr>
                    </a>
                </div>
                <div class="login-form">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label>First Name</label>
                                <input id="fname" type="text" class="au-input au-input--full @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus>

                                @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Last Name</label>
                                    <input id="lname" type="text" class="au-input au-input--full @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>
                                    
                                    @error('lname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>E-Mail Address</label>
                                        <input id="email" type="email" class="au-input au-input--full @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                       
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input id="password" type="password" class="au-input au-input--full @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input id="password-confirm" type="password" class="au-input au-input--full" name="password_confirmation" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <hr>
                                <button type="submit" class="au-btn au-btn--block au-btn--green m-b-20">{{ __('Register') }}</button>
                                </form>
                            </div>
                        </div>
                    </div>
@endsection
