@extends('layouts.backend.crud')

@section('title', __('Bakso Family Dashboard'))
@section('breadcrumb', __('Data Pengguna'))
@section('morebreadcrumb')
<div class="breadcrumb-item">{{ __('Edit Pengguna') }}</div>
@endsection
@section('titleContent', __('Edit Pengguna'))
@section('content')
<div class="card">
    <form method="POST" action="/user/update/{{ $user->id }}">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="name">Nama <span class="text-danger">*</span></label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    required autofocus value="{{ $user->name }}">
                @error('name')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email <span class="text-danger">*</span></label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    autocomplete="email" required value="{{ $user->email }}">
                @error('email')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <div class="control-label">Ubah Password</div>
                <label for="changesPass" class="custom-switch mt-2">
                    <input id="changesPass" type="checkbox" name="changesPass" class="custom-switch-input"
                        onclick="changes()" value="1" checked>
                    <span class="custom-switch-indicator"></span>
                    <span class="custom-switch-description">Ubah password yang sudah ada</span>
                </label>
            </div>
            <div class="form-group">
                <label for="password">Password <span class="text-danger required">*</span></label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password">
                @error('password')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password-confirm">Ulangi password <span class="text-danger required">*</span></label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                    autocomplete="new-password">
            </div>
            <div class="form-group">
                <label for="address">Alamat</label>
                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror"
                    name="address" value="{{ $user->address }}">
                @error('address')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="tlp">No Telepon</label>
                <input id="tlp" type="tel" class="form-control phone-number @error('tlp') is-invalid @enderror"
                    name="tlp" value="{{ $user->tlp }}">
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
function changes() {
  if ($('#changesPass').is(':checked')){
    $('#password').prop('readonly', false);
    $('#password-confirm').prop('readonly', false);
    $('.required').removeClass('d-none');
    $('#password').attr('required', false);
    $('#password-confirm').attr('required', false);
    $('#changesPass').val('1');  
  }
  else{
    $('#password').prop('readonly', true);
    $('#password-confirm').prop('readonly', true);
    $('.required').addClass('d-none');
    $('#password').attr('required', true);
    $('#password-confirm').attr('required', true);
    $('#changesPass').val('');  
  }
}
</script>
@endsection