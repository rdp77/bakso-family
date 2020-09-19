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
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.56807646947!2d112.7076127143712!3d-7.289882773674273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fc74a255288f%3A0xdce2324777a79970!2sJl.%20Mayjen%20Sungkono%20Blok%20H%20No.149-151%2C%20Dukuh%20Pakis%2C%20Kec.%20Dukuhpakis%2C%20Kota%20SBY%2C%20Jawa%20Timur%2060225!5e0!3m2!1sen!2sid!4v1600325553455!5m2!1sen!2sid"
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
                            <img src="{{ asset('storage/images/call.svg') }}" class="avatar avatar-small" alt="">
                        </div>
                        <div class="content mt-3">
                            <h4 class="title font-weight-bold">No Telepon</h4>
                            <p class="text-muted">Mulai hubungi kami melalui aplikasi WhatsApp atau dengan nomor hp yang
                                tercantum</p>
                            <a target="_blank" href="https://api.whatsapp.com/send?phone=+6289629432885"
                                class="text-primary">+62 896-2943-2885</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="card contact-detail text-center border-0">
                    <div class="card-body p-0">
                        <div class="icon">
                            <img src="{{ asset('storage/images/email.svg') }}" class="avatar avatar-small" alt="">
                        </div>
                        <div class="content mt-3">
                            <h4 class="title font-weight-bold">Email</h4>
                            <p class="text-muted">Hubungi kami melalui email khusus</p>
                            <a href="mailto:aripmuhaimin46@gmail.com" class="text-primary">aripmuhaimin46@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="card contact-detail text-center border-0">
                    <div class="card-body p-0">
                        <div class="icon">
                            <img src="{{ asset('storage/images/location.svg') }}" class="avatar avatar-small" alt="">
                        </div>
                        <div class="content mt-3">
                            <h4 class="title font-weight-bold">Lokasi</h4>
                            <p class="text-muted">
                                JL. Mayjen Sungkono No.149-151, Dukuh Pakis,
                                <br>Kota SBY, Jawa Timur 60225
                            </p>
                            <a target="_blank" href="https://goo.gl/maps/ovKWKoeY4BVD2Ae99"
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