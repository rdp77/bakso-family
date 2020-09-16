@extends('layouts.content')

@section('title', __('Bakso Family | Keranjang'))
@section('titleContent', __('Keranjang'))
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('shop') }}">{{ __('Beli Bakso') }}</a></li>
@endsection
@section('content')
<section class="section">
    <div class="container">
        @if ($total == '0')
        <img src="{{ asset('storage/images/empty_product.svg') }}" class="img-fluid">
        <div class="text-center mt-3">
            <a href="{{ route('shop') }}" class="btn btn-primary">Tambah Belanjaan</a>
        </div>
        @else
        <div class="row">
            <div class="col-12">
                <div class="table-responsive bg-white shadow">
                    <table class="table table-center table-padding mb-0">
                        <thead>
                            <tr>
                                <th class="py-3" style="min-width:20px "></th>
                                <th class="py-3" style="min-width: 300px;">Nama</th>
                                <th class="text-center py-3" style="min-width: 160px;">Harga</th>
                                <th class="text-center py-3" style="min-width: 160px;">Qty</th>
                                <th class="text-center py-3" style="min-width: 160px;">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $i)
                            <tr>
                                <td class="h6"><a href="javascript:void(0)" class="text-danger">X</a></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="images/shop/product/s1.jpg"
                                            class="img-fluid avatar avatar-small rounded shadow" style="height:auto;"
                                            alt="">
                                        <h6 class="mb-0 ml-3">{{ $i->name }}</h6>
                                    </div>
                                </td>
                                <td class="text-center">Rp. {{ number_format($i->price) }}</td>
                                <td class="text-center">
                                    <input type="button" value="-"
                                        class="minus btn btn-icon btn-soft-primary font-weight-bold">
                                    <input type="text" step="1" min="1" name="quantity" value="{{ $i->qty }}"
                                        title="Qty" class="btn btn-icon btn-soft-primary font-weight-bold">
                                    <input type="button" value="+"
                                        class="plus btn btn-icon btn-soft-primary font-weight-bold">
                                </td>
                                <td class="text-center font-weight-bold">$510.00</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <div class="row">
            <div class="col-lg-8 col-md-6 mt-4 pt-2">
                <a href="javascript:void(0)" class="btn btn-primary">Belanja Lagi</a>
                <a href="javascript:void(0)" class="btn btn-soft-primary ml-2">Update Keranjang</a>
            </div>
            <div class="col-lg-4 col-md-6 ml-auto mt-4 pt-2">
                <div class="table-responsive bg-white rounded shadow">
                    <table class="table table-center table-padding mb-0">
                        <tbody>
                            <tr>
                                <td class="h6">Subtotal</td>
                                <td class="text-center font-weight-bold">Rp. {{ $subtotal }}</td>
                            </tr>
                            <tr>
                                <td class="h6">Taxes</td>
                                <td class="text-center font-weight-bold">$ 219</td>
                            </tr>
                            <tr class="bg-light">
                                <td class="h6">Total</td>
                                <td class="text-center font-weight-bold">Rp. {{ $total }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-4 pt-2 text-right">
                    <a href="{{ route('checkout') }}" class="btn btn-primary">Lanjut ke Pembayaran</a>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        @endif
    </div>
    <!--end container-->
</section>
@endsection