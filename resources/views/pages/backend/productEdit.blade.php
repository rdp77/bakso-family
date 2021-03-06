@extends('layouts.backend.crud')

@section('title', __('Bakso Family Dashboard'))
@section('breadcrumb', __('Data Produk'))
@section('morebreadcrumb')
<div class="breadcrumb-item">{{ __('Edit Produk') }}</div>
@endsection
@section('titleContent', __('Edit Produk'))
@section('content')
<div class="card">
    <form method="POST" action="/product/update/{{ $product->id }}">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="name">Nama</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    required autofocus value="{{ $product->name }}">
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
                    <input id="price" name="price" type="text" class="form-control @error('name') is-invalid @enderror"
                        required value="{{ $product->price }}">
                </div>
                @error('price')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label>File</label>
                <input type="file" class="form-control">
            </div>
        </div>
        <div class="card-footer text-right">
            <button class="btn btn-primary mr-1" type="submit">Submit</button>
        </div>
    </form>
</div>
@endsection