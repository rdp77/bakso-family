@extends('layouts.content')

@section('title', __('Bakso Family | Detail Varian'))
@section('titleContent', __('Varian Detail'))
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('shop') }}">{{ __('Beli Bakso') }}</a></li>
@endsection
@section('content')
<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5">
                <div class="slider slider-for slick-initialized slick-slider">
                    <div class="slick-list draggable">
                        <div class="slick-track" style="opacity: 1; width: 1620px;">
                            <div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false"
                                style="width: 270px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
                                <div>
                                    <div style="width: 100%; display: inline-block;"><img
                                            src="images/shop/product/single-1.jpg" class="img-fluid rounded" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1"
                                style="width: 270px; position: relative; left: -270px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;">
                                <div>
                                    <div style="width: 100%; display: inline-block;"><img
                                            src="images/shop/product/single-2.jpg" class="img-fluid rounded" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1"
                                style="width: 270px; position: relative; left: -540px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;">
                                <div>
                                    <div style="width: 100%; display: inline-block;"><img
                                            src="images/shop/product/single-3.jpg" class="img-fluid rounded" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1"
                                style="width: 270px; position: relative; left: -810px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;">
                                <div>
                                    <div style="width: 100%; display: inline-block;"><img
                                            src="images/shop/product/single-4.jpg" class="img-fluid rounded" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide" data-slick-index="4" aria-hidden="true" tabindex="-1"
                                style="width: 270px; position: relative; left: -1080px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;">
                                <div>
                                    <div style="width: 100%; display: inline-block;"><img
                                            src="images/shop/product/single-5.jpg" class="img-fluid rounded" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide" data-slick-index="5" aria-hidden="true" tabindex="-1"
                                style="width: 270px; position: relative; left: -1350px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;">
                                <div>
                                    <div style="width: 100%; display: inline-block;"><img
                                            src="images/shop/product/single-6.jpg" class="img-fluid rounded" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider slider-nav slick-initialized slick-slider"><button class="slick-prev slick-arrow"
                        aria-label="Previous" type="button" style="">Previous</button>
                    <div class="slick-list draggable">
                        <div class="slick-track"
                            style="opacity: 1; width: 1350px; transform: translate3d(-270px, 0px, 0px);">
                            <div class="slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true"
                                tabindex="-1" style="width: 90px;">
                                <div>
                                    <div style="width: 100%; display: inline-block;"><img
                                            src="images/shop/product/single-4.jpg" class="img-fluid" alt=""></div>
                                </div>
                            </div>
                            <div class="slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true"
                                tabindex="-1" style="width: 90px;">
                                <div>
                                    <div style="width: 100%; display: inline-block;"><img
                                            src="images/shop/product/single-5.jpg" class="img-fluid" alt=""></div>
                                </div>
                            </div>
                            <div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true"
                                tabindex="-1" style="width: 90px;">
                                <div>
                                    <div style="width: 100%; display: inline-block;"><img
                                            src="images/shop/product/single-6.jpg" class="img-fluid" alt=""></div>
                                </div>
                            </div>
                            <div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false"
                                style="width: 90px;">
                                <div>
                                    <div style="width: 100%; display: inline-block;"><img
                                            src="images/shop/product/single-1.jpg" class="img-fluid" alt=""></div>
                                </div>
                            </div>
                            <div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false"
                                style="width: 90px;">
                                <div>
                                    <div style="width: 100%; display: inline-block;"><img
                                            src="images/shop/product/single-2.jpg" class="img-fluid" alt=""></div>
                                </div>
                            </div>
                            <div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false"
                                style="width: 90px;">
                                <div>
                                    <div style="width: 100%; display: inline-block;"><img
                                            src="images/shop/product/single-3.jpg" class="img-fluid" alt=""></div>
                                </div>
                            </div>
                            <div class="slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1"
                                style="width: 90px;">
                                <div>
                                    <div style="width: 100%; display: inline-block;"><img
                                            src="images/shop/product/single-4.jpg" class="img-fluid" alt=""></div>
                                </div>
                            </div>
                            <div class="slick-slide" data-slick-index="4" aria-hidden="true" tabindex="-1"
                                style="width: 90px;">
                                <div>
                                    <div style="width: 100%; display: inline-block;"><img
                                            src="images/shop/product/single-5.jpg" class="img-fluid" alt=""></div>
                                </div>
                            </div>
                            <div class="slick-slide" data-slick-index="5" aria-hidden="true" tabindex="-1"
                                style="width: 90px;">
                                <div>
                                    <div style="width: 100%; display: inline-block;"><img
                                            src="images/shop/product/single-6.jpg" class="img-fluid" alt=""></div>
                                </div>
                            </div>
                            <div class="slick-slide slick-cloned" data-slick-index="6" id="" aria-hidden="true"
                                tabindex="-1" style="width: 90px;">
                                <div>
                                    <div style="width: 100%; display: inline-block;"><img
                                            src="images/shop/product/single-1.jpg" class="img-fluid" alt=""></div>
                                </div>
                            </div>
                            <div class="slick-slide slick-cloned" data-slick-index="7" id="" aria-hidden="true"
                                tabindex="-1" style="width: 90px;">
                                <div>
                                    <div style="width: 100%; display: inline-block;"><img
                                            src="images/shop/product/single-2.jpg" class="img-fluid" alt=""></div>
                                </div>
                            </div>
                            <div class="slick-slide slick-cloned" data-slick-index="8" id="" aria-hidden="true"
                                tabindex="-1" style="width: 90px;">
                                <div>
                                    <div style="width: 100%; display: inline-block;"><img
                                            src="images/shop/product/single-3.jpg" class="img-fluid" alt=""></div>
                                </div>
                            </div>
                            <div class="slick-slide slick-cloned" data-slick-index="9" id="" aria-hidden="true"
                                tabindex="-1" style="width: 90px;">
                                <div>
                                    <div style="width: 100%; display: inline-block;"><img
                                            src="images/shop/product/single-4.jpg" class="img-fluid" alt=""></div>
                                </div>
                            </div>
                            <div class="slick-slide slick-cloned" data-slick-index="10" id="" aria-hidden="true"
                                tabindex="-1" style="width: 90px;">
                                <div>
                                    <div style="width: 100%; display: inline-block;"><img
                                            src="images/shop/product/single-5.jpg" class="img-fluid" alt=""></div>
                                </div>
                            </div>
                            <div class="slick-slide slick-cloned" data-slick-index="11" id="" aria-hidden="true"
                                tabindex="-1" style="width: 90px;">
                                <div>
                                    <div style="width: 100%; display: inline-block;"><img
                                            src="images/shop/product/single-6.jpg" class="img-fluid" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div><button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button>
                </div>
            </div>
            <!--end col-->

            <div class="col-md-7 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="section-title ml-md-4">
                    <h4 class="title">Branded T-Shirts</h4>
                    <h5 class="text-muted">$21.00 <del class="text-danger ml-2">$25.00</del> </h5>
                    <h5 class="mt-4 py-2">Overview :</h5>
                    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero exercitationem,
                        unde molestiae sint quae inventore atque minima natus fugiat nihil quisquam voluptates ea omnis.
                        Modi laborum soluta tempore unde accusantium.</p>

                    <ul class="list-unstyled text-muted">
                        <li class="mb-0"><span class="text-primary h5 mr-2"><span class="uim-svg" style=""><svg
                                        xmlns="https://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em">
                                        <path class="uim-primary"
                                            d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                            opacity=".99"></path>
                                        <path class="uim-tertiary"
                                            d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z">
                                        </path>
                                    </svg></span></span> Digital Marketing Solutions for Tomorrow</li>
                        <li class="mb-0"><span class="text-primary h5 mr-2"><span class="uim-svg" style=""><svg
                                        xmlns="https://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em">
                                        <path class="uim-primary"
                                            d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                            opacity=".99"></path>
                                        <path class="uim-tertiary"
                                            d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z">
                                        </path>
                                    </svg></span></span> Our Talented &amp; Experienced Marketing Agency</li>
                        <li class="mb-0"><span class="text-primary h5 mr-2"><span class="uim-svg" style=""><svg
                                        xmlns="https://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em">
                                        <path class="uim-primary"
                                            d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                            opacity=".99"></path>
                                        <path class="uim-tertiary"
                                            d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z">
                                        </path>
                                    </svg></span></span> Create your own skin to match your brand</li>
                    </ul>

                    <div class="d-flex shop-list align-items-center">
                        <h6 class="mb-0">Quantity:</h6>
                        <div class="ml-3">
                            <input type="button" value="-" class="minus btn btn-icon btn-soft-primary font-weight-bold">
                            <input type="text" step="1" min="1" name="quantity" value="1" title="Qty"
                                class="btn btn-icon btn-soft-primary font-weight-bold">
                            <input type="button" value="+" class="plus btn btn-icon btn-soft-primary font-weight-bold">
                        </div>
                    </div>
                    <!--end col-->

                    <div class="mt-4 pt-2">
                        <a href="javascript:void(0)" class="btn btn-primary">Shop Now</a>
                        <a href="shop-cart.html" class="btn btn-soft-primary ml-2">Add to Cart</a>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
@endsection