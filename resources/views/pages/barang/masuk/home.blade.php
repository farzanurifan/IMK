@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Barang Masuk
                    </h2>
                    <ul class="header-dropdown m-t--5 m-r--5">
                        <a href="/barang/masuk/create">
                            <button type="button" class="btn btn-success waves-effect">CREATE</button>
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
                                        <th>Stok</th>
                                        <th>Kuota</th>
                                        <th>Sisa</th>
                                        <th>Tanggal ED</th>
                                        <th>Kategori</th>
                                        <th>Action</th>
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
                                        <td>12 April 2018</td>
                                        <td>Alat Tulis</td>
                                        <td>
                                            <a href="/barang/masuk/edit">
                                                <i class="material-icons" style="font-size: 1.0em;">create</i>
                                                edit
                                            </a>
                                            <small>	&nbsp;&nbsp;</small>
                                            <a href="{{ route('masuk.delete') }}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure?">
                                                <i class="material-icons" style="font-size: 1.0em;">delete_sweep</i>
                                                delete
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
