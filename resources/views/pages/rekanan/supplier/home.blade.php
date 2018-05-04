@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Data Supplier / Rekanan
                    </h2>
                    <ul class="header-dropdown m-t--5 m-r--5">
                        <a href="/rekanan/supplier/create">
                            <button type="button" class="btn btn-success waves-effect">Tambah</button>
                        </a>
                    </ul>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <div class="col-md-12">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Rekanan</th>
                                        <th>Pimpinan</th>
                                        <th>Alamat</th>
                                        <th>Nomor Telp.</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>111</td>
                                        <td>Ananda</td>
                                        <td>Profesor</td>
                                        <td>Surabaya</td>
                                        <td>9328919</td>
                                        <td>
                                            <a href="/rekanan/supplier/edit">
                                                <i class="material-icons" style="font-size: 1.0em;">create</i>
                                                ubah
                                            </a>
                                            <small>	&nbsp;&nbsp;</small>
                                            <a href="{{ route('supplier.delete') }}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure?">
                                                <i class="material-icons" style="font-size: 1.0em;">delete_sweep</i>
                                                hapus
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Basic Examples -->
</div>
@endsection
