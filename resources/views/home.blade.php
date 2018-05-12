@extends('layouts.app')

@section('content')
<div class="col-md-8 col-md-offset-2" style="margin-top: 50px;">
    <div class="panel panel-default">
        <div class="panel-heading"><b>Selamat Datang</b></div>

        <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            Hai {{ Auth::user()->name }}, selamat datang di situs pengadaan barang Kabupaten Mojokerto!
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading"><b>Data pada menu Pemasok</b></div>

        <div class="panel-body">
            Menurut 
        </div>
    </div>
</div>
@endsection
