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
    <link rel="shortcut icon" href="{{ asset('storage/images/favicon.ico') }}">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700&display=swap">
    <!-- Main Css -->
    <link href="{{ asset('css/front.css') }}" rel="stylesheet">
</head>

<body>

    <!-- ERROR PAGE -->
    <section class="bg-home d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 text-center">
                    <div class="text-uppercase mt-4 display-3 text-primary">@yield('code')</div>
                    <div class="text-capitalize text-dark mb-4 error-page">@yield('message')</div>
                    <p class="text-muted para-desc mx-auto">Jangan berputus asa, <span
                            class="text-primary font-weight-bold">Error ini hanya sementara</span> dan akan diperbaiki
                        secepatnya. Anda bisa klik tombol dibawah untuk kembali.</p>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="/" class="btn btn-primary mt-4 ml-2">Kembali</a>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- ERROR PAGE -->

    <!-- Main Js -->
    <script src="{{ asset('js/front.js') }}"></script>
</body>

</html>