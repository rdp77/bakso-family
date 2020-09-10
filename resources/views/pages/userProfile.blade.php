@extends('layouts.user')

@section('title', __('Bakso Family | User Profile'))
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
                                        <small class="text-muted h6 mr-2">
                                            @if (Auth::user()->admin == 'TRUE')
                                            Pemilik
                                            @else
                                            Pembeli
                                            @endif
                                        </small>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-5 text-md-right text-center">
                                        <ul class="list-unstyled social-icon social mb-0 mt-4">
                                            <li class="list-inline-item"><a href="{{ route('statusUser') }}"
                                                    class="rounded" data-toggle="tooltip" data-placement="bottom"
                                                    title="Status"><i data-feather="info"
                                                        class="fea icon-sm fea-social"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="{{ route('historyUser') }}"
                                                    class="rounded" data-toggle="tooltip" data-placement="bottom"
                                                    title="Riwayat"><i data-feather="rotate-ccw"
                                                        class="fea icon-sm fea-social"></i></a></li>
                                            <li class="list-inline-item"><a href="{{ route('passwordUser') }}"
                                                    class="rounded" data-toggle="tooltip" data-placement="bottom"
                                                    title="Ubah Password"><i data-feather="key"
                                                        class="fea icon-sm fea-social"></i></a></li>
                                            <li class="list-inline-item"><a href="{{ route('profilesettings') }}"
                                                    class="rounded" data-toggle="tooltip" data-placement="bottom"
                                                    title="Pengaturan"><i data-feather="tool"
                                                        class="fea icon-sm fea-social"></i></a></li>
                                        </ul>
                                        <!--end icon-->
                                    </div>
                                    <!--end col-->
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
        <!--end col-->

        <div class="pb-4">
            <h5>Detail :</h5>
            <div class="mt-4">
                <div class="media align-items-center">
                    <i data-feather="mail" class="fea icon-ex-md text-muted mr-3"></i>
                    <div class="media-body">
                        <h6 class="text-primary mb-0">Email :</h6>
                        <a href="javascript:void(0)" class="text-muted">kristajoseph0203@mail.com</a>
                    </div>
                </div>
                <div class="media align-items-center mt-3">
                    <i data-feather="map-pin" class="fea icon-ex-md text-muted mr-3"></i>
                    <div class="media-body">
                        <h6 class="text-primary mb-0">Alamat :</h6>
                        <a href="javascript:void(0)" class="text-muted">Beijing, China</a>
                    </div>
                </div>
                <div class="media align-items-center mt-3">
                    <i data-feather="phone" class="fea icon-ex-md text-muted mr-3"></i>
                    <div class="media-body">
                        <h6 class="text-primary mb-0">No Telepon :</h6>
                        <a href="javascript:void(0)" class="text-muted">(+12) 1254-56-4896</a>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
@endsection