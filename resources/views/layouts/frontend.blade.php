<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>
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

    
    <!--======================== Frontend CSS ======================-->
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="customer/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="customer/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="customer/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="customer/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="customer/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="customer/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="customer/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="customer/css/style.css" type="text/css">
    <!--======================== Frontend CSS ======================-->

    <style>
        a {
            text-decoration: none !important;
            color: black;

        }

        body {
            background-image: url(https://image.freepik.com/free-photo/white-smooth-marble-textured-background_53876-108283.jpg);



            /* Full height */
            /* height: 100%; */

            /* Center and scale the image nicely */
            background-position: center;

            background-size: cover;


        }

    </style>

      
</head>
<body>
 @include('inc.frontendNavbar')


 @yield('content')

    
    @include('inc.footerfrontend')
   

</body>
  <!-- Scripts -->
<script src="customer/js/jquery-3.3.1.min.js"></script>
<script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" defer></script>

<!--============================= customer js ========================-->
<script src="customer/js/bootstrap.min.js"></script>
<script src="customer/js/jquery.nice-select.min.js"></script>
<script src="customer/js/jquery-ui.min.js"></script>
<script src="customer/js/jquery.slicknav.js"></script>
<script src="customer/js/mixitup.min.js"></script>
<script src="customer/js/owl.carousel.min.js"></script>
<script src="customer/js/main.js"></script>
<!--============================= customer js ========================-->

<!--============================= Login ========================-->
    <!-- Jquery JS-->
    
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

     <script src="{{ asset('frontend/js/custom.js') }}" type="text/javascript"></script>
    
     

    <!--======================== Sweet alert ======================-->
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    @if(session('status'))
    <script>
    swal("{{ session('status') }}");
    </script>
    @endif
    @yield('scripts')
    
     
</html>
