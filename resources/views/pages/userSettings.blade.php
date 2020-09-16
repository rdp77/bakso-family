@extends('layouts.user')

@section('title', __('Bakso Family | User Settings'))
@section('content')
@include('components.profile')

<!-- Profile Start -->
<section class="section mt-60">
    <div class="container mt-lg-3">
        <div class="card border-0 rounded shadow">
            <div class="card-body">
                <h5 class="text-md-left text-center">Ubah Data :</h5>
                <form enctype="multipart/form-data" action="{{ route('updateProfile') }}" method="POST">
                    @csrf
                    <div class="mt-3 text-md-left text-center d-sm-flex">
                        <img src="{{ asset('storage/images/avatar.jpg') }}"
                            class="avatar float-md-left avatar-medium rounded-circle shadow mr-md-4" id="preview">
                        <div class="mt-md-4 mt-3 mt-sm-0">
                            <label for="image" style="cursor: pointer" class="btn btn-primary mt-2">Ubah Gambar</label>
                            <input type="file" name="image" id="image"
                                style="opacity: 0;position: absolute;z-index: -1;" onchange="readURL(this)" />
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="form-group position-relative">
                                <label for="name">Nama :</label>
                                <svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-user fea icon-sm icons">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                <input name="name" id="name" type="text"
                                    class="form-control pl-5 @error('name') is-invalid @enderror" placeholder=" Nama"
                                    value="{{ Auth::user()->name }}" required autofocus>
                                @error('name')
                                <span class="text-danger" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-md-6">
                            <div class="form-group position-relative">
                                <label for="address">Alamat :</label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-map-pin fea icon-sm icons">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                                <input name="address" id="address" type="text"
                                    class="form-control pl-5 @error('address') is-invalid @enderror"
                                    placeholder="Alamat" value="{{ Auth::user()->address }}">
                                @error('address')
                                <span class="text-danger" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-md-6">
                            <div class="form-group position-relative">
                                <label for="email">Email :</label>
                                <svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-mail fea icon-sm icons">
                                    <path
                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                    </path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                                <input name="email" id="email" type="email"
                                    class="form-control pl-5 @error('email') is-invalid @enderror" placeholder="Email"
                                    required autocomplete="email" value="{{ Auth::user()->email }}">
                                @error('email')
                                <span class="text-danger" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-md-6">
                            <div class="form-group position-relative">
                                <label for="tlp">No Telepon :</label>
                                <svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-phone fea icon-sm icons">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                    </path>
                                </svg>
                                <input name="tlp" id="tlp" type="number"
                                    class="form-control pl-5 @error('tlp') is-invalid @enderror"
                                    placeholder="No Telepon">
                                @error('tlp')
                                <span class="text-danger" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="submit" id="submit" name="send" class="btn btn-primary"
                                value="Simpan Perubahan">
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </form>
                <!--end form-->
            </div>
        </div>
    </div>
    <!--end container-->
</section>
<!--end section-->
@endsection
@section('script')
<script type='text/javascript'>
    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#preview')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
@endsection