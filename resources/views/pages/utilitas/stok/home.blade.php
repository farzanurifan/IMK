@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        STOK
                    </h2>
                    <ul class="header-dropdown m-t--5 m-r--5">
                        <button type="button" class="btn btn-primary waves-effect">Awal Tahun</button>
                        <button type="button" class="btn btn-primary waves-effect">Update Stok</button>
                        <small>	&nbsp;&nbsp;</small>
                        <a href="/utilitas/stok">
                            <button type="button" class="btn btn-success waves-effect">CETAK</button>
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
                                        <th>Satuan</th>
                                        <th>Kuota</th>
                                        <th>Pembelian</th>
                                        <th>Sisa</th>
                                        <th>Stok</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>111</td>
                                        <td>Barang 1</td>
                                        <td>Rp 100.000,00</td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>5</td>
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
