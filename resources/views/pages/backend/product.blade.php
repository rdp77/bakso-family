@extends('layouts.backend.crud')

@section('title', __('Bakso Family Dashboard'))
@section('breadcrumb', __('Data Produk'))
@section('titleContent', __('Data Produk'))
@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ route('createProduct') }}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>
            Buat Produk</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped" id="datatables">
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
                    @foreach($product as $number => $p)
                    <tr>
                        <td class="text-center">
                            {{ $number+1 }}
                        </td>
                        <td>{{ $p->name }}</td>
                        <td>
                            @if (number_format($p->price) == "0") GRATIS @else Rp. {{ number_format($p->price) }} @endif
                        </td>
                        <td>
                            <button class="btn btn-info btn-action mr-1 mt-1 mb-1" data-toggle="tooltip"
                                title="Lihat Gambar" id="modal-{{ $p->id }}"><i class="fas fa-eye"></i></button>
                            <a href="/product/edit/{{ $p->id }}" class="btn btn-primary btn-action mb-1 mt-1 mr-1"
                                data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                            <a class="btn btn-danger btn-action mb-1 mt-1" data-toggle="tooltip" title="Delete"
                                data-confirm="Apakah Anda Yakin?|Aksi ini tidak dapat dikembalikan. Apakah ingin melanjutkan?"
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
@section('script')
@foreach($product as $p)
<script>
    $("#modal-{{ $p->id }}").fireModal({
        title: 'Gambar Produk {{ $p->name }}',
        body: '<img class="img-fluid" src="{{ asset('storage/product/'.$p->image) }}">'
        });    
</script>
@endforeach
<script>
    $("#datatables").dataTable({
        responsive: true
    });
</script>
@endsection