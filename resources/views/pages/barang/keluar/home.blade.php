@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <!-- Basic Examples -->
    <div class="row clearfix js-sweetalert">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Data Barang Keluar
                    </h2>
                    <ul class="header-dropdown m-t--5">
                        {{-- <button type="button" class="btn bg-cyan waves-effect" data-toggle="modal" data-target="#defaultModal">Impor Barang</button>
                        <small>&nbsp;&nbsp;</small> --}}
                        <a href="/barang/keluar/create">
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
                                        <th>Nama Barang</th>
                                        <th>Harga</th>
                                        <th>Jumlah</th>
                                        <th>Satuan</th>
                                        <th>Total</th>
                                        <th>Kategori</th>
                                        <th>Tanggal Keluar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Permen Milkita</td>
                                        <td>Rp 1.000</td>
                                        <td>3</td>
                                        <td>Buah</td>
                                        <td>Rp 3.000</td>
                                        <td>Makanan</td>
                                        <td>18 April 2018</td>
                                        <td>
                                            <a class="btn btn-xs bg-grey waves-effect" href="/barang/keluar/edit/1">Ubah</a>
                                            <button class="btn btn-xs btn-danger waves-effect" data-type="confirm">Hapus</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Beng Beng</td>
                                        <td>Rp 18.000</td>
                                        <td>7</td>
                                        <td>Lusin</td>
                                        <td>Rp 126.000</td>
                                        <td>Makanan</td>
                                        <td>28 April 2018</td>
                                        <td>
                                            <a class="btn btn-xs bg-grey waves-effect" href="/barang/keluar/edit/2">Ubah</a>
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
