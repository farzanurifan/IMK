@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Data Barang
                    </h2>
                    <ul class="header-dropdown m-t--5 m-r--5">
                        <button type="button" class="btn btn-primary waves-effect">Impor Barang</button>
                        <small>	&nbsp;&nbsp;</small>
                        <a href="/barang/databarang/create">
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
                                        <th>Nama Barang</th>
                                        <th>Satuan</th>
                                        <th>Merk</th>
                                        <th>Stok</th>
                                        <th>Lokasi</th>
                                        <th>Kuota</th>
                                        <th>Tanggal ED</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>111</td>
                                        <td>Barang 1</td>
                                        <td>5</td>
                                        <td>Suzuki</td>
                                        <td>5</td>
                                        <td>Lemari</td>
                                        <td>5</td>
                                        <td>12 April 2018</td>
                                        <td>
                                            <a href="/barang/databarang/edit">
                                                <i class="material-icons" style="font-size: 1.0em;">create</i>
                                                ubah
                                            </a>
                                            <small>	&nbsp;&nbsp;</small>
                                            <a href="{{ route('databarang.delete') }}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure?">
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
