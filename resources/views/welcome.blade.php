<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Bakso Family</title>
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
    <link href="css/magnific-popup.css" rel="stylesheet" type="text/css" />
    <!-- FLEXSLIDER -->
    <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet" type="text/css" />
    <!-- Slider -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}" />
    <link href="css/swiper.min.css" rel="stylesheet" type="text/css" />
    <!-- Main Css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="{{ asset('css/colors/default.css') }}" rel="stylesheet" id="color-opt">
</head>

<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->

    <!-- Navbar STart -->
    <header id="topnav" class="defaultscroll sticky">
        <div class="container">
            <!-- Logo container-->
            <div>
                <a class="logo" href="index.html">
                    <img src="{{ asset('images/logo-dark.png') }}" height="24" alt="">
                </a>
            </div>
            <div class="buy-button">
                <a href="/" target="_blank" class="btn btn-primary">{{ __('Beli Sekarang') }}</a>
            </div>
            <!--end login button-->
            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu nav-right">
                    <li><a href="/">Beranda</a></li>
                    <li class="has-submenu">
                        <a href="javascript:void(0)">Akun</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li><a href="documentation.html">Masuk</a></li>
                            <li><a href="changelog.html">Daftar</a></li>
                        </ul>
                    </li>
                    <li><a href="/">Kontak</a></li>
                </ul>
                <!--end navigation menu-->
                <div class="buy-menu-btn d-none">
                    <a href="/" target="_blank" class="btn btn-primary">Buy Now</a>
                </div>
                <!--end login button-->
            </div>
            <!--end navigation-->
        </div>
        <!--end container-->
    </header>
    <!--end header-->
    <!-- Navbar End -->

    <!-- Hero Start -->
    <section class="main-slider">
        <ul class="slides">
            <li class="bg-slider slider-rtl-2 d-flex align-items-center"
                style="background:url('images/shop/bg2.jpg') center center;">
                <div class="container">
                    <div class="row align-items-center mt-5">
                        <div class="col-lg-7 col-md-7">
                            <div class="title-heading mt-4">
                                <h1 class="display-4 title-white font-weight-bold mb-3">Bakso Bulat
                                </h1>
                                <p class="para-desc text-muted para-dark">Bakso yang terinspirasi dengan bola sehingga
                                    berbentuk bulat.</p>
                                <div class="mt-4">
                                    <a href="javascript:void(0)" class="btn btn-soft-primary">Beli Sekarang</a>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </li>
            <li class="bg-slider slider-rtl-1 d-flex align-items-center"
                style="background:url('images/shop/bg1.jpg') center center;">
                <div class="container">
                    <div class="row align-items-center mt-5">
                        <div class="col-lg-7 col-md-7">
                            <div class="title-heading mt-4">
                                <h1 class="display-4 title-white font-weight-bold mb-3">Bakso Kotak</h1>
                                <p class="para-desc text-muted para-dark">Bakso yang terinspirasi dari lemari sehingga
                                    berbentuk kotak.</p>
                                <div class="mt-4">
                                    <a href="javascript:void(0)" class="btn btn-soft-primary">Beli Sekarang</a>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </li>
            <li class="bg-slider slider-rtl-3 d-flex align-items-center"
                style="background:url('images/shop/bg3.jpg') center center;">
                <div class="container">
                    <div class="row align-items-center mt-5">
                        <div class="col-lg-7 col-md-7">
                            <div class="title-heading mt-4">
                                <h1 class="display-4 title-white font-weight-bold mb-3">Bakso Telur
                                </h1>
                                <p class="para-desc text-muted para-dark">Bakso yang diciptakan dengan rasa lapar yang
                                    luar biasa sehingga menjadi solusi bagi orang yang sangat lapar, karena telur
                                    mengandung banyak karbohidrat.</p>
                                <div class="mt-4">
                                    <a href="javascript:void(0)" class="btn btn-soft-primary">Beli Sekarang</a>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </li>
        </ul>
    </section>
    <!--end section-->
    <!-- Hero End -->

    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Kelebihan Bakso Family</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Kami <span
                                class="text-primary font-weight-bold">membuat bakso</span> dengan penuh rasa dan cinta
                            disertai dengan bahan yang berkualitas sehingga menjadi bakso yang enak, kenyal dan mudah
                            hancur dimulut.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        {{-- <div class="icon text-center rounded-circle mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-monitor fea icon-ex-md text-primary">
                                <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                                <line x1="8" y1="21" x2="16" y2="21"></line>
                                <line x1="12" y1="17" x2="12" y2="21"></line>
                            </svg>
                        </div> --}}
                        <div class="media-body">
                            <h4 class="title mb-0">Menggunakan Bahan Berkualitas</h4>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        {{-- <div class="icon text-center rounded-circle mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-heart fea icon-ex-md text-primary">
                                <path
                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                </path>
                            </svg>
                        </div> --}}
                        <div class="media-body">
                            <h4 class="title mb-0">Dibuat Dengan Lembut</h4>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        {{-- <div class="icon text-center rounded-circle mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-eye fea icon-ex-md text-primary">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                        </div> --}}
                        <div class="media-body">
                            <h4 class="title mb-0">Bebas Tambah Topping</h4>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        {{-- <div class="icon text-center rounded-circle mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-bold fea icon-ex-md text-primary">
                                <path d="M6 4h8a4 4 0 0 1 4 4 4 4 0 0 1-4 4H6z"></path>
                                <path d="M6 12h9a4 4 0 0 1 4 4 4 4 0 0 1-4 4H6z"></path>
                            </svg>
                        </div> --}}
                        <div class="media-body">
                            <h4 class="title mb-0">Kuah Nambah Sepuasnya</h4>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        {{-- <div class="icon text-center rounded-circle mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-feather fea icon-ex-md text-primary">
                                <path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5z"></path>
                                <line x1="16" y1="8" x2="2" y2="22"></line>
                                <line x1="17.5" y1="15" x2="9" y2="15"></line>
                            </svg>
                        </div> --}}
                        <div class="media-body">
                            <h4 class="title mb-0">Tekstur Lembut Dilidah</h4>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        {{-- <div class="icon text-center rounded-circle mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-code fea icon-ex-md text-primary">
                                <polyline points="16 18 22 12 16 6"></polyline>
                                <polyline points="8 6 2 12 8 18"></polyline>
                            </svg>
                        </div> --}}
                        <div class="media-body">
                            <h4 class="title mb-0">Citra Khas Rasa Bakso Asli</h4>
                        </div>
                    </div>
                </div>
                <!--end col-->

            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>

    <!-- Features Start -->
    <div class="container-fluid mt-5 pt-2">
        <div class="row">
            <div class="col-md-4">
                <div class="py-5 rounded shadow" style="background: url('images/shop/fea1.jpg') top center;">
                    <div class="p-4">
                        <h3>Paket <br> Lembut Dihati</h3>
                        <a href="javascript:void(0)" class="btn btn-sm btn-soft-primary mt-2">Beli Sekarang</a>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-md-4 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <div class="py-5 rounded shadow" style="background: url('images/shop/fea2.jpg') top center;">
                    <div class="p-4">
                        <h3>Paket <br> Sayang Selalu</h3>
                        <a href="javascript:void(0)" class="btn btn-sm btn-soft-primary mt-2">Beli Sekarang</a>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-md-4 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <div class="py-5 rounded shadow" style="background: url('images/shop/fea3.jpg') top center;">
                    <div class="p-4">
                        <h3>Paket <br> Terima Kasih</h3>
                        <a href="javascript:void(0)" class="btn btn-sm btn-soft-primary mt-2">Beli Sekarang</a>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
    <!-- Features End -->

    <section class="section">
        <div class="container">
            <div class="row mt-lg-4 align-items-center">
                <div class="col-lg-5 col-md-12 text-center text-lg-left">
                    <div class="section-title mb-4 mb-lg-0 pb-2 pb-lg-0">
                        <h4 class="title mb-4">Paket Cathering</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Mulai beli <span
                                class="text-primary font-weight-bold">Bakso Family</span> dengan harga murah dan
                            berkualitas di paket cathering, semua bisa Anda dapatkan sekaligus.</p>
                        {{-- <a href="javascript:void(0)" target="_blank" class="btn btn-primary mt-4">Buy Now
                            <span class="badge badge-pill badge-danger ml-2">v2.5</span></a> --}}
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-7 col-md-12">
                    <div class="row align-items-center ml-lg-5">
                        <div class="col-md-6 col-12 mt-4 pt-4 pl-md-0 pr-md-0">
                            <div class="card pricing-rates starter-plan text-center shadow rounded border-0">
                                <div class="card-body py-5">
                                    <h2 class="title text-uppercase text-primary mb-4">Lembut Dihati</h2>
                                    <div class="d-flex justify-content-center mb-4">
                                        <span class="h4 mb-0 mt-2">Rp.</span>
                                        <span class="price h1 mb-0">1.000.000</span>
                                        <span class="h4 align-self-end mb-1">/7 hari</span>
                                    </div>

                                    <ul class="list-unstyled mb-0 pl-0">
                                        <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><span
                                                    class="uim-svg" style=""><svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24" width="1em">
                                                        <path class="uim-primary"
                                                            d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                            opacity=".99"></path>
                                                        <path class="uim-tertiary"
                                                            d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z">
                                                        </path>
                                                    </svg></span></span>Semua Varian Bakso</li>
                                        <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><span
                                                    class="uim-svg" style=""><svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24" width="1em">
                                                        <path class="uim-primary"
                                                            d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                            opacity=".99"></path>
                                                        <path class="uim-tertiary"
                                                            d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z">
                                                        </path>
                                                    </svg></span></span>Gratis Antar</li>
                                        <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><span
                                                    class="uim-svg" style=""><svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24" width="1em">
                                                        <path class="uim-primary"
                                                            d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                            opacity=".99"></path>
                                                        <path class="uim-tertiary"
                                                            d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z">
                                                        </path>
                                                    </svg></span></span>700 Porsi</li>
                                        <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><span
                                                    class="uim-svg" style=""><svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24" width="1em">
                                                        <path class="uim-primary"
                                                            d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                            opacity=".99"></path>
                                                        <path class="uim-tertiary"
                                                            d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z">
                                                        </path>
                                                    </svg></span></span>Diskon Spesial Untuk Pembelian Kedua</li>
                                    </ul>
                                    <a href="javascript:void(0)" class="btn btn-primary mt-4">Dapatkan Paket</a>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-md-6 col-12 mt-4 pt-2 pt-md-4 pl-md-0 pr-md-0">
                            <div class="card pricing-rates bg-light text-center shadow rounded border-0">
                                <div class="card-body py-5">
                                    <h2 class="title text-uppercase text-primary mb-4">Paket Sayang Selalu</h2>
                                    <div class="d-flex justify-content-center mb-4">
                                        <span class="h4 mb-0 mt-2">Rp.</span>
                                        <span class="price h1 mb-0">500.000</span>
                                        <span class="h4 align-self-end mb-1">/3 hari</span>
                                    </div>

                                    <ul class="list-unstyled mb-0 pl-0">
                                        <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><span
                                                    class="uim-svg" style=""><svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24" width="1em">
                                                        <path class="uim-primary"
                                                            d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                            opacity=".99"></path>
                                                        <path class="uim-tertiary"
                                                            d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z">
                                                        </path>
                                                    </svg></span></span>Semua Varian Bakso</li>
                                        <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><span
                                                    class="uim-svg" style=""><svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24" width="1em">
                                                        <path class="uim-primary"
                                                            d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                            opacity=".99"></path>
                                                        <path class="uim-tertiary"
                                                            d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z">
                                                        </path>
                                                    </svg></span></span>Gratis Antar</li>
                                        <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><span
                                                    class="uim-svg" style=""><svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24" width="1em">
                                                        <path class="uim-primary"
                                                            d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                            opacity=".99"></path>
                                                        <path class="uim-tertiary"
                                                            d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z">
                                                        </path>
                                                    </svg></span></span>300 Porsi</li>
                                    </ul>
                                    <a href="javascript:void(0)" class="btn btn-primary mt-4">Dapatkan Paket</a>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>

    <section class="section bg-light">
        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Kata Pembeli Kami</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Kami selalu memberikan pelayanan <span
                                class="text-primary font-weight-bold">Istimewa</span> kepada pembeli kami, jadi sudah
                            sewajarnya pembeli kami mengulas dengan baik bakso kami.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row justify-content-center">
                <div class="col-lg-12 mt-4">
                    <div id="customer-testi" class="owl-carousel owl-theme owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(-1725px, 0px, 0px); transition: all 0.25s ease 0s; width: 4140px;">
                                <div class="owl-item cloned" style="width: 345px;">
                                    <div class="media customer-testi m-2">
                                        <img src="images/client/04.jpg" class="avatar avatar-small mr-3 rounded shadow"
                                            alt="">
                                        <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                            </ul>
                                            <p class="text-muted mt-2">" Enak. "</p>
                                            <h6 class="text-primary">- Christa Smith <small
                                                    class="text-muted">Mahasiswa</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 345px;">
                                    <div class="media customer-testi m-2">
                                        <img src="images/client/05.jpg" class="avatar avatar-small mr-3 rounded shadow"
                                            alt="">
                                        <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                            </ul>
                                            <p class="text-muted mt-2">" Mantap. "</p>
                                            <h6 class="text-primary">- Dean Tolle <small class="text-muted">Tukang Bakso
                                                    Sebelah</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 345px;">
                                    <div class="media customer-testi m-2">
                                        <img src="images/client/06.jpg" class="avatar avatar-small mr-3 rounded shadow"
                                            alt="">
                                        <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                            </ul>
                                            <p class="text-muted mt-2">" Berhubung promo saya beli saja. "</p>
                                            <h6 class="text-primary">- Jill Webb <small
                                                    class="text-muted">Cendekiawan</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 345px;">
                                    <div class="media customer-testi m-2">
                                        <img src="images/client/01.jpg" class="avatar avatar-small mr-3 rounded shadow"
                                            alt="">
                                        <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                            </ul>
                                            <p class="text-muted mt-2">" Variannya banyak. "</p>
                                            <h6 class="text-primary">- Thomas Israel <small class="text-muted">Penggemar
                                                    Bakso</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 345px;">
                                    <div class="media customer-testi m-2">
                                        <img src="images/client/02.jpg" class="avatar avatar-small mr-3 rounded shadow"
                                            alt="">
                                        <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="mdi mdi-star-half text-warning"></i></li>
                                            </ul>
                                            <p class="text-muted mt-2">" Mantap saya sampai nambah. "</p>
                                            <h6 class="text-primary">- Barbara McIntosh <small
                                                    class="text-muted">Mahasiswa</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 345px;">
                                    <div class="media customer-testi m-2">
                                        <img src="images/client/03.jpg" class="avatar avatar-small mr-3 rounded shadow"
                                            alt="">
                                        <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                            </ul>
                                            <p class="text-muted mt-2">" Joss, makannya sambil patah hati. "</p>
                                            <h6 class="text-primary">- Carl Oliver <small class="text-muted">Kang patah
                                                    hati</small>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 345px;">
                                    <div class="media customer-testi m-2">
                                        <img src="images/client/04.jpg" class="avatar avatar-small mr-3 rounded shadow"
                                            alt="">
                                        <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                            </ul>
                                            <p class="text-muted mt-2">" Makannya sambil lihat anime. "</p>
                                            <h6 class="text-primary">- Christa Smith <small class="text-muted">Wibu
                                                    Nolep</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 345px;">
                                    <div class="media customer-testi m-2">
                                        <img src="images/client/05.jpg" class="avatar avatar-small mr-3 rounded shadow"
                                            alt="">
                                        <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                            </ul>
                                            <p class="text-muted mt-2">" Saya dapat pacar disini. "</p>
                                            <h6 class="text-primary">- Dean Tolle <small class="text-muted">Kang
                                                    Tikung</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 345px;">
                                    <div class="media customer-testi m-2">
                                        <img src="images/client/06.jpg" class="avatar avatar-small mr-3 rounded shadow"
                                            alt="">
                                        <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                            </ul>
                                            <p class="text-muted mt-2">" Bener Bener Enak. "</p>
                                            <h6 class="text-primary">- Jill Webb <small class="text-muted">Kang
                                                    Gratisan</small></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                                    aria-label="Previous">‹</span></button><button type="button" role="presentation"
                                class="owl-next"><span aria-label="Next">›</span></button></div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
    </section>

    <section class="section">
        <div class="col-12 text-center">
            <div class="section-title">
                <h4 class="title mb-4">Terhubung dengan Kami !</h4>
                <p class="text-muted para-desc mx-auto">Dapatkan info menarik seputar <span
                        class="text-primary font-weight-bold">informasi terbaru, promo, diskon dll</span> di sosial
                    media kami yang tertera dibawah ini.</p>
                <div class="mt-4">
                    <a href="javascript:void(0)" class="btn btn-primary mt-2 mr-2"><i class="mdi mdi-instagram"></i>
                        Instagram</a>
                    <a href="javascript:void(0)" class="btn btn-outline-primary mt-2"><i class="mdi mdi-facebook"></i>
                        Facebook</a>
                </div>
            </div>
        </div>
    </section>
    <div class="position-relative">
        <div class="shape overflow-hidden text-footer">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <footer class="footer footer-bar" style="border-top: none">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="text-sm-left">
                        <p class="mb-0">Design with <i class="mdi mdi-heart text-danger"></i>
                        </p>
                    </div>
                </div>
                <!--end col-->

                <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <ul class="list-unstyled text-sm-right mb-0">
                        <li class="list-inline-item"><a href="javascript:void(0)"><img
                                    src="images/payments/american-ex.png" class="avatar avatar-ex-sm"
                                    title="American Express" alt=""></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)"><img
                                    src="images/payments/discover.png" class="avatar avatar-ex-sm" title="Discover"
                                    alt=""></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)"><img
                                    src="images/payments/master-card.png" class="avatar avatar-ex-sm"
                                    title="Master Card" alt=""></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/paypal.png"
                                    class="avatar avatar-ex-sm" title="Paypal" alt=""></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/visa.png"
                                    class="avatar avatar-ex-sm" title="Visa" alt=""></a></li>
                    </ul>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </footer>
    <!--end footer-->
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" class="btn btn-icon btn-soft-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
    <!-- Back to top -->

    <!-- javascript -->
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/scrollspy.min.js') }}"></script>
    <!-- SLIDER -->
    <script src="js/owl.carousel.min.js "></script>
    <script src="js/owl.init.js "></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/swiper.init.js"></script>
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