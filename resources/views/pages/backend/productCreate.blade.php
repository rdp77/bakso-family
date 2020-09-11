@extends('layouts.backend.crud')

@section('title', __('Bakso Family Dashboard'))
@section('breadcrumb', __('Data Produk'))
@section('morebreadcrumb')
<div class="breadcrumb-item">{{ __('Tambah Produk') }}</div>
@endsection
@section('titleContent', __('Buat Produk'))
@section('content')
<div class="card">
    <form method="POST" action="{{ route('storeProduct') }}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">Nama</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    required autofocus>
                @error('name')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Harga</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            Rp.
                        </div>
                    </div>
                    <input id="price" name="price" type="text"
                        class="form-control currency @error('name') is-invalid @enderror" required>
                </div>
                @error('price')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @else
                <span class="text-dark" role="alert">
                    Agar gratis berikan nilai 0
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label>File</label>
                <input id="image" name="image" type="file" accept="image/png, image/jpeg, image/jpg, image/svg"
                    class="form-control">
                @error('image')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @else
                <span class="text-dark" role="alert">
                    Ukuran rekomendasi 400x500
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
    var cleaveC = new Cleave('.currency', {
numeral: true,
numeralThousandsGroupStyle: 'thousand'
});
</script>
@endsection