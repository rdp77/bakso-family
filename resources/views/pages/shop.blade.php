@extends('layouts.content')

@section('title', __('Bakso Family | Menu Bakso'))
@section('titleContent', __('Beli Bakso'))
@section('content')
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
                <div class="card border-0 sidebar sticky-bar">
                    <div class="card-body p-0">
                        <!-- SEARCH -->
                        {{-- <div class="widget">
                            <div id="search2" class="widget-search mb-0">
                                <form role="search" method="get" id="searchform" class="searchform">
                                    <div>
                                        <input type="text" class="border rounded" name="s" id="s"
                                            placeholder="Search Keywords...">
                                        <input type="submit" id="searchsubmit" value="Search">
                                    </div>
                                </form>
                            </div>
                        </div> --}}
                        <!-- SEARCH -->

                        <!-- CATAGORIES -->
                        {{-- <div class="widget mt-4 pt-2">
                            <h4 class="widget-title">Catagories</h4>
                            <ul class="list-unstyled mt-4 mb-0 blog-catagories">
                                <li><a href="jvascript:void(0)">Men</a></li>
                                <li><a href="jvascript:void(0)">Women</a></li>
                                <li><a href="jvascript:void(0)">Electronics</a></li>
                                <li><a href="jvascript:void(0)">Jewellery</a></li>
                                <li><a href="jvascript:void(0)">Shoes</a></li>
                                <li><a href="jvascript:void(0)">Kid’s Wear</a></li>
                                <li><a href="jvascript:void(0)">Sports</a></li>
                                <li><a href="jvascript:void(0)">Toys</a></li>
                                <li><a href="jvascript:void(0)">Gift Corners</a></li>
                            </ul>
                        </div> --}}
                        <!-- CATAGORIES -->

                        <!-- color -->
                        {{-- <div class="widget mt-4 pt-2">
                            <h4 class="widget-title">Color</h4>
                            <ul class="list-unstyled mt-4 mb-0">
                                <li class="list-inline-item"><a href="jvascript:void(0)"
                                        class="px-3 py-1 rounded-pill bg-primary"></a></li>
                                <li class="list-inline-item"><a href="jvascript:void(0)"
                                        class="px-3 py-1 rounded-pill bg-danger"></a></li>
                                <li class="list-inline-item"><a href="jvascript:void(0)"
                                        class="px-3 py-1 rounded-pill bg-success"></a></li>
                                <li class="list-inline-item"><a href="jvascript:void(0)"
                                        class="px-3 py-1 rounded-pill bg-info"></a></li>
                                <li class="list-inline-item"><a href="jvascript:void(0)"
                                        class="px-3 py-1 rounded-pill bg-secondary"></a></li>
                                <li class="list-inline-item"><a href="jvascript:void(0)"
                                        class="px-3 py-1 rounded-pill bg-warning"></a></li>
                            </ul>
                        </div> --}}
                        <!-- COlor -->

                        <!-- Top Products -->
                        <div class="widget mt-4 pt-2">
                            <h4 class="widget-title">{{ __('Terlaris') }}</h4>
                            <ul class="list-unstyled mt-4 mb-0">
                                <li class="media align-items-center">
                                    <a href="javascript:void(0)">
                                        <img src="images/shop/product/s1.jpg"
                                            class="img-fluid avatar avatar-small rounded shadow" style="height:auto;"
                                            alt="">
                                    </a>
                                    <div class="content ml-3">
                                        <a href="javascript:void(0)" class="text-dark h6">T-Shirt</a>
                                        <h6 class="text-muted small font-italic mb-0 mt-1">$18.00 <del
                                                class="text-danger ml-2">$22.00</del> </h6>
                                    </div>
                                </li>
                                <li class="media align-items-center mt-2">
                                    <a href="javascript:void(0)">
                                        <img src="images/shop/product/s3.jpg"
                                            class="img-fluid avatar avatar-small rounded shadow" style="height:auto;"
                                            alt="">
                                    </a>
                                    <div class="content ml-3">
                                        <a href="javascript:void(0)" class="text-dark h6">Watch</a>
                                        <h6 class="text-muted small font-italic mb-0 mt-1">$18.00 <del
                                                class="text-danger ml-2">$22.00</del> </h6>
                                    </div>
                                </li>
                                <li class="media align-items-center mt-2">
                                    <a href="javascript:void(0)">
                                        <img src="images/shop/product/s6.jpg"
                                            class="img-fluid avatar avatar-small rounded shadow" style="height:auto;"
                                            alt="">
                                    </a>
                                    <div class="content ml-3">
                                        <a href="javascript:void(0)" class="text-dark h6">Coffee Cup</a>
                                        <h6 class="text-muted small font-italic mb-0 mt-1">$18.00 <del
                                                class="text-danger ml-2">$22.00</del> </h6>
                                    </div>
                                </li>
                                <li class="media align-items-center mt-2">
                                    <a href="javascript:void(0)">
                                        <img src="images/shop/product/s8.jpg"
                                            class="img-fluid avatar avatar-small rounded shadow" style="height:auto;"
                                            alt="">
                                    </a>
                                    <div class="content ml-3">
                                        <a href="javascript:void(0)" class="text-dark h6">Wooden Stools</a>
                                        <h6 class="text-muted small font-italic mb-0 mt-1">$18.00 <del
                                                class="text-danger ml-2">$22.00</del> </h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-9 col-md-8 col-12 mt-5 pt-2 mt-sm-0 pt-sm-0">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-md-7">
                        <div class="section-title">
                            <h5 class="mb-0">51 Varian Bakso</h5>
                        </div>
                    </div>
                    <!--end col-->

                    {{-- <div class="section-title btn-sm btn-primary">
                        <h5 class="mb-0"><i class="mdi mdi-cart"></i>Checkout</h5>
                    </div> --}}
                    <div class="buy-menu-btn">
                        <a href="
                        @guest
                        {{ route('login') }}
                        @else
                        {{ route('shop') }}
                        @endguest
                        " class="btn btn-primary"><i class="mdi mdi-cart"></i>Keranjang</a>
                    </div>
                    {{-- <div class="col-lg-3 col-md-5 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="form custom-form">
                            <div class="form-group mb-0">
                                <select class="form-control custom-select" id="Sortbylist-job">
                                    <option>Sort by latest</option>
                                    <option>Sort by popularity</option>
                                    <option>Sort by rating</option>
                                    <option>Sort by price: low to high</option>
                                    <option>Sort by price: high to low</option>
                                </select>
                            </div>
                        </div>
                    </div> --}}
                    <!--end col-->
                </div>
                <!--end row-->

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card shop-list border-0 position-relative overflow-hidden">
                            <div class="shop-image position-relative overflow-hidden rounded shadow">
                                <a href="shop-product-detail.html"><img src="images/shop/product/s1.jpg"
                                        class="img-fluid" alt=""></a>
                                <a href="shop-product-detail.html" class="overlay-work">
                                    <img src="images/shop/product/s-1.jpg" class="img-fluid" alt="">
                                </a>
                                <ul class="list-unstyled shop-icons">
                                    <li class="mt-2"><a href="{{ route('shopdetails') }}"
                                            class="btn btn-icon btn-pills btn-soft-primary"><svg
                                                xmlns="https://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-eye icons">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg></a></li>
                                    <li class="mt-2"><a href="shop-cart.html"
                                            class="btn btn-icon btn-pills btn-soft-warning"><svg
                                                xmlns="https://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-shopping-cart icons">
                                                <circle cx="9" cy="21" r="1"></circle>
                                                <circle cx="20" cy="21" r="1"></circle>
                                                <path
                                                    d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6">
                                                </path>
                                            </svg></a></li>
                                </ul>
                            </div>
                            <div class="card-body content pt-4 p-2">
                                <a href="shop-product-detail.html" class="text-dark product-name h6">Branded T-Shirt</a>
                                <div class="d-flex justify-content-between mt-1">
                                    <h6 class="text-muted small font-italic mb-0 mt-1">$16.00 <del
                                            class="text-danger ml-2">$21.00</del> </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card shop-list border-0 position-relative overflow-hidden">
                            <div class="shop-image position-relative overflow-hidden rounded shadow">
                                <a href="shop-product-detail.html"><img src="images/shop/product/s2.jpg"
                                        class="img-fluid" alt=""></a>
                                <a href="shop-product-detail.html" class="overlay-work">
                                    <img src="images/shop/product/s-2.jpg" class="img-fluid" alt="">
                                </a>
                                <ul class="list-unstyled shop-icons">
                                    <li class="mt-2"><a href="{{ route('shopdetails') }}"
                                            class="btn btn-icon btn-pills btn-soft-primary"><svg
                                                xmlns="https://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-eye icons">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg></a></li>
                                    <li class="mt-2"><a href="shop-cart.html"
                                            class="btn btn-icon btn-pills btn-soft-warning"><svg
                                                xmlns="https://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-shopping-cart icons">
                                                <circle cx="9" cy="21" r="1"></circle>
                                                <circle cx="20" cy="21" r="1"></circle>
                                                <path
                                                    d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6">
                                                </path>
                                            </svg></a></li>
                                </ul>
                            </div>
                            <div class="card-body content pt-4 p-2">
                                <a href="shop-product-detail.html" class="text-dark product-name h6">Shopping Bag</a>
                                <div class="d-flex justify-content-between mt-1">
                                    <h6 class="text-muted small font-italic mb-0 mt-1">$21.00 <del
                                            class="text-danger ml-2">$25.00</del> </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card shop-list border-0 position-relative overflow-hidden">
                            <div class="shop-image position-relative overflow-hidden rounded shadow">
                                <a href="shop-product-detail.html"><img src="images/shop/product/s3.jpg"
                                        class="img-fluid" alt=""></a>
                                <a href="shop-product-detail.html" class="overlay-work">
                                    <img src="images/shop/product/s-3.jpg" class="img-fluid" alt="">
                                </a>
                                <ul class="list-unstyled shop-icons">
                                    <li class="mt-2"><a href="shop-product-detail.html"
                                            class="btn btn-icon btn-pills btn-soft-primary"><svg
                                                xmlns="https://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-eye icons">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg></a></li>
                                    <li class="mt-2"><a href="shop-cart.html"
                                            class="btn btn-icon btn-pills btn-soft-warning"><svg
                                                xmlns="https://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-shopping-cart icons">
                                                <circle cx="9" cy="21" r="1"></circle>
                                                <circle cx="20" cy="21" r="1"></circle>
                                                <path
                                                    d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6">
                                                </path>
                                            </svg></a></li>
                                </ul>
                            </div>
                            <div class="card-body content pt-4 p-2">
                                <a href="shop-product-detail.html" class="text-dark product-name h6">Elegent Watch</a>
                                <div class="d-flex justify-content-between mt-1">
                                    <h6 class="text-muted small font-italic mb-0 mt-1">$5.00 <span
                                            class="text-success ml-1">30% off</span> </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <!-- PAGINATION START -->
                    {{-- <div class="col-12 mt-4 pt-2">
                        <ul class="pagination justify-content-center mb-0">
                            <li class="page-item"><a class="page-link" href="javascript:void(0)"
                                    aria-label="Previous"><i class="mdi mdi-arrow-left"></i> Prev</a></li>
                            <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next">Next
                                    <i class="mdi mdi-arrow-right"></i></a></li>
                        </ul>
                    </div> --}}
                    <!--end col-->
                    <!-- PAGINATION END -->
                </div>
                <!--end row-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
@endsection