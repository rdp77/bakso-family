@extends('layouts.backend.crud')

@section('title', __('Bakso Family Dashboard'))
@section('breadcrumb', __('Data Pengguna'))
@section('morebreadcrumb')
<div class="breadcrumb-item">{{ __('Buat Pengguna') }}</div>
@endsection
@section('titleContent', __('Buat Pengguna'))
@section('content')
<div class="card">
    <form method="POST" action="{{ route('storeUser') }}">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">Nama <span class="text-danger">*</span></label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    required autofocus>
                @error('name')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email <span class="text-danger">*</span></label>
                <input id="email" type="email" value="{{ old('email') }}"
                    class="form-control @error('email') is-invalid @enderror" name="email" autocomplete="email"
                    required>
                @error('email')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password <span class="text-danger">*</span></label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required>
                @error('password')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password-confirm">Ulangi password <span class="text-danger">*</span></label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password">
            </div>
            <div class="form-group">
                <label for="address">Alamat</label>
                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror"
                    name="address">
                @error('address')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="tlp">No Telepon</label>
                <input id="tlp" type="tel" class="form-control phone-number @error('tlp') is-invalid @enderror"
                    name="tlp">
                @error('tlp')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="role">Role <span class="text-danger">*</span></label>
                <select class="form-control" name="role">
                    <option value="f">Pembeli</option>
                    <option value="t">Pemilik</option>
                </select>
                @error('role')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
        </div>
        <div class="card-footer text-right">
            <button class="btn btn-primary mr-1" type="submit">Submit</button>
            <button class="btn btn-secondary" type="reset">Reset</button>
        </div>
    </form>
</div>
@endsection
@section('script')
<script>
    var cleaveC = new Cleave('.phone-number', {
phone: true,
phoneRegionCode: 'ID'
});
</script>
@endsection