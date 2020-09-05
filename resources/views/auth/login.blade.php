@extends('layouts.auth')

@section('title', __('Bakso Family | Masuk'))
@section('titleContent', __('Masuk'))
@section('content')
<form class="login-form mt-4" method="POST" action="{{ route('login') }}">
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group position-relative">
                <label for="email">Email <span class="text-danger">*</span></label>
                <i data-feather="user" class="fea icon-sm icons"></i>
                <input id="email" type="email" class="form-control pl-5 @error('email') is-invalid @enderror"
                    placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group position-relative">
                <label for="password">Password <span class="text-danger">*</span></label>
                <i data-feather="key" class="fea icon-sm icons"></i>
                <input type="password" class="form-control pl-5 @error('password') is-invalid @enderror"
                    placeholder="Password" name="password" required autocomplete="current-password">
                @error('password')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="col-lg-12">
            <div class="d-flex justify-content-between">
                <div class="form-group">
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label class="custom-control-label" for="remember">{{ __('Ingat saya') }}</label>
                        </div>
                    </div>
                </div>
                <p class="forgot-pass mb-0"><a href="{{ route('password.request') }}"
                        class="text-dark font-weight-bold">Lupa password ?</a></p>
            </div>
        </div>
        <div class="col-lg-12 mb-0">
            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
        </div>
        <div class="col-12 text-center">
            <p class="mb-0 mt-3"><small class="text-dark mr-2">Tidak punya akun ?</small> <a
                    href="{{ route('register') }}" class="text-dark font-weight-bold">Daftar</a></p>
        </div>
    </div>
</form>
@endsection