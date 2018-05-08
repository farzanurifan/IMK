@extends('layouts.app')
{{$indicator='pengaturan'}}
@section('content')
<!-- Metarial Design Buttons -->
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="card">
            <div class="header">
                <h2>
                    Warna Tema Aplikasi
                </h2>
                <ul class="header-dropdown m-t--5">
                    <a href="/home">
                        <button type="button" class="btn btn-success waves-effect">Kembali ke Beranda</button>
                    </a>
                </ul>
            </div>
            <div class="body">
                <div class="button-demo">
                    <button type="button" class="btn bg-red waves-effect">RED</button>
                    <button type="button" class="btn bg-pink waves-effect">PINK</button>
                    <button type="button" class="btn bg-purple waves-effect">PURPLE</button>
                    <button type="button" class="btn bg-deep-purple waves-effect">DEEP PURPLE</button>
                    <button type="button" class="btn bg-indigo waves-effect">INDIGO</button>
                    <button type="button" class="btn bg-blue waves-effect">BLUE</button>
                    <button type="button" class="btn bg-light-blue waves-effect">LIGHT BLUE</button>
                    <button type="button" class="btn bg-cyan waves-effect">CYAN</button>
                    <button type="button" class="btn bg-teal waves-effect">TEAL</button>
                    <button type="button" class="btn bg-green waves-effect">GREEN</button>
                    <button type="button" class="btn bg-light-green waves-effect">LIGHT GREEN</button>
                    <button type="button" class="btn bg-lime waves-effect">LIME</button>
                    <button type="button" class="btn bg-yellow waves-effect">YELLOW</button>
                    <button type="button" class="btn bg-amber waves-effect">AMBER</button>
                    <button type=em"button" class="btn bg-orange waves-effect">ORANGE</button>
                    <button type="button" class="btn bg-deep-orange waves-effect">DEEP ORANGE</button>
                    <button type="button" class="btn bg-brown waves-effect">BROWN</button>
                    <button type="button" class="btn bg-grey waves-effect">GREY</button>
                    <button type="button" class="btn bg-blue-grey waves-effect">BLUE GREY</button>
                    <button type="button" class="btn bg-black waves-effect waves-light">BLACK</button>
                </div>
            </div>            
        </div>
    </div>
</div>
<!-- #END# Metarial Design Buttons -->
@endsection
