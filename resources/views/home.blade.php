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
        <div class="panel-heading"><b>Info : </b>Data pada menu Pemasok</div>

        <div class="panel-body">
            Dalam kasus yang sebenarnya, data ID pada tabel tidak boleh sama (harus unik).<br>
            Disini kami memberikan data dummy dengan field yang sama sebanyak 42 baris, sehingga kami dapat menguji kinerja fungsi paginating kami.
        </div>
    </div>
</div>
@endsection
