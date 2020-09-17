@extends('layouts.content')

@section('title', __('Bakso Family | Purchase History'))
@section('titleContent', __('Riwayat'))
@section('breadcrumb')
<li class="breadcrumb-item"><a href="javascript:void(0)">{{ __('Pembelian') }}</a></li>
@endsection
@section('content')

<!-- Profile Start -->
<section class="section">
    <div class="container mt-lg-3">
        <div class="card border-0 rounded shadow">
            <div class="card-body">
                <h5 class="text-md-left text-center">{{ __('Riwayat Pembelian :') }}</h5>

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