@extends('layouts.auth')

@section('content')
<form class="login-form mt-4" method="POST" action="{{ route('register') }}">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="form-group position-relative">
                <label for="name">Nama <span class="text-danger">*</span></label>
                <i data-feather="user" class="fea icon-sm icons"></i>
                <input id="name" type="text" class="form-control pl-5 @error('name') is-invalid @enderror"
                    placeholder="Nama" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group position-relative">
                <label for="email">Email <span class="text-danger">*</span></label>
                <i data-feather="mail" class="fea icon-sm icons"></i>
                <input id="email" type="email" class="form-control pl-5 @error('email') is-invalid @enderror"
                    placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group position-relative">
                <label for="password">Password <span class="text-danger">*</span></label>
                <i data-feather="key" class="fea icon-sm icons"></i>
                <input id="password" type="password" class="form-control pl-5 @error('password') is-invalid @enderror"
                    placeholder="Password" name="password" required autocomplete="new-password">
                @error('password')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group position-relative">
                <label for="password-confirm">Ulangi Password <span class="text-danger">*</span></label>
                <i data-feather="key" class="fea icon-sm icons"></i>
                <input id="password-confirm" type="password" class="form-control pl-5" placeholder="Password"
                    name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>
        {{-- <div class="col-md-12">
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">I Accept <a href="#"
                            class="text-primary">Terms And Condition</a></label>
                </div>
            </div>
        </div> --}}
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary btn-block">{{ __('Daftar') }}</button>
        </div>
        <div class="mx-auto">
            <p class="mb-0 mt-3"><small class="text-dark mr-2">{{ __('Sudah punya akun ?') }}</small> <a
                    href="{{ route('login') }}" class="text-dark font-weight-bold">{{ __('Masuk') }}</a></p>
        </div>
    </div>
</form>
@endsection