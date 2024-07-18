<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from html.imjol.com/khadyo/khadyo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jun 2024 10:15:42 GMT -->

<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- Page Title -->
    <title>Khadyo - HTML 5 Template</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="favicon.png" />
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/client/css/meanmenu.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/client/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/client/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/client/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/client/css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/client/css/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/client/css/style.css') }}" />
</head>

<body>
    <!-- Preloader Starts -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>


    <!-- header -->
    <x-client.header></x-client.header>

    @yield('content')


    <x-client.footer></x-client.footer>


    <!-- ToTop Button -->
    <button class="scrollup"><i class="fas fa-angle-up"></i></button>

    <!-- Javascript Files -->
    <script src="{{ asset('assets/client/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/vendor/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/vendor/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/vendor/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/vendor/countdown.js') }}"></script>
    <script src="{{ asset('assets/client/js/vendor/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/vendor/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/client/js/vendor/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/vendor/easing.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/vendor/wow.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/main.js') }}"></script>
</body>


<!-- Mirrored from html.imjol.com/khadyo/khadyo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jun 2024 10:16:17 GMT -->

</html>
