@extends('layouts.backend.crud')

@section('title', __('Bakso Family Dashboard'))
@section('breadcrumb', __('Data Pengguna'))
@section('titleContent', __('Data Pengguna'))
@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ route('createUser') }}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>
            Buat Pengguna</a>
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
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>Email</th>
                        <th>Total Pesanan</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $user as $number => $u )
                    <tr>
                        <td>
                            {{ $number+1 }}
                        </td>
                        <td>{{ $u->name }}</td>
                        <td>
                            {{ $u->address }}
                        </td>
                        <td>
                            {{ $u->tlp }}
                        </td>
                        <td>{{ $u->email }}</td>
                        <td>
                            5 Pesanan
                        </td>
                        <td>
                            @if ($u->admin == 'TRUE')
                            <div class="badge badge-success">Pemilik</div>
                            @else
                            <div class="badge badge-info">Pembeli</div>
                            @endif
                        </td>
                        <td>
                            <a href="/user/edit/{{ $u->id }}" class="btn btn-primary btn-action mb-1 mt-1 mr-1"
                                data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                            <a class="btn btn-danger btn-action mb-1 mt-1" data-toggle="tooltip" title="Delete"
                                data-confirm="Apakah Anda Yakin?|Aksi ini tidak dapat dikembalikan. Apakah ingin melanjutkan?"
                                data-confirm-yes="window.open('/user/delete/{{ $u->id }}','_self')"><i
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