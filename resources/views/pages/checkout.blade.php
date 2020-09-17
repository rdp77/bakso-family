@extends('layouts.content')

@section('title', __('Bakso Family | Checkout'))
@section('titleContent', __('Checkout'))
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('shop') }}">{{ __('Beli Bakso') }}</a></li>
@endsection
@section('content')
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6">
                <div class="rounded shadow-lg p-4">
                    <h5 class="mb-0">Billing Details :</h5>

                    <form class="mt-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group position-relative">
                                    <label>Nama Lengkap <span class="text-danger">*</span></label>
                                    <input name="name" id="firstname" type="text" class="form-control"
                                        value="{{ Auth::user()->name }}">
                                </div>
                            </div>
                            <!--end col-->
                            {{-- <div class="col-12">
                                <div class="form-group position-relative">
                                    <label>Company Name <span class="text-muted">(Optional)</span></label>
                                    <input name="name" id="companyname" type="text" class="form-control"
                                        placeholder="Company Name :">
                                </div>
                            </div> --}}
                            <!--end col-->
                            <div class="col-12">
                                <div class="form-group position-relative">
                                    <label>Alamat <span class="text-danger">*</span></label>
                                    <input type="text" name="address1" id="address1" class="form-control"
                                        value="{{ Auth::user()->address }}">
                                </div>
                            </div>
                            <!--end col-->
                            {{-- <div class="col-md-6">
                                <div class="form-group position-relative">
                                    <label>State <span class="text-danger">*</span></label>
                                    <input type="text" name="state" id="state" class="form-control"
                                        placeholder="State Name :">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-md-6">
                                <div class="form-group position-relative">
                                    <label>Country <span class="text-danger">*</span></label>
                                    <select class="form-control custom-select">
                                        <option selected="">India</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AX">Åland Islands</option>
                                        <option value="AL">Albania</option>
                                        <option value="DZ">Algeria</option>
                                        <option value="AS">American Samoa</option>
                                        <option value="AD">Andorra</option>
                                        <option value="AO">Angola</option>
                                        <option value="AI">Anguilla</option>
                                        <option value="AQ">Antarctica</option>
                                    </select>
                                </div>
                            </div> --}}
                            <!--end col-->
                            <div class="col-12">
                                <div class="form-group position-relative">
                                    <label>No Telepon <span class="text-danger">*</span></label>
                                    <input type="text" name="phone" id="phone" class="form-control"
                                        value="{{ Auth::user()->tlp }}">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-12">
                                <div class="form-group position-relative">
                                    <label>Email <span class="text-danger">*</span></label>
                                    <input name="email" id="email" type="email" class="form-control"
                                        value="{{ Auth::user()->email }}">
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </form>
                    <!--end form-->
                </div>

                <div class="rounded shadow-lg p-4 mt-5">
                    <div class="form-group position-relative">
                        <label>Komentar <span class="text-muted">(Opsional)</span></label>
                        <textarea name="comments" id="comments" rows="4" class="form-control"
                            placeholder="Berikan komentar tentang pesanan anda"></textarea>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-5 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="rounded shadow-lg p-4">
                    <div class="d-flex mb-4 justify-content-between">
                        <h5>{{ $product }} Varian</h5>
                        <a href="{{ route('cart') }}" class="text-muted h6">Lihat Detail</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-center table-padding mb-0">
                            <tbody>
                                <tr>
                                    <td class="h6 border-0">Subtotal</td>
                                    <td class="text-center font-weight-bold border-0">Rp. {{ number_format($subtotal) }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="h6">Shipping Charge</td>
                                    <td class="text-center font-weight-bold">$ 0.00</td>
                                </tr>
                                <tr class="bg-light">
                                    <td class="h5 font-weight-bold">Total</td>
                                    <td class="text-center text-primary h4 font-weight-bold">Rp.
                                        {{ number_format($total) }}</td>
                                </tr>
                            </tbody>
                        </table>

                        <ul class="list-unstyled mt-4 mb-0">
                            <li>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <div class="form-group mb-0">
                                        <input type="radio" id="banktransfer" checked="checked" name="customRadio"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="banktransfer">Gopay</label>
                                    </div>
                                </div>
                            </li>

                            <li class="mt-3">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <div class="form-group mb-0">
                                        <input type="radio" id="chaquepayment" name="customRadio"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="chaquepayment">OVO</label>
                                    </div>
                                </div>
                            </li>

                            <li class="mt-3">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <div class="form-group mb-0">
                                        <input type="radio" id="cashpayment" name="customRadio"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="cashpayment">Link Aja</label>
                                    </div>
                                </div>
                            </li>

                            <li class="mt-3">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <div class="form-group mb-0">
                                        <input type="radio" id="paypal" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="paypal">Paypal <a
                                                href="https://www.paypal.com/uk/webapps/mpp/paypal-popup"
                                                target="_blank" class="ml-2 text-primary">What is paypal?</a></label>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <div class="mt-4 pt-2">
                            <a href="shop-checkouts.html" class="btn btn-block btn-primary">Request Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
@endsection