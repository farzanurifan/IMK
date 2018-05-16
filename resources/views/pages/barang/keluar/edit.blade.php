@extends('layouts.app')

@section('content')
<div class="col-md-8 col-xs-8 col-sm-8 col-lg-8 col-md-offset-2 col-xs-offset-2 col-sm-offset-2 col-lg-offset-2">
    <!-- Horizontal Layout -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Ubah Data Barang Keluar
                    </h2>
                    <ul class="header-dropdown m-t--5">
                      <li>
                          <a href="/barang/keluar">
                              <button type="button" class="btn btn-danger waves-effect">Batal</button>
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
                                    <div class="m-t-5">
                                        {{Form::text('id','1',[ 'disabled', 'id'=>'dis' ])}}
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3 form-label" style="text-align: left;margin-top:8px;">
                                {{Form::label('namabarang','Nama Barang')}}
                            </div>
                            <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{Form::text('namabarang','Permen Milkita',['class'=>'form-control', 'required', 'autofocus'])}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div  class="col-md-3 col-xs-3 col-sm-3 col-lg-3 form-label" style="text-align: left;margin-top:8px;">
                                {{Form::label('hargabarang','Harga')}}
                            </div>
                            <div class="col-md-1 col-xs-1 col-sm-1 col-lg-1" style="text-align: left;margin-top:8px;">Rp</div>
                            <div class="col-md-5 col-xs-5 col-sm-5 col-lg-5">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{Form::text('hargabarang','1000',['class'=>'form-control', 'required', 'autofocus', 'id'=>'harga'])}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3 form-label " style="text-align: left;margin-top:8px;" >
                                {{Form::label('jumlahkeluar','Jumlah')}}
                            </div>
                            <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{Form::number('jumlahkeluar','3',['class'=>'form-control', 'required', 'autofocus', 'id'=>'jumlah'])}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3 form-label" style="text-align: left;margin-top:8px;">
                                {{Form::label('satuanbarang','Satuan')}}
                            </div>
                            <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6 m-t-5">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{Form::select('satuanbarang', ['1' => 'Buah', '2' => 'Lusin'], 1, ['class' => 'form-control show-tick', 'required'])}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3 form-label" style="text-align: left;margin-top:8px;">
                                {{Form::label('jumlahharga','Total')}}
                            </div>
                            <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <div class="m-t-5">
                                        {{Form::text('jumlahharga','Rp 3.000,00',['disabled', 'required', 'autofocus', 'id'=>'jumlahharga'])}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3 form-label" style="text-align: left;margin-top:8px;">
                                {{Form::label('kategori_id','Kategori')}}
                            </div>
                            <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6 m-t-5">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{Form::select('kategori_id', ['1' => 'Headset', '2' => 'Smartphone', '3' => 'Mouse', '4' => 'Makanan'], 4, ['class' => 'form-control show-tick', 'required'])}} 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3 form-label" style="text-align: left;margin-top:8px;">
                                {{Form::label('tanggaled','Tanggal Keluar')}}
                            </div>
                            {{-- <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="datepicker form-control" placeholder="Please choose a date..." required>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{Form::date('tanggal', \Carbon\Carbon::createFromDate(2018,4,18)->format('Y-m-d'),['class'=>'form-control', 'required', 'id'=> "tanggal"])}}
                                    </div>
                                    <small>*bulan/tanggal/tahun</small>
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
