@extends('layouts.app')

@section('content')
<div class="col-md-4  col-md-offset-4">
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        STOK
                    </h2>
                </div>
                <div class="body" style="text-align:center;">
                        <button type="button" class="btn btn-primary waves-effect">Impor Stok Awal</button>
                        <br><br>
                        <a href="/utilitas/stok">
                            <button type="button" class="btn btn-danger waves-effect">Reset Stok</button>
                        </a>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Basic Examples -->
</div>
@endsection
