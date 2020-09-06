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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Main Css -->
    <link rel="stylesheet" href="{{ asset('css/stylebackend.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="/">Bakso Family</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">BaF</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Menu Utama</li>
                        <li class="nav-item dropdown active">
                            <a href="#" class="nav-link"><i class="fas fa-fire"></i><span>Kembali Ke Beranda</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link"><i class="far fa-user"></i> <span>Management
                                    User</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link"><i class="fas fa-th"></i>
                                <span>Produk</span></a>
                        </li>
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="card card-statistic-2">
                                <div class="card-icon shadow-primary bg-primary">
                                    <i class="fas fa-archive"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Total Orders</h4>
                                    </div>
                                    <div class="card-body">
                                        59
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="card card-statistic-2">
                                <div class="card-icon shadow-primary bg-primary">
                                    <i class="fas fa-dollar-sign"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Balance</h4>
                                    </div>
                                    <div class="card-body">
                                        $187,13
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="card card-statistic-2">
                                <div class="card-icon shadow-primary bg-primary">
                                    <i class="fas fa-shopping-bag"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Sales</h4>
                                    </div>
                                    <div class="card-body">
                                        4,732
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>Invoices</h4>
                            <div class="card-header-action">
                                <a href="#" class="btn btn-danger">View More <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive table-invoice">
                                <table class="table table-striped">
                                    <tr>
                                        <th>Invoice ID</th>
                                        <th>Customer</th>
                                        <th>Status</th>
                                        <th>Due Date</th>
                                        <th>Action</th>
                                    </tr>
                                    <tr>
                                        <td><a href="#">INV-87239</a></td>
                                        <td class="font-weight-600">Kusnadi</td>
                                        <td>
                                            <div class="badge badge-warning">Unpaid</div>
                                        </td>
                                        <td>July 19, 2018</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">Detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">INV-48574</a></td>
                                        <td class="font-weight-600">Hasan Basri</td>
                                        <td>
                                            <div class="badge badge-success">Paid</div>
                                        </td>
                                        <td>July 21, 2018</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">Detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">INV-76824</a></td>
                                        <td class="font-weight-600">Muhamad Nuruzzaki</td>
                                        <td>
                                            <div class="badge badge-warning">Unpaid</div>
                                        </td>
                                        <td>July 22, 2018</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">Detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">INV-84990</a></td>
                                        <td class="font-weight-600">Agung Ardiansyah</td>
                                        <td>
                                            <div class="badge badge-warning">Unpaid</div>
                                        </td>
                                        <td>July 22, 2018</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">Detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">INV-87320</a></td>
                                        <td class="font-weight-600">Ardian Rahardiansyah</td>
                                        <td>
                                            <div class="badge badge-success">Paid</div>
                                        </td>
                                        <td>July 28, 2018</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">Detail</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad
                        Nauval Azhar</a>
                </div>
                <div class="footer-right">
                    2.3.0
                </div>
            </footer>
        </div>
    </div>

    <!-- javascript -->
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="{{ asset('js/stisla.js') }}"></script>
    <!-- Template JS File -->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>