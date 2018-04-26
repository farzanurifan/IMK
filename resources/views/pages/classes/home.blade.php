@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        All Classes
                    </h2>
                    <ul class="header-dropdown m-t--5 m-r--5">
                        <a href="/classes/create">
                            <button type="button" class="btn btn-success waves-effect">CREATE</button>
                        </a>
                    </ul>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <div class="col-md-12">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Subject Code</th>
                                        <th>Subject Description</th>
                                        <th>Units</th>
                                        <th>Major</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>111</td>
                                        <td>Human Computer Interaction</td>
                                        <td>2</td>
                                        <td>Yes</td>
                                        <td>
                                            <a href="/classes/edit">
                                                <i class="material-icons" style="font-size: 1.0em;">create</i>
                                                edit
                                            </a>
                                            <small>	&nbsp;&nbsp;</small>
                                            <a href="{{ route('classes.delete') }}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure?">
                                                <i class="material-icons" style="font-size: 1.0em;">remove_circle</i>
                                                delete
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Basic Examples -->
</div>
@endsection
