@extends('layouts.app')

@section('content')
<div class="col-md-8 col-xs-8 col-sm-8 col-lg-8 col-md-offset-2 col-xs-offset-2 col-sm-offset-2 col-lg-offset-2">
    <!-- Horizontal Layout -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Tambah Data Bidang
                    </h2>
                    <ul class="header-dropdown m-t--5 m-r--5">
                      <li>
                          <a href="/staf/bidang">
                              <button type="button" class="btn btn-danger waves-effect">Batal</button>
                          </a>
                      </li>
                    </ul>
                </div>
                <div class="body col-md-offset-1 col-xs-offset-1 col-sm-offset-1 col-lg-offset-1">
                    {!! Form::open(['action' => 'Staf\BidangController@create_submit', 'id'=>'form_validation', 'method'=>'POST','class'=>'form-horizontal']) !!}
                      <div class="row clearfix">
                          <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3 form-label" style="text-align: left;margin-top:8px;">
                              {{Form::label('id','ID')}}
                          </div>
                          <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
                              <div class="form-group">
                                  <div class="form-line disabled">
                                      @if(count($data) > 0)
                                          {{Form::text('id','',['class'=>'form-control', 'placeholder'=> $data->id+1, 'disabled' ])}}
                                      @else
                                          {{Form::text('id','',['class'=>'form-control', 'placeholder'=> '1', 'disabled' ])}}
                                      @endif
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3 form-label" style="text-align: left;margin-top:8px;">
                                {{Form::label('namabidang','Nama Bidang')}}
                            </div>
                            <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{Form::text('namabidang','',['class'=>'form-control', 'required', 'autofocus'])}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3 form-label" style="text-align: left;margin-top:8px;">
                                {{Form::label('kepalabidang','Kepala Bidang')}}
                            </div>
                            <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{Form::text('kepalabidang','',['class'=>'form-control', 'required'])}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3 form-label" style="text-align: left;margin-top:8px;">
                                {{Form::label('nipkabid','NIP Kabid')}}
                            </div>
                            <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{Form::text('nipkabid','',['class'=>'form-control', 'required'])}}
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