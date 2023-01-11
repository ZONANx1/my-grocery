<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" type="image/png" href="images/logo/grocery.png" />

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('frontend/css/bootstrap5.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">

     <!--======================== log masuk======================-->
     <link href="masuk/css/font-face.css" rel="stylesheet" media="all">
     <link href="masuk/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
     <link href="masuk/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
     <link href="masuk/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
 
     <!-- Bootstrap CSS-->
     <link href="masuk/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
 
     <!-- Vendor CSS-->
     <link href="masuk/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
     <link href="masuk/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
     <link href="masuk/vendor/wow/animate.css" rel="stylesheet" media="all">
     <link href="masuk/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
     <link href="masuk/vendor/slick/slick.css" rel="stylesheet" media="all">
     <link href="masuk/vendor/select2/select2.min.css" rel="stylesheet" media="all">
     <link href="masuk/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
 
     <!-- Main CSS-->
     <link href="masuk/css/theme.css" rel="stylesheet" media="all">
      <!--======================== log masuk======================-->
      
</head>
<body>
    <div class="page-wrapper">
        @include('inc.adminNav');
        @include('inc.adminSideBar');
        <div class="page-container">
            @include('inc.adminNav2');

            <div class="main-content">
            @yield('main-content')
            
            </div>
            @include('inc.footer')
        </div>
        
    </div>




    <!-- Scripts -->
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" defer></script>


    <!--============================= Login ========================-->
    <!-- Jquery JS-->
    <script src="masuk/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="masuk/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="masuk/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="masuk/vendor/slick/slick.min.js">
    </script>
    <script src="masuk/vendor/wow/wow.min.js"></script>
    <script src="masuk/vendor/animsition/animsition.min.js"></script>
    <script src="masuk/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="masuk/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="masuk/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="masuk/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="masuk/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="masuk/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="masuk/vendor/select2/select2.min.js">
    </script>
    <!-- Main JS-->
    <script src="masuk/js/main.js"></script>
     <!--============================= Login ========================-->

    <!--======================== Sweet alert ======================-->
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    @if(session('status'))
    <script>
    swal("{{ session('status') }}");
    </script>
    @endif

     @yield('scripts')

</body>
</html>
