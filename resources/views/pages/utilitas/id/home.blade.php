@extends('layouts.app')

@section('content')
<div class="col-md-8 col-md-offset-2">
    <!-- Basic Examples -->
    <div class="row clearfix js-sweetalert">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Informasi Instansi
                    </h2>
                    <ul class="header-dropdown m-t--5">
                        <a href="/utilitas/id/edit">
                            <button type="button" class="btn bg-grey waves-effect">Ubah</button>
                        </a>
                    </ul>
                </div>
                <div class="body">
                    <div class="body table-responsive">
                        <table class="table table-hover table-bordered">
                            <tbody>
                                <tr>
                                    <td><b>Instansi Induk</b></td>
                                    <td colspan="2">Pemerintak Kabupaten Mojokerto</td>
                                </tr>
                                <tr>
                                    <td><b>SKPD</b></td>
                                    <td colspan="2">Dinas Kesehatan</td>
                                </tr>
                                <tr>
                                    <td><b>Nama Kantor</b></td>
                                    <td colspan="2">Dinas Kota</td>
                                </tr>
                                <tr>
                                    <td><b>Alamat</b></td>
                                    <td colspan="2">Jalan jalan di kota bandung, ketemu thanos</td>
                                </tr>
                                <tr>
                                    <td><b>Kota</b></td>
                                    <td colspan="2">Mojokerto</td>
                                </tr>
                                <tr>
                                    <td><b>Nomor Telepon</b></td>
                                    <td colspan="2">98873249</td>
                                </tr>
                                <tr>
                                    <td><b>Penyimpan Barang</b></td>
                                    <td colspan="2">Thanos</td>
                                </tr>
                                <tr>
                                    <td><b>Kepala UPT / NIP</b></td>
                                    <td>Farza</td>
                                    <td>657658</td>
                                </tr>
                                <tr>
                                    <td><b>PPKom / NIP</b></td>
                                    <td>Farza</td>
                                    <td>657658</td>
                                </tr>
                                <tr>
                                    <td><b>P2HP / NIP</b></td>
                                    <td>Farza</td>
                                    <td>657658</td>
                                </tr>
                                <tr>
                                    <td><b>SK P2HP No/Tanggal</b></td>
                                    <td>050</td>
                                    <td>2 Januari 2018</td>
                                </tr>
                                <tr>
                                    <td><b>Nama UPT/UPTD</b></td>
                                    <td colspan="2">Farza</td>
                                </tr>
                                <tr>
                                    <td><b>Email</b></td>
                                    <td colspan="2">Farza</td>
                                </tr>
                                <tr>
                                    <td><b>Singkatan Kantor</b></td>
                                    <td colspan="2">Farza</td>
                                </tr>
                                <tr>
                                    <td><b>Provinsi</b></td>
                                    <td colspan="2">Farza</td>
                                </tr>
                            </tbody>                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Basic Examples -->
</div>
@endsection
