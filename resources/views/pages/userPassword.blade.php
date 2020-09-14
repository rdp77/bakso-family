@extends('layouts.user')

@section('title', __('Bakso Family | User Settings'))
@section('content')
@include('components.profile')

<!-- Profile Start -->
<section class="section mt-60">
    <div class="container mt-lg-3">
        <div class="card border-0 rounded shadow">
            <div class="card-body">
                <h5 class="text-md-left text-center">Ubah Password :</h5>
                @if (Session::has('status'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> {{ Session::get('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"> × </span>
                    </button>
                </div>
                @endif
                <form action="{{ route('changePass') }}" method="POST">
                    @csrf
                    @method('post')
                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <div class="form-group position-relative">
                                <label for="oldPassword">Password Lama :</label>
                                <svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-key fea icon-sm icons">
                                    <path
                                        d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4">
                                    </path>
                                </svg>
                                <input name="oldPassword" id="oldPassword" type="password"
                                    class="form-control pl-5 @error('oldPassword') is-invalid @enderror"
                                    placeholder="Password lama" required>
                                @error('oldPassword')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-12">
                            <div class="form-group position-relative">
                                <label for="password">Password Baru :</label>
                                <svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-key fea icon-sm icons">
                                    <path
                                        d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4">
                                    </path>
                                </svg>
                                <input name="password" id="password" type="password"
                                    class="form-control pl-5 @error('password') is-invalid @enderror"
                                    placeholder="Password baru" required autocomplete="new-password">
                                @error('password')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-12">
                            <div class="form-group position-relative">
                                <label for="password-confirm">Ulangi password :</label>
                                <svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-key fea icon-sm icons">
                                    <path
                                        d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4">
                                    </path>
                                </svg>
                                <input id="password-confirm" type="password" class="form-control pl-5"
                                    placeholder="Ulangi password" name="password_confirmation" required
                                    autocomplete="new-password">
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-12 mt-2 mb-0">
                            <button type="submit" class="btn btn-primary">{{ __('Simpan Password') }}</button>
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