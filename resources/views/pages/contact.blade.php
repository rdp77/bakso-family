@extends('layouts.content')

@section('title', __('Bakso Family | Kontak'))
@section('titleContent', __('Kontak'))
@section('content')
<!-- Start Contact -->
<section class="section">
    <div class="container">
        <div class="card map map-height-two rounded map-gray border-0">
            <div class="card-body p-0">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15829.96925432752!2d112.7667651!3d-7.2984521!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xabd54bc4c61087af!2sUniversitas%2017%20Agustus%201945%20Surabaya!5e0!3m2!1sid!2sid!4v1599286810448!5m2!1sid!2sid"
                    style="border:0" class="rounded" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
    <!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row">
            <div class="col-md-4">
                <div class="card contact-detail text-center border-0">
                    <div class="card-body p-0">
                        <div class="icon">
                            <img src="images/icon/bitcoin.svg" class="avatar avatar-small" alt="">
                        </div>
                        <div class="content mt-3">
                            <h4 class="title font-weight-bold">WhatsApp atau No Hp</h4>
                            <p class="text-muted">Mulai hubungi kami melalui aplikasi WhatsApp atau dengan nomor hp yang
                                tercantum</p>
                            <a target="_blank" href="https://api.whatsapp.com/send?phone=+6289629432885"
                                class="text-primary">WhatsApp
                                +62 896-2943-2885</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="card contact-detail text-center border-0">
                    <div class="card-body p-0">
                        <div class="icon">
                            <img src="images/icon/Email.svg" class="avatar avatar-small" alt="">
                        </div>
                        <div class="content mt-3">
                            <h4 class="title font-weight-bold">Email</h4>
                            <p class="text-muted">Hubungi kami melalui email khusus</p>
                            <a href="mailto:contact@example.com" class="text-primary">contact@example.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="card contact-detail text-center border-0">
                    <div class="card-body p-0">
                        <div class="icon">
                            <img src="images/icon/location.svg" class="avatar avatar-small" alt="">
                        </div>
                        <div class="content mt-3">
                            <h4 class="title font-weight-bold">Lokasi</h4>
                            <p class="text-muted">Jl. Semolowaru No.45, Menur Pumpungan,
                                <br>Kec. Sukolilo, Kota SBY, Jawa Timur 60118</p>
                            <a href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15829.96925432752!2d112.7667651!3d-7.2984521!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xabd54bc4c61087af!2sUniversitas%2017%20Agustus%201945%20Surabaya!5e0!3m2!1sid!2sid!4v1599286810448!5m2!1sid!2sid"
                                class="video-play-icon h6 text-primary">Lihat di map</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
@endsection