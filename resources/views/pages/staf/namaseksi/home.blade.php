@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <!-- Basic Examples -->
    <div class="row clearfix js-sweetalert">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Kategori Seksi
                    </h2>
                    <ul class="header-dropdown m-t--5">
                        <a href="/staf/namaseksi/create">
                            <button type="button" class="btn bg-green waves-effect">Tambah</button>
                        </a>
                    </ul>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <div class="col-md-12">
                            <table class="table table-bordered table-striped table-hover table-condensed js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Seksi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Administrasi</td>
                                        <td>
                                            <a class="btn btn-xs bg-grey waves-effect" href="/staf/namaseksi/edit/1">Ubah</a>
                                            <button class="btn btn-xs btn-danger waves-effect" data-type="confirm">Hapus</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Beasiswa</td>
                                        <td>
                                            <a class="btn btn-xs bg-grey waves-effect" href="/staf/namaseksi/edit/2">Ubah</a>
                                            <button class="btn btn-xs btn-danger waves-effect" data-type="confirm">Hapus</button>
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
