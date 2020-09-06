@extends('layouts.content')

@section('title', __('Bakso Family | Keranjang'))
@section('titleContent', __('Keranjang'))
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('shop') }}">{{ __('Beli Bakso') }}</a></li>
@endsection
@section('content')
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive bg-white shadow">
                    <table class="table table-center table-padding mb-0">
                        <thead>
                            <tr>
                                <th class="py-3" style="min-width:20px "></th>
                                <th class="py-3" style="min-width: 300px;">Product</th>
                                <th class="text-center py-3" style="min-width: 160px;">Price</th>
                                <th class="text-center py-3" style="min-width: 160px;">Qty</th>
                                <th class="text-center py-3" style="min-width: 160px;">Total</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td class="h6"><a href="javascript:void(0)" class="text-danger">X</a></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="images/shop/product/s1.jpg"
                                            class="img-fluid avatar avatar-small rounded shadow" style="height:auto;"
                                            alt="">
                                        <h6 class="mb-0 ml-3">T-Shirt</h6>
                                    </div>
                                </td>
                                <td class="text-center">$ 255.00</td>
                                <td class="text-center">
                                    <input type="button" value="-"
                                        class="minus btn btn-icon btn-soft-primary font-weight-bold">
                                    <input type="text" step="1" min="1" name="quantity" value="2" title="Qty"
                                        class="btn btn-icon btn-soft-primary font-weight-bold">
                                    <input type="button" value="+"
                                        class="plus btn btn-icon btn-soft-primary font-weight-bold">
                                </td>
                                <td class="text-center font-weight-bold">$510.00</td>
                            </tr>

                            <tr>
                                <td class="h6"><a href="javascript:void(0)" class="text-danger">X</a></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="images/shop/product/s3.jpg"
                                            class="img-fluid avatar avatar-small rounded shadow" style="height:auto;"
                                            alt="">
                                        <h6 class="mb-0 ml-3">Branded Watch</h6>
                                    </div>
                                </td>
                                <td class="text-center">$ 520.00</td>
                                <td class="text-center">
                                    <input type="button" value="-"
                                        class="minus btn btn-icon btn-soft-primary font-weight-bold">
                                    <input type="text" step="1" min="1" name="quantity" value="1" title="Qty"
                                        class="btn btn-icon btn-soft-primary font-weight-bold">
                                    <input type="button" value="+"
                                        class="plus btn btn-icon btn-soft-primary font-weight-bold">
                                </td>
                                <td class="text-center font-weight-bold">$520.00</td>
                            </tr>

                            <tr>
                                <td class="h6"><a href="javascript:void(0)" class="text-danger">X</a></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="images/shop/product/s6.jpg"
                                            class="img-fluid avatar avatar-small rounded shadow" style="height:auto;"
                                            alt="">
                                        <h6 class="mb-0 ml-3">T-Shirt</h6>
                                    </div>
                                </td>
                                <td class="text-center">$ 160.00</td>
                                <td class="text-center">
                                    <input type="button" value="-"
                                        class="minus btn btn-icon btn-soft-primary font-weight-bold">
                                    <input type="text" step="1" min="1" name="quantity" value="4" title="Qty"
                                        class="btn btn-icon btn-soft-primary font-weight-bold">
                                    <input type="button" value="+"
                                        class="plus btn btn-icon btn-soft-primary font-weight-bold">
                                </td>
                                <td class="text-center font-weight-bold">$640.00</td>
                            </tr>

                            <tr>
                                <td class="h6"><a href="javascript:void(0)" class="text-danger">X</a></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="images/shop/product/s10.jpg"
                                            class="img-fluid avatar avatar-small rounded shadow" style="height:auto;"
                                            alt="">
                                        <h6 class="mb-0 ml-3">Sunglasses</h6>
                                    </div>
                                </td>
                                <td class="text-center">$ 260.00</td>
                                <td class="text-center">
                                    <input type="button" value="-"
                                        class="minus btn btn-icon btn-soft-primary font-weight-bold">
                                    <input type="text" step="1" min="1" name="quantity" value="2" title="Qty"
                                        class="btn btn-icon btn-soft-primary font-weight-bold">
                                    <input type="button" value="+"
                                        class="plus btn btn-icon btn-soft-primary font-weight-bold">
                                </td>
                                <td class="text-center font-weight-bold">$520.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <div class="row">
            <div class="col-lg-8 col-md-6 mt-4 pt-2">
                <a href="javascript:void(0)" class="btn btn-primary">Shop More</a>
                <a href="javascript:void(0)" class="btn btn-soft-primary ml-2">Update Cart</a>
            </div>
            <div class="col-lg-4 col-md-6 ml-auto mt-4 pt-2">
                <div class="table-responsive bg-white rounded shadow">
                    <table class="table table-center table-padding mb-0">
                        <tbody>
                            <tr>
                                <td class="h6">Subtotal</td>
                                <td class="text-center font-weight-bold">$ 2190</td>
                            </tr>
                            <tr>
                                <td class="h6">Taxes</td>
                                <td class="text-center font-weight-bold">$ 219</td>
                            </tr>
                            <tr class="bg-light">
                                <td class="h6">Total</td>
                                <td class="text-center font-weight-bold">$ 2409</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-4 pt-2 text-right">
                    <a href="{{ route('checkout') }}" class="btn btn-primary">Proceed to checkout</a>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
@endsection