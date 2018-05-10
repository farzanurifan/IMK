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
                                        <th>Nama Seksi</th>
                                        <th>Bidang</th>
                                        <th>Kepala Seksi</th>
                                        <th>NIP Kasek</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                                <td>101</td>
                                                <td>Joko Wiranto</td>
                                                <td>Makanan</td>
                                                <td>Gizi</td>
                                                <td>9888773998</td>
                                                <td>
                                                    <a class="btn btn-xs bg-grey waves-effect" href="/staf/seksi/edit">Ubah</a>
                                                    <button class="btn btn-xs btn-danger waves-effect" data-type="confirm">Hapus</button>
                                                </td>
                                            </tr>
                                        <tr>
                                                <td>102</td>
                                                <td>Prabowo Susilo</td>
                                                <td>Militer</td>
                                                <td>Pertahanan</td>
                                                <td>9888773997</td>
                                                <td>
                                                    <a class="btn btn-xs bg-grey waves-effect" href="/staf/seksi/edit">Ubah</a>
                                                    <button class="btn btn-xs btn-danger waves-effect" data-type="confirm">Hapus</button>
                                                </td>
                                            </tr>
                                    {{-- @foreach ($data as $baris)
                                        <tr>
                                            <td>{{$baris->id}}</td>
                                            <td>{{$baris->namaseksi}}</td>
                                            <td>{{$baris->bidang_id}}</td>
                                            <td>{{$baris->kepalaseksi}}</td>
                                            <td>{{$baris->nipkasek}}</td>
                                            <td>
                                                <a class="btn btn-xs bg-grey waves-effect" href="/staf/seksi/edit">Ubah</a>
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
