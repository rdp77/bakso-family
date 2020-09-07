@extends('layouts.backend.view')

@section('title', __('Bakso Family Dashboard'))
@section('breadcrumb', __('Data Produk'))
@section('titleContent', __('Data Produk'))
@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ route('create') }}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>
            Buat Produk</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped" id="table-1">
                <thead>
                    <tr>
                        <th class="text-center">
                            #
                        </th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($product as $p)
                    <tr>
                        <td class="text-center">
                            {{ $p->id }}
                        </td>
                        <td>{{ $p->name }}</td>
                        <td>Rp. {{ $p->price }}</td>
                        <td>
                            <a class="btn btn-info btn-action mr-1 mt-1 mb-1" data-toggle="tooltip" title="Lihat"
                                data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                data-confirm-yes="alert('Deleted')"><i class="fas fa-eye"></i></a>
                            <a href="/product/edit/{{ $p->id }}" class="btn btn-primary btn-action mb-1 mt-1 mr-1"
                                data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                            <a class="btn btn-danger btn-action mb-1 mt-1" data-toggle="tooltip" title="Delete"
                                data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                data-confirm-yes="window.open('/product/delete/{{ $p->id }}','_self')"><i
                                    class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection