<!-- Hero Start -->
<section class="bg-profile d-table w-100 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card public-profile border-0 rounded shadow" style="z-index: 1;">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-md-3 text-md-left text-center">
                                <img src="{{ asset('storage/user/'.Auth::user()->image) }}"
                                    class="avatar avatar-large rounded-circle shadow d-block mx-auto" alt="">
                            </div>
                            <!--end col-->

                            <div class="col-lg-10 col-md-9">
                                <div class="row align-items-end">
                                    <div class="col-md-7 text-md-left text-center mt-4 mt-sm-0">
                                        <h3 class="title mb-0">{{ Auth::user()->name }}</h3>
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