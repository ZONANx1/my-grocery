@extends('layouts.app')

@section('content')
   
   
            <div class="login-wrap" style="margin-bottom: 30px;">
                <div class="login-content shadow" style="border:solid rgb(53, 157, 82); border-radius: 10px;">
                    <div class="login-logo">
                        <a href="#">
                            <img style="height: 100px; width: 100px;" src="images/logo/grocery.png" alt="CoolAdmin">
                            <h2 class="mt-4">Login</h2>
                            <hr>
                        </a>
                    </div>
                    <div class="login-form">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label>Email Address</label>
                                <input id="email" class="au-input au-input--full @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="au-input au-input--full @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            </div>
                            <div class="login-checkbox">
                                <label>
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>Remember Me
                                </label>
                                <label>
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                </label>
                            </div>
                            <hr>
                            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                        </form>
                    </div>
                </div>
            </div>

    
@endsection
