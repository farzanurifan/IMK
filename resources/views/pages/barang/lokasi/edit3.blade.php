@extends('layouts.app')

@section('content')
<div class="col-md-8 col-xs-8 col-sm-8 col-lg-8 col-md-offset-2 col-xs-offset-2 col-sm-offset-2 col-lg-offset-2">
    <!-- Horizontal Layout -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Ubah Lokasi Barang
                    </h2>
                    <ul class="header-dropdown m-t--5">
                      <li>
                          <a href="/barang/lokasi">
                              <button type="button" class="btn btn-danger waves-effect">Batal</button>
                          </a>
                      </li>
                    </ul>
                </div>
                <div class="body col-md-offset-1 col-xs-offset-1 col-sm-offset-1 col-lg-offset-1">
                    {!! Form::open(['action' => 'Barang\LokasiController@edit_submit', 'id'=>'form_validation', 'method'=>'PUT','class'=>'form-horizontal']) !!}
                      <div class="row clearfix">
                            <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3 form-label" style="text-align: left;margin-top:8px;">
                                {{Form::label('id','ID')}}
                            </div>
                            <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
                                <div class="form-group">
                                    <div class="m-t-5">
                                        {{Form::text('id','3',[ 'disabled', 'id'=>'dis' ])}}
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3 form-label" style="text-align: left;margin-top:8px;">
                                {{Form::label('namalokasi','Nama Lokasi')}}
                            </div>
                            <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{Form::text('namalokasi','Taman',['class'=>'form-control', 'required', 'autofocus'])}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-offset-3 col-xs-offset-3 col-sm-offset-3 col-lg-offset-3">
                            <div class="row clearfix form-group">
                                <input type="checkbox" id="checkbox" name="benar" class="filled-in" required>
                                <label for="checkbox">Data yang saya isi sudah benar</label>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-offset-3 col-xs-offset-3 col-sm-offset-3 col-lg-offset-3">
                                {!! Form::submit('Kirim',['class'=>'btn btn-success m-t-15 waves-effect']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Horizontal Layout -->
</div>
@endsection
