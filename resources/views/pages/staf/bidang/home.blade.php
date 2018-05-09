@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <!-- Basic Examples -->
    <div class="row clearfix js-sweetalert">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Bidang
                    </h2>
                    <ul class="header-dropdown m-t--5">
                        <a href="/staf/bidang/create">
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
                                        <th>Nama Bidang</th>
                                        <th>KA. Bidang</th>
                                        <th>NIP KABID</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>111</td>
                                        <td>Ananda</td>
                                        <td>Keuangan</td>
                                        <td>987698766</td>
                                        <td>
                                            <a class="btn btn-xs bg-grey waves-effect" href="/staf/bidang/edit">Ubah</a>
                                            <button class="btn btn-xs btn-danger waves-effect" data-type="confirm">Hapus</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>111</td>
                                        <td>Ananda</td>
                                        <td>Keuangan</td>
                                        <td>987698766</td>
                                        <td>
                                            <a class="btn btn-xs bg-grey waves-effect" href="staf/bidang/edit">Ubah</a>
                                            <button class="btn btn-xs btn-danger waves-effect" data-type="confirm">Hapus</button>
                                        </td>
                                        </tr>
                                    {{-- @foreach ($data as $baris)
                                        <tr>
                                            <td>{{$baris->id}}</td>
                                            <td>{{$baris->namabidang}}</td>
                                            <td>{{$baris->kepalabidang}}</td>
                                            <td>{{$baris->nipkabid}}</td>
                                            <td>
                                                <a class="btn btn-xs bg-grey waves-effect" href="/staf/bidang/edit">Ubah</a>
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
