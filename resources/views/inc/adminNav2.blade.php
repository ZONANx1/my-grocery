<header class="header-desktop" style="background-color: rgb(52, 173, 52);">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
                <div class="header-button" style="margin-left: auto; margin-right: 20px;">
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="content">
                               <a class="js-acc-btn" href="#"> <strong>{{ Auth::user()->fname." ".Auth::user()->lname}}</strong></a>
                            </div>
                            <div class="account-dropdown js-dropdown"> 
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="{{url('profile')}}">
                                            <i class="zmdi zmdi-account"></i>Account</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                   <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>