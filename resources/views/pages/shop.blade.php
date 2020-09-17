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
                        <!-- Top Products -->
                        <div class="widget mt-4 pt-2">
                            <h4 class="widget-title">{{ __('Terlaris') }}</h4>
                            <ul class="list-unstyled mt-4 mb-0">
                                @if ($product == '0')
                                <li class="media align-items-center">
                                    <a href="javascript:void(0)" class="text-dark h6">Varian Sedang Kosong</a>
                                </li>
                                @else
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
                                @endif
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
                            <h5 class="mb-0">{{ $total }} Varian Bakso</h5>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-3 col-md-5 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="buy-menu-btn">
                            <a href="
                            @guest
                            {{ route('login') }}
                            @else
                            {{ route('cart') }}
                            @endguest
                            " class="btn btn-outline-primary"><i class="mdi mdi-cart"></i> <span
                                    class="badge badge-pill badge-success">
                                    @if(Auth::check())
                                    {{ $cart }}
                                    @else
                                    0
                                    @endif
                                </span></a>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <div class="row">
                    @if ($product == '0')
                    <img src="{{ asset('storage/images/empty_product.svg') }}" class="img-fluid mt-3">
                    @else
                    @foreach ($product as $p)
                    <input type="hidden" name="id" value="{{ $p->id }}">
                    <input type="hidden" name="name{{ $p->id }}" value="{{ $p->name }}">
                    <input type="hidden" name="price" value="{{ $p->price }}">
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card shop-list border-0 position-relative overflow-hidden">
                            <div class="shop-image position-relative overflow-hidden rounded shadow">
                                <img src="{{ asset('storage/product/'.$p->image) }}" class="img-fluid">
                                {{-- <a href="shop-product-detail.html" class="overlay-work">
                                    <img src="images/shop/product/s-1.jpg" class="img-fluid" alt="">
                                </a> --}}
                                <ul class="list-unstyled shop-icons">
                                    <li class="mt-2"><a href="/add/{{ $p->id }}"
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
                                <a href="javascript:void(0)" class="text-dark product-name h6">{{ $p->name }}</a>
                                <div class="d-flex justify-content-between mt-1">
                                    <h6 class="text-muted small font-italic mb-0 mt-1">
                                        @if (number_format($p->price) == "0")
                                        GRATIS
                                        @else
                                        Rp.{{ number_format($p->price) }} @endif
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
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