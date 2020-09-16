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
    @include('components.loader')

    @include('components.header')

    @include('components.sliders')

    @include('components.features')

    @include('components.feature-package')

    @include('components.package')

    @include('components.review')

    @include('components.social')

    @include('components.footer')

    <!-- Back to top -->
    <a href="javascript:void(0)" class="btn btn-icon btn-soft-primary back-to-top"><i data-feather="arrow-up"
            class="icons"></i></a>
    <!-- Back to top -->

    <!-- Main Js -->
    <script src="{{ asset('js/front.js') }}"></script>
</body>

</html>