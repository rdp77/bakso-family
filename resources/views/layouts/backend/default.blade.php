<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Icons -->
    <link rel="stylesheet preload" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Main Css -->
    <link rel="stylesheet" href="{{ asset('css/backend.css') }}">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            @include('components.backend.header')
            @include('components.backend.sidebar')
            @include('components.backend.main')
            @include('components.backend.footer')
        </div>
    </div>
    <!-- javascript -->
    <script src="{{ asset('js/backend.js') }}"></script>
</body>

</html>