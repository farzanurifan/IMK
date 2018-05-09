@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <!-- Basic Examples -->
    <div class="row clearfix js-sweetalert">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Barang Masuk
                    </h2>
                    <ul class="header-dropdown m-t--5">
                        {{-- <button type="button" class="btn bg-cyan waves-effect" data-toggle="modal" data-target="#defaultModal">Impor Barang</button>
                        <small>&nbsp;&nbsp;</small> --}}
                        <a href="/barang/masuk/create">
                            <button type="button" class="btn bg-green waves-effect">Tambah</button>
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
                                        <th>Nama Barang</th>
                                        <th>Harga</th>
                                        <th>Jumlah Masuk</th>
                                        <th>Satuan</th>
                                        <th>Jumlah Harga</th>
                                        <th>Kategori</th>
                                        <th>Tanggal ED</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>201</td>
                                        <td>Senheiser X5770A</td>
                                        <td>Rp 810.000</td>
                                        <td>5</td>
                                        <td>Buah</td>
                                        <td>Rp 5.670.000</td>
                                        <td>Headset</td>
                                        <td>13 Mei 2018</td>
                                        <td>
                                            <a class="btn btn-xs bg-grey waves-effect" href="/barang/masuk/edit">Ubah</a>
                                            <button class="btn btn-xs btn-danger waves-effect" data-type="confirm">Hapus</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>202</td>
                                        <td>Steelseries 256</td>
                                        <td>Rp 635.000</td>
                                        <td>7</td>
                                        <td>Buah</td>
                                        <td>Rp 4.445.000</td>
                                        <td>Mouse</td>
                                        <td>19 Mei 2018</td>
                                        <td>
                                            <a class="btn btn-xs bg-grey waves-effect" href="/barang/masuk/edit">Ubah</a>
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
