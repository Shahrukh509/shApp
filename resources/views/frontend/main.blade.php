<!DOCTYPE HTML>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Square Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="GetTemplates.co" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rochester&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rochester&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">


    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('frontend/css/icomoon.css') }}">
    <!-- Themify Icons-->
    <link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css') }}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-datepicker.min.css') }}">


    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

    <!-- Modernizr JS -->
    <script src="{{ asset('frontend/js/modernizr-2.6.2.min.js') }}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body class="real_stateWeb">

    <div class="gtco-loader"></div>

    <div id="page">


        <!-- <div class="page-inner"> -->
        @include('frontend.header')


        <div class="clearfix"></div>


        @yield('content')




        <!-- copy of herar4 -->




        @include('frontend.footer')





    </div>

    <div class="gototop js-top ">
        <a href="# " class="js-gotop "><i class="icon-arrow-up "></i></a>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('frontend/js/jquery.min.js') }} "></script>
    <!-- jQuery Easing -->
    <script src="{{ asset('frontend/js/jquery.easing.1.3.js') }} "></script>
    <!-- Bootstrap -->
    <script src="{{ asset('frontend/js/bootstrap.min.js') }} "></script>
    <!-- Waypoints -->
    <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }} "></script>
    <!-- Carousel -->
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }} "></script>
    <!-- countTo -->
    <script src="{{ asset('frontend/js/jquery.countTo.js') }} "></script>

    <!-- Stellar Parallax -->
    <script src="{{ asset('frontend/js/jquery.stellar.min.js') }} "></script>

    <!-- Magnific Popup -->
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }} "></script>
    <script src="{{ asset('frontend/js/magnific-popup-options.js') }} "></script>

    <!-- Datepicker -->
    <script src="{{ asset('frontend/js/bootstrap-datepicker.min.js') }} "></script>


    <!-- Main -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>

</body>

</html>