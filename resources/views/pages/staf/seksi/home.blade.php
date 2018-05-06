@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <!-- Basic Examples -->
    <div class="row clearfix js-sweetalert">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Seksi
                    </h2>
                    <ul class="header-dropdown m-t--5">
                        <a href="/staf/seksi/create">
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
                                        <th>Nama Seksi</th>
                                        <th>Bidang</th>
                                        <th>Kepala Seksi</th>
                                        <th>NIP Kasek</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        {{-- <tr>
                                                <td>111</td>
                                                <td>Ananda</td>
                                                <td>123123</td>
                                                <td>Uang</td>
                                                <td>Uang</td>
                                                <td>
                                                    <a class="btn btn-xs btn-default waves-effect" href="/staf/seksi/edit">Ubah</a>
                                                    <button class="btn btn-xs btn-danger waves-effect" data-type="confirm">Hapus</button>
                                                </td>
                                            </tr> --}}
                                    {{-- @foreach ($data as $baris)
                                        <tr>
                                            <td>{{$baris->id}}</td>
                                            <td>{{$baris->namaseksi}}</td>
                                            <td>{{$baris->bidang_id}}</td>
                                            <td>{{$baris->kepalaseksi}}</td>
                                            <td>{{$baris->nipkasek}}</td>
                                            <td>
                                                <a class="btn btn-xs btn-default waves-effect" href="/staf/seksi/edit">Ubah</a>
                                                <button class="btn btn-xs btn-danger waves-effect" data-type="confirm">Hapus</button>
                                            </td>
                                        </tr>
                                    @endforeach --}}
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
