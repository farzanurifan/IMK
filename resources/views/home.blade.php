@extends('layouts.app')

@section('content')
<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">Selamat Datang</div>

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
        <div class="panel-heading">Info 1</div>

        <div class="panel-body">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo sequi nulla quasi obcaecati vero, ullam et alias nesciunt corporis? Sint enim rerum quisquam rem consequatur, excepturi earum cupiditate illum? Praesentium!
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">Info 2</div>

        <div class="panel-body">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo sequi nulla quasi obcaecati vero, ullam et alias nesciunt corporis? Sint enim rerum quisquam rem consequatur, excepturi earum cupiditate illum? Praesentium!
        </div>
    </div>
</div>
@endsection
