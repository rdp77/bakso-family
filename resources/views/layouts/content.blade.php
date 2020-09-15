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
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700&display=swap">
    <!-- Main Css -->
    <link href="{{ asset('css/front.css') }}" rel="stylesheet">
</head>

<body>
    @include('components.loader')

    @include('components.header')

    <section class="bg-half bg-light d-table w-100">
        <div class="bg-overlay bg-overlay-white"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h4 class="title">@yield('titleContent')</h4>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                                    @yield('breadcrumb')
                                    <li class="breadcrumb-item active" aria-current="page">@yield('titleContent')</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->

    <!-- Shape Start -->
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->

    @yield('content')

    @include('components.footer')

    <!-- Back to top -->
    <a href="javascript:void(0)" class="btn btn-icon btn-soft-primary back-to-top"><i data-feather="arrow-up"
            class="icons"></i></a>
    <!-- Back to top -->

    <!-- Main Js -->
    <script src="{{ asset('js/front.js') }}"></script>
    <!-- Quantity Plus Minus JS -->
    <script>
        $('.plus').click(function () {
                    if ($(this).prev().val() < 999) {
                        $(this).prev().val(+$(this).prev().val() + 1);
                    }
                });
                $('.minus').click(function () {
                    if ($(this).next().val() > 1) {
                        if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
                    }
                });
    </script>
</body>

</html>