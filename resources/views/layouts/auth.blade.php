<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Bakso Family merupakan bakso yang berbasis di surabaya dengan konsep pemesanan online dan pastinya terenak dan termurah" />
    <meta name="keywords" content="Bakso, family, surabaya, online, umkm, digital, online payment" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="{{ asset('css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <!-- Magnific -->
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet" type="text/css" />
    <!-- FLEXSLIDER -->
    <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet" type="text/css" />
    <!-- Slider -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}" />
    <link href="{{ asset('css/swiper.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Main Css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="{{ asset('css/colors/default.css') }}" rel="stylesheet" id="color-opt">
</head>

<body>

    <div class="back-to-home rounded d-none d-sm-block">
        <a href="/" class="btn btn-icon btn-soft-primary"><i data-feather="home" class="icons"></i></a>
    </div>

    <!-- Hero Start -->
    <section class="bg-home bg-circle-gradiant d-flex align-items-center">
        <div class="bg-overlay bg-overlay-white"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8">
                    <div class="card login-page bg-white shadow rounded border-0">
                        <div class="card-body">
                            <h4 class="card-title text-center">@yield('titleContent')</h4>
                            @yield('content')
                        </div>
                    </div>
                    <!---->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Hero End -->

    <!-- javascript -->
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/scrollspy.min.js') }}"></script>
    <!-- SLIDER -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/owl.init.js') }}"></script>
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <script src="{{ asset('js/swiper.init.js') }}"></script>
    <!--FLEX SLIDER-->
    <script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
    <script src="{{ asset('js/flexslider.init.js') }}"></script>
    <!-- SLIDER -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/owl.init.js') }}"></script>
    <!-- Icons -->
    <script src="{{ asset('js/feather.min.js') }}"></script>
    <script src="https://unicons.iconscout.com/release/v2.1.9/script/monochrome/bundle.js"></script>
    <!-- Main Js -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>