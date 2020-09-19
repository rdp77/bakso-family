<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('storage/images/favicon.ico') }}">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800">
    <!-- Icons -->
    <link rel="stylesheet preload" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Main Css -->
    {{-- <link rel="stylesheet" href="{{ asset('css/backend.css') }}"> --}}
    <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://demo.getstisla.com/assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="https://demo.getstisla.com/assets/css/style.css">
    <link rel="stylesheet" href="https://demo.getstisla.com/assets/css/components.css">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            @include('components.backend.header')
            @include('components.backend.sidebar')
            <div class="main-content" style="min-height: 559px;">
                <section class="section">
                    <div class="section-header">
                        <h1>@yield('titleContent')</h1>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
                            <div class="breadcrumb-item">@yield('breadcrumb')</div>
                            @yield('morebreadcrumb')
                        </div>
                    </div>

                    <div class="section-body">
                        @yield('content')
                    </div>
                </section>
            </div>
            @include('components.backend.footer')
        </div>
    </div>
    <!-- javascript -->
    <script src="{{ asset('js/backend.js') }}"></script>
    {{-- <script src="https://demo.getstisla.com/assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js">
    </script> --}}
    <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.min.js"></script>

    @yield('script')
</body>

</html>