@extends('layouts.user')

@section('title', __('Bakso Family | User Settings'))
@section('content')
<!-- Hero Start -->
<section class="bg-profile d-table w-100 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card public-profile border-0 rounded shadow" style="z-index: 1;">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-md-3 text-md-left text-center">
                                <img src="images/client/05.jpg"
                                    class="avatar avatar-large rounded-circle shadow d-block mx-auto" alt="">
                            </div>
                            <!--end col-->

                            <div class="col-lg-10 col-md-9">
                                <div class="row align-items-end">
                                    <div class="col-md-7 text-md-left text-center mt-4 mt-sm-0">
                                        <h3 class="title mb-0">Krista Joseph</h3>
                                        <small class="text-muted h6 mr-2">Pembeli</small>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-5 text-md-right text-center">
                                        <ul class="list-unstyled social-icon social mb-0 mt-4">
                                            <li class="list-inline-item"><a href="{{ route('profile') }}"
                                                    class="rounded" data-toggle="tooltip" data-placement="bottom"
                                                    title="Kembali"><i data-feather="arrow-left"
                                                        class="fea icon-sm fea-social"></i></a>
                                            </li>
                                        </ul>
                                        <!--end icon-->
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->
    </div>
    <!--ed container-->
</section>
<!--end section-->
<!-- Hero End -->

<!-- Profile Start -->
<section class="section mt-60">
    <div class="container mt-lg-3">
        <div class="card border-0 rounded shadow">
            <div class="card-body">
                <h5 class="text-md-left text-center">Ganti Password :</h5>
                <form>
                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <div class="form-group position-relative">
                                <label>Old password :</label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-key fea icon-sm icons">
                                    <path
                                        d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4">
                                    </path>
                                </svg>
                                <input type="password" class="form-control pl-5" placeholder="Old password" required="">
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-12">
                            <div class="form-group position-relative">
                                <label>New password :</label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-key fea icon-sm icons">
                                    <path
                                        d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4">
                                    </path>
                                </svg>
                                <input type="password" class="form-control pl-5" placeholder="New password" required="">
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-12">
                            <div class="form-group position-relative">
                                <label>Re-type New password :</label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-key fea icon-sm icons">
                                    <path
                                        d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4">
                                    </path>
                                </svg>
                                <input type="password" class="form-control pl-5" placeholder="Re-type New password"
                                    required="">
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-12 mt-2 mb-0">
                            <button class="btn btn-primary">Save password</button>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </form>
            </div>
        </div>
    </div>
    <!--end container-->
</section>
<!--end section-->
@endsection