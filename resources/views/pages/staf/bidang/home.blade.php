@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Bidang
                    </h2>
                    <ul class="header-dropdown m-t--5 m-r--5">
                        <a href="/staf/bidang/create">
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
                                        <th>Nama Bidang</th>
                                        <th>KA. Bidang</th>
                                        <th>NIP KABID</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $baris)
                                        <tr>
                                            <td>{{$baris->id}}</td>
                                            <td>{{$baris->namabidang}}</td>
                                            <td>{{$baris->kepalabidang}}</td>
                                            <td>{{$baris->nipkabid}}</td>
                                            <td>
                                                <a href="{{ url('/staf/bidang/edit', $baris->id) }}">
                                                    <i class="material-icons" style="font-size: 1.0em;">create</i>
                                                    ubah
                                                </a>
                                                <small>	&nbsp;&nbsp;</small>
                                                <a href="{{ route('bidang.delete', $baris->id) }}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure?">
                                                    <i class="material-icons" style="font-size: 1.0em;">delete_sweep</i>
                                                    hapus
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
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
