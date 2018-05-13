@extends('layouts.app')

@section('content')
<!-- Metarial Design Buttons -->
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="card">
            <div class="header">
                <h2>
                    Warna Tema Aplikasi
                </h2>
                {{-- <ul class="header-dropdown m-t--5">
                    <a href="/home">
                        <button type="button" class="btn btn-success waves-effect">Kembali ke Beranda</button>
                    </a>
                </ul> --}}
            </div>            
            <div class="body">
                <p>*klik warna yang diinginkan</p>
                <div class="button-demo">
                    <a href="/pengaturan/apply/red" type="button" class="btn bg-red waves-effect"><font color="#F44336">RED</font></a>
                    <a href="/pengaturan/apply/pink" type="button" class="btn bg-pink waves-effect"><font color="#E91E63">PINK</font></a>
                    <a href="/pengaturan/apply/purple" type="button" class="btn bg-purple waves-effect"><font color="#9C27B0">PURPLE</font></a>
                    <a href="/pengaturan/apply/deep-purple" type="button" class="btn bg-deep-purple waves-effect"><font color="#673AB7">DEEP PURPLE</font></a>
                    <a href="/pengaturan/apply/indigo" type="button" class="btn bg-indigo waves-effect"><font color="#3F51B5">INDIGO</font></a>
                    <a href="/pengaturan/apply/blue" type="button" class="btn bg-blue waves-effect"><font color="#2196F3">BLUE</font></a>
                    <a href="/pengaturan/apply/light-blue" type="button" class="btn bg-light-blue waves-effect"><font color="#03A9F4">LIGHT BLUE</font></a>
                    <a href="/pengaturan/apply/cyan" type="button" class="btn bg-cyan waves-effect"><font color="#00BCD4">CYAN</font></a>
                    <a href="/pengaturan/apply/teal" type="button" class="btn bg-teal waves-effect"><font color="#009688">TEAL</font></a>
                    <a href="/pengaturan/apply/green" type="button" class="btn bg-green waves-effect"><font color="#4CAF50">GREEN</font></a>
                    <a href="/pengaturan/apply/light-green" type="button" class="btn bg-light-green waves-effect"><font color="#8BC34A">LIGHT GREEN</font></a>
                    <a href="/pengaturan/apply/lime" type="button" class="btn bg-lime waves-effect"><font color="#CDDC39">LIME</font></a>
                    <a href="/pengaturan/apply/yellow" type="button" class="btn bg-yellow waves-effect"><font color="#FFEB3B">YELLOW</font></a>
                    <a href="/pengaturan/apply/amber" type="button" class="btn bg-amber waves-effect"><font color="#FFC107">AMBER</font></a>
                    <a href="/pengaturan/apply/orange" type="button" class="btn bg-orange waves-effect"><font color="#FF9800">ORANGE</font></a>
                    <a href="/pengaturan/apply/deep-orange" type="button" class="btn bg-deep-orange waves-effect"><font color="#FF5722">DEEP ORANGE</font></a>
                    <a href="/pengaturan/apply/brown" type="button" class="btn bg-brown waves-effect"><font color="#795548">BROWN</font></a>
                    <a href="/pengaturan/apply/grey" type="button" class="btn bg-grey waves-effect"><font color="#9E9E9E">GREY</font></a>
                    <a href="/pengaturan/apply/blue-grey" type="button" class="btn bg-blue-grey waves-effect"><font color="#607D8B">BLUE GREY</font></a>
                    <a href="/pengaturan/apply/black" type="button" class="btn bg-black waves-effect waves-light"><font color="#000000">BLACK</font></a>
                </div>
            </div>            
        </div>
    </div>
</div>
<!-- #END# Metarial Design Buttons -->
@endsection
