@extends('layouts.app')

@section('content')
<div class="col-md-8 col-xs-8 col-sm-8 col-lg-8 col-md-offset-2 col-xs-offset-2 col-sm-offset-2 col-lg-offset-2">
    <!-- Horizontal Layout -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Edit Barang Keluar
                    </h2>
                    <ul class="header-dropdown m-t--5 m-r--5">
                      <li>
                          <a href="/barang/keluar">
                              <button type="button" class="btn btn-danger waves-effect">Cancel</button>
                          </a>
                      </li>
                    </ul>
                </div>
                <div class="body col-md-offset-1 col-xs-offset-1 col-sm-offset-1 col-lg-offset-1">
                    {!! Form::open(['action' => 'Barang\KeluarController@edit_submit', 'id'=>'form_validation', 'method'=>'PUT','class'=>'form-horizontal']) !!}
                      <div class="row clearfix">
                          <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3 form-label" style="text-align: left;margin-top:8px;">
                              {{Form::label('id','ID')}}
                          </div>
                          <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
                              <div class="form-group">
                                  <div class="form-line disabled">
                                      {{Form::text('id','',['class'=>'form-control', 'placeholder'=>'111', 'disabled' ])}}
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3 form-label" style="text-align: left;margin-top:8px;">
                                {{Form::label('namaseksi','Nama Barang')}}
                            </div>
                            <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{Form::text('namaseksi','Barang satu dgdfgfd',['class'=>'form-control', 'required', 'autofocus'])}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3 form-label" style="text-align: left;margin-top:8px;">
                                {{Form::label('namaseksi','Harga')}}
                            </div>
                            <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{Form::text('namaseksi','Rp 100.000',['class'=>'form-control', 'required', 'autofocus'])}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3 form-label" style="text-align: left;margin-top:8px;">
                                {{Form::label('bidang_id','Satuan')}}
                            </div>
                            <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
                                {{Form::select('bidang_id', ['' => '-Pilih Kategori-', '1' => 'Buah', '2' => 'Lusin'], ['class' => 'form-control show-tick', 'required'])}}
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3 form-label" style="text-align: left;margin-top:8px;">
                                {{Form::label('namaseksi','Jumlah Keluar')}}
                            </div>
                            <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{Form::text('namaseksi','5',['class'=>'form-control', 'required', 'autofocus'])}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3 form-label" style="text-align: left;margin-top:8px;">
                                {{Form::label('namaseksi','Jumlah Harga')}}
                            </div>
                            <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{Form::text('namaseksi','Rp 500.000',['class'=>'form-control', 'required', 'autofocus'])}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3 form-label" style="text-align: left;margin-top:8px;">
                                {{Form::label('bidang_id','Kategori')}}
                            </div>
                            <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
                                {{Form::select('bidang_id', ['' => '-Pilih Kategori-', '1' => 'Alat Tulis', '2' => 'Dua'], ['class' => 'form-control show-tick', 'required'])}}
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3 form-label" style="text-align: left;margin-top:8px;">
                                {{Form::label('namaseksi','Tanggal ED')}}
                            </div>
                            <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{Form::text('namaseksi','12 April 2018',['class'=>'form-control', 'required', 'autofocus'])}}
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
                                {!! Form::submit('Submit',['class'=>'btn btn-success m-t-15 waves-effect']) !!}
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
