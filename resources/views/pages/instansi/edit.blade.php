@extends('layouts.app')

@section('content')
<div class="col-md-10 col-xs-10 col-sm-10 col-lg-10 col-md-offset-1 col-xs-offset-1 col-sm-offset-1 col-lg-offset-1">
    <!-- Horizontal Layout -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Edit Identitas
                    </h2>
                    <ul class="header-dropdown m-t--5">
                      <li>
                          <a href="/instansi">
                              <button type="button" class="btn btn-danger waves-effect">Batal</button>
                          </a>
                      </li>
                    </ul>
                </div>
                <div class="body col-md-offset-1 col-xs-offset-1 col-sm-offset-1 col-lg-offset-1">
                    {!! Form::open(['action' => 'Instansi\InstansiController@edit_submit', 'id'=>'form_validation', 'method'=>'PUT','class'=>'form-horizontal']) !!}
                        <div class="row clearfix">
                            <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4 form-label" style="text-align: left;margin-top:8px;">
                                {{Form::label('instansiinduk','Instansi Induk')}}
                            </div>
                            <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{Form::text('instansiinduk','Pemerintak Kabupaten Mojokerto',['class'=>'form-control', 'required'])}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4 form-label" style="text-align: left;margin-top:8px;">
                                {{Form::label('skpd','SKPD')}}
                            </div>
                            <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{Form::text('skpd','Dinas Kesehatan',['class'=>'form-control', 'required'])}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4 form-label" style="text-align: left;margin-top:8px;">
                                {{Form::label('namakantor','Nama Kantor')}}
                            </div>
                            <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{Form::text('namaseksi','Dinas Kota',['class'=>'form-control', 'required'])}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4 form-label" style="text-align: left;margin-top:8px;">
                                {{Form::label('singkatankantor','Singkatan Kantor')}}
                            </div>
                            <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{Form::text('singkatankantor','DinKot',['class'=>'form-control', 'required'])}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4 form-label" style="text-align: left;margin-top:8px;">
                                {{Form::label('namauptupdt','Nama UPT/UPTD')}}
                            </div>
                            <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{Form::text('namauptupdt','Unit Kesehatan Kota',['class'=>'form-control', 'required'])}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4 form-label" style="text-align: left;margin-top:8px;">
                                {{Form::label('provinsi','Provinsi')}}
                            </div>
                            <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{Form::text('provinsi','Jawa Timur',['class'=>'form-control', 'required'])}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4 form-label" style="text-align: left;margin-top:8px;">
                                {{Form::label('kota','Kota')}}
                            </div>
                            <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{Form::text('kota','Mojokerto',['class'=>'form-control', 'required'])}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4 form-label" style="text-align: left;margin-top:8px;">
                                {{Form::label('alamat','Alamat')}}
                            </div>
                            <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{Form::text('alamat','Keputih GG 1 19A Sukolilo Mojokerto',['class'=>'form-control', 'required'])}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4 form-label" style="text-align: left;margin-top:8px;">
                                {{Form::label('nomortelepon','Nomor Telepon')}}
                            </div>
                            <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{Form::number('nomortelepon','08977553744',['class'=>'form-control', 'required'])}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4 form-label" style="text-align: left;margin-top:8px;">
                                {{Form::label('','Email')}}
                            </div>
                            <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{Form::text('email','dinaskotamojokerto@gmail.com',['class'=>'form-control', 'required'])}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4 form-label" style="text-align: left;margin-top:8px;">
                                {{Form::label('penyimpanbarang','Penyimpan Barang')}}
                            </div>
                            <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{Form::text('penyimpanbarang','Farza Nurifan',['class'=>'form-control', 'required'])}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{Form::number('nippenyimpanbarang','1653746810',['class'=>'form-control', 'required'])}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row clearfix">
                            <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4 form-label" style="text-align: left;margin-top:8px;">
                                {{Form::label('kepalauptnip','Kepala UPT / NIP')}}
                            </div>
                            <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{Form::text('kepalaupt','Fajri Salam',['class'=>'form-control', 'required'])}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{Form::number('nipkepalautp','1653746811',['class'=>'form-control', 'required'])}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4 form-label" style="text-align: left;margin-top:8px;">
                                {{Form::label('ppkomnip','PPKom / NIP')}}
                            </div>
                            <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{Form::text('ppkom','Ilham Febriyanto',['class'=>'form-control', 'required'])}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{Form::number('nipppkom','1653746812',['class'=>'form-control', 'required'])}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4 form-label" style="text-align: left;margin-top:8px;">
                                {{Form::label('p2hpnip','P2HP / NIP')}}
                            </div>
                            <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{Form::text('p2hp','Failaqul Haq',['class'=>'form-control', 'required'])}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{Form::number('nipp2hpnip','1653746813',['class'=>'form-control', 'required'])}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4 form-label" style="text-align: left;margin-top:8px;">
                                {{Form::label('skp2hpnotanggal','SK P2HP No/Tanggal')}}
                            </div>
                            <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{Form::text('skp2hpno','050',['class'=>'form-control', 'required'])}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{Form::date('tanggal', \Carbon\Carbon::createFromDate(2018,10,02)->format('Y-m-d'),['class'=>'form-control', 'required'])}}
                                    </div>
                                    <div class="help-info">*bulan/tanggal/tahun</div>
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
