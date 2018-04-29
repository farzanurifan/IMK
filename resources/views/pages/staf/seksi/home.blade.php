@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Seksi
                    </h2>
                    <ul class="header-dropdown m-t--5 m-r--5">
                        <a href="/staf/seksi/create">
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
                                        <th>Nama Seksi</th>
                                        <th>Bidang</th>
                                        <th>Kepala Seksi</th>
                                        <th>NIP Kasek</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $baris)
                                        <tr>
                                            <td>{{$baris->id}}</td>
                                            <td>{{$baris->namaseksi}}</td>
                                            <td>{{$baris->bidang_id}}</td>
                                            <td>{{$baris->kepalaseksi}}</td>
                                            <td>{{$baris->nipkasek}}</td>
                                            <td>
                                                <a href="{{ url('/staf/seksi/edit', $baris->id) }}">
                                                    <i class="material-icons" style="font-size: 1.0em;">create</i>
                                                    edit
                                                </a>
                                                <small>	&nbsp;&nbsp;</small>
                                                <a href="{{ route('seksi.delete', $baris->id) }}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure?">
                                                    <i class="material-icons" style="font-size: 1.0em;">delete_sweep</i>
                                                    delete
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
