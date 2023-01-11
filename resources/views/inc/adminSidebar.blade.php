     <!-- MENU SIDEBAR-->
     <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a class="mt-4" style="margin-left: 10px;" href="#">
                <img src="{{ asset('images/logo/grocery.png') }}" alt="Logo Image" width="50">
                <a class="navbar-brand mt-4" href="{{ url('/home2') }}"><h2 style="color: rgb(0, 0, 0);">E-Grocery</h2></a>
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    <li class="{{ Request::is('dashboard') ? 'active' : '' }} pl-3">
                        <a  href="{{url('dashboard')}}" style="font-size: 18px;">
                        <i class="zmdi zmdi-chart"></i>Dashboard</a>
                    </li>
                    <li class="{{ Request::is('shop') ? 'active' : '' }} pl-3">
                        <a href="{{url('shop')}}" style="font-size: 18px;">
                            <i class="zmdi zmdi-mall"></i>Shop</a>
                    </li>
                    <li class="{{ Request::is('product') ? 'active' : '' }} pl-3">
                        <a href="{{url('product')}}" style="font-size: 18px;">
                            <i class="zmdi zmdi-collection-item"></i>Product</a>
                    </li>
                    <li class="{{ Request::is('order') ? 'active' : '' }} pl-3">
                        <a href="{{url('order')}}" style="font-size: 18px;">
                            <i class="zmdi zmdi-shopping-cart"></i>Order</a>
                    </li>
                </ul>
            </nav>
        </div>
     </aside>
    <!-- END MENU SIDEBAR-->