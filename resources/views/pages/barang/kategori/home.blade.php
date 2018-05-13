@extends('layouts.app')

@section('content')
<div class="col-md-8 col-md-offset-2">
    <!-- Basic Examples -->
    <div class="row clearfix js-sweetalert">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Kategori Barang
                    </h2>
                    <ul class="header-dropdown m-t--5">
                        <a href="/barang/kategori/create">
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
                                        <th>Nama Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Smartphone</td>
                                        <td>
                                            <a class="btn btn-xs bg-grey waves-effect" href="/barang/kategori/edit/1">Ubah</a>
                                            <button class="btn btn-xs btn-danger waves-effect" data-type="confirm">Hapus</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Headset</td>
                                        <td>
                                            <a class="btn btn-xs bg-grey waves-effect" href="/barang/kategori/edit/2">Ubah</a>
                                            <button class="btn btn-xs btn-danger waves-effect" data-type="confirm">Hapus</button>
                                        </td>
                                    </tr><tr>
                                        <td>3</td>
                                        <td>Mouse</td>
                                        <td>
                                            <a class="btn btn-xs bg-grey waves-effect" href="/barang/kategori/edit/3">Ubah</a>
                                            <button class="btn btn-xs btn-danger waves-effect" data-type="confirm">Hapus</button>
                                        </td>
                                    </tr><tr>
                                        <td>4</td>
                                        <td>Makanan</td>
                                        <td>
                                            <a class="btn btn-xs bg-grey waves-effect" href="/barang/kategori/edit/4">Ubah</a>
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
