@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <!-- Basic Examples -->
    <div class="row clearfix js-sweetalert">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Data Barang
                    </h2>
                    <ul class="header-dropdown m-t--5">
                        {{-- <button type="button" class="btn bg-cyan waves-effect" data-toggle="modal" data-target="#defaultModal">Impor Barang</button>
                        <small>&nbsp;&nbsp;</small> --}}
                        <!-- <a href="/barang/databarang/create">
                            <button type="button" class="btn bg-green waves-effect">Tambah</button>
                        </a> -->
                    </ul>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <div class="col-md-12">
                            <table class="table table-bordered table-striped table-hover table-condensed js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Barang</th>
                                        <th>Merk</th>
                                        <th>Stok</th>
                                        <th>Satuan</th>
                                        <th>Lokasi</th>
                                        <th>Kategori</th>
                                        <!-- <th>Tanggal ED</th> -->
                                        <!-- <th>Aksi</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>S9+</td>
                                        <td>Samsung</td>
                                        <td>5</td>
                                        <td>Buah</td>
                                        <td>Lemari</td>
                                        <td>Smartphone</td>
                                        <!-- <td>12 April 2018</td> -->
                                        <!-- <td>
                                            <a class="btn btn-xs bg-grey waves-effect" href="/barang/databarang/edit/1">Ubah</a>
                                            <button class="btn btn-xs btn-danger waves-effect" data-type="confirm">Hapus</button>
                                        </td> -->
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>iPhone X</td>
                                        <td>Apple</td>
                                        <td>8</td>
                                        <td>Buah</td>
                                        <td>Gudang</td>
                                        <td>Smartphone</td>
                                        <!-- <td>12 Mei 2018</td> -->
                                        <!-- <td>
                                            <a class="btn btn-xs bg-grey waves-effect" href="/barang/databarang/edit/2">Ubah</a>
                                            <button class="btn btn-xs btn-danger waves-effect" data-type="confirm">Hapus</button>
                                        </td> -->
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
