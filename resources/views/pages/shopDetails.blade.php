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
                <div>
                    <div style="width: 100%; display: inline-block;"><img
                            src="{{ asset('storage/product/'.$product->image) }}" class="img-fluid rounded" alt="">
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-md-7 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="section-title ml-md-4">
                    <h4 class="title">{{ $product->name }}</h4>
                    <h5 class="text-muted">{{__('Rp. ') . number_format($product->price) }}</h5>
                    <h5 class="mt-4 py-2">{{ __('Ringkasan :') }}</h5>
                    <p class="text-muted">{{ $product->desc }}</p>

                    <ul class="list-unstyled text-muted">
                        @foreach ($list as $l)
                        <li class="mb-0"><span class="text-primary h5 mr-2"><span class="uim-svg" style=""><svg
                                        xmlns="https://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em">
                                        <path class="uim-primary"
                                            d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                            opacity=".99"></path>
                                        <path class="uim-tertiary"
                                            d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z">
                                        </path>
                                    </svg></span></span> {{ $l }}</li>
                        @endforeach
                    </ul>

                    <div class="d-flex shop-list align-items-center">
                        <h6 class="mb-0">Jumlah:</h6>
                        <div class="ml-3">
                            <input type="button" value="-" class="minus btn btn-icon btn-soft-primary font-weight-bold">
                            <input type="text" step="1" min="1" name="quantity" value="1" title="Qty"
                                class="btn btn-icon btn-soft-primary font-weight-bold">
                            <input type="button" value="+" class="plus btn btn-icon btn-soft-primary font-weight-bold">
                        </div>
                    </div>
                    <!--end col-->

                    <div class="mt-4 pt-2">
                        <a href="javascript:void(0)" class="btn btn-primary">Beli Sekarang</a>
                        <a href="shop-cart.html" class="btn btn-soft-primary ml-2">Tambahkan Ke Keranjang</a>
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