@extends('layouts.app')

@section('content')
<div class="col-md-4 col-xs-4 col-sm-4 col-lg-4 col-md-offset-4 col-xs-offset-4 col-sm-offset-4 col-lg-offset-4">
    <!-- Advanced Validation -->
    <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>Registrar Setings</h2>
            </div>
            <div class="body">
              <form id="form_advanced_validation" method="POST">
                    <div class="form-group form-float">
                        <div class="form-line">
                            {{Form::number('id','2018',['class'=>'form-control', 'name' => 'number', 'required' ])}}
                            <label class="form-label">Tahun</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            {{Form::number('id','2',['class'=>'form-control', 'name' => 'number', 'required' ])}}
                            <label class="form-label">Semester</label>
                        </div>
                    </div>
                    <a href="/registrar/spesial" class="btn btn-primary waves-effect">Update</a>
                </form>
            </div>
        </div>
    </div>
  </div>
  <!-- #END# Advanced Validation -->
</div>
@endsection
