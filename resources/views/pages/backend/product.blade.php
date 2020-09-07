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
                        <th>Task Name</th>
                        <th>Progress</th>
                        <th>Members</th>
                        <th>Due Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>Create a mobile app</td>
                        <td class="align-middle">
                            <div class="progress" data-height="4" data-toggle="tooltip" title=""
                                data-original-title="100%" style="height: 4px;">
                                <div class="progress-bar bg-success" data-width="100%" style="width: 100%;"></div>
                            </div>
                        </td>
                        <td>
                            <img alt="image" src="../assets/img/avatar/avatar-5.png" class="rounded-circle" width="35"
                                data-toggle="tooltip" title="" data-original-title="Wildan Ahdian">
                        </td>
                        <td>2018-01-20</td>
                        <td>
                            <div class="badge badge-success">Completed</div>
                        </td>
                        <td>
                            <a class="btn btn-primary btn-action mr-1 mt-1 mb-1" data-toggle="tooltip" title="Edit"><i
                                    class="fas fa-pencil-alt"></i></a>
                            <a class="btn btn-danger btn-action mb-1" data-toggle="tooltip" title="Delete"
                                data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            2
                        </td>
                        <td>Redesign homepage</td>
                        <td class="align-middle">
                            <div class="progress" data-height="4" data-toggle="tooltip" title=""
                                data-original-title="0%" style="height: 4px;">
                                <div class="progress-bar" data-width="0" style="width: 0px;">
                                </div>
                            </div>
                        </td>
                        <td>
                            <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle" width="35"
                                data-toggle="tooltip" title="" data-original-title="Nur Alpiana">
                            <img alt="image" src="../assets/img/avatar/avatar-3.png" class="rounded-circle" width="35"
                                data-toggle="tooltip" title="" data-original-title="Hariono Yusup">
                            <img alt="image" src="../assets/img/avatar/avatar-4.png" class="rounded-circle" width="35"
                                data-toggle="tooltip" title="" data-original-title="Bagus Dwi Cahya">
                        </td>
                        <td>2018-04-10</td>
                        <td>
                            <div class="badge badge-info">Todo</div>
                        </td>
                        <td><a href="#" class="btn btn-secondary">Detail</a></td>
                    </tr>
                    <tr>
                        <td>
                            3
                        </td>
                        <td>Backup database</td>
                        <td class="align-middle">
                            <div class="progress" data-height="4" data-toggle="tooltip" title=""
                                data-original-title="70%" style="height: 4px;">
                                <div class="progress-bar bg-warning" data-width="70%" style="width: 70%;"></div>
                            </div>
                        </td>
                        <td>
                            <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle" width="35"
                                data-toggle="tooltip" title="" data-original-title="Rizal Fakhri">
                            <img alt="image" src="../assets/img/avatar/avatar-2.png" class="rounded-circle" width="35"
                                data-toggle="tooltip" title="" data-original-title="Hasan Basri">
                        </td>
                        <td>2018-01-29</td>
                        <td>
                            <div class="badge badge-warning">In Progress</div>
                        </td>
                        <td><a href="#" class="btn btn-secondary">Detail</a></td>
                    </tr>
                    <tr>
                        <td>
                            4
                        </td>
                        <td>Input data</td>
                        <td class="align-middle">
                            <div class="progress" data-height="4" data-toggle="tooltip" title=""
                                data-original-title="100%" style="height: 4px;">
                                <div class="progress-bar bg-success" data-width="100%" style="width: 100%;"></div>
                            </div>
                        </td>
                        <td>
                            <img alt="image" src="../assets/img/avatar/avatar-2.png" class="rounded-circle" width="35"
                                data-toggle="tooltip" title="" data-original-title="Rizal Fakhri">
                            <img alt="image" src="../assets/img/avatar/avatar-5.png" class="rounded-circle" width="35"
                                data-toggle="tooltip" title="" data-original-title="Isnap Kiswandi">
                            <img alt="image" src="../assets/img/avatar/avatar-4.png" class="rounded-circle" width="35"
                                data-toggle="tooltip" title="" data-original-title="Yudi Nawawi">
                            <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle" width="35"
                                data-toggle="tooltip" title="" data-original-title="Khaerul Anwar">
                        </td>
                        <td>2018-01-16</td>
                        <td>
                            <div class="badge badge-success">Completed</div>
                        </td>
                        <td><a href="#" class="btn btn-secondary">Detail</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection