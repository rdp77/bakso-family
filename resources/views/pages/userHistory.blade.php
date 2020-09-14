@extends('layouts.user')

@section('title', __('Bakso Family | User Settings'))
@section('content')
@include('components.profile')

<!-- Profile Start -->
<section class="section mt-60">
    <div class="container mt-lg-3">
        <div class="card border-0 rounded shadow">
            <div class="card-body">
                <h5 class="text-md-left text-center">Riwayat Pemesanan :</h5>

                <div class="media key-feature align-items-center p-3 rounded shadow mt-4">
                    <div class="media-body content ml-3">
                        <h4 class="title mb-0">29 - 08 - 2020</h4>
                        <p class="text-muted mb-0">3 Years Experience</p>
                        <p class="text-muted mb-0"><a href="javascript:void(0)" class="text-primary">CircleCi</a>
                            @London, UK</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end container-->
</section>
<!--end section-->
@endsection