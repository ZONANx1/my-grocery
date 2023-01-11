<nav class="navbar navbar-expand-sm navbar-light bg-success">
    <div class="container">
        <img src="{{ asset('images/logo/grocery.png') }}" alt="Logo Image" width="50">
        <a class="navbar-brand" href="{{ url('/home2') }}"><h2 style="color: rgb(214, 214, 214);">E-Grocery</h2></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <h5><a class="nav-link {{ Request::is('/home2') ? 'active' : '' }}" aria-current="page" href="{{ url('/home2') }}">Home</a></h5>
            </li> 
            <li class="nav-item">
                <h5><a class="nav-link {{ Request::is('frontend-product') ? 'active' : '' }}" aria-current="page" href="{{ url('/frontend-product') }}">Products</a><h5>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <h5><a class="nav-link {{ Request::is('cart') ? 'active' : '' }}" href="{{ url('cart') }}">
                        <span class="badge badge-pill bg-danger cart-count">0</span> Cart
                    </a></h5>
                </li>
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <h5><a class="nav-link {{ Request::is('login') ? 'active' : '' }}" href="{{ route('login') }}">{{ __('Login') }}</a></h5>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <h5><a class="nav-link {{ Request::is('register') ? 'active' : '' }}" href="{{ route('register') }}">{{ __('Register') }}</a></h5>
                        </li>
                    @endif
                @else
                <li class="nav-item">
                    <h5><a class="nav-link {{ Request::is('my-orders') ? 'active' : '' }}" href="{{url('my-orders')}}">My Orders</a></h5>
                </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                            <strong>{{ Auth::user()->fname." ".Auth::user()->lname}}</strong>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{url('profile')}}"><i class="zmdi zmdi-account"></i>
                                Account
                            </a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            </li>
                        </ul>
                    </li>
                     @endguest       
                </ul>
            </div>
        </div>
    </nav>
    