@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Student Registration Information
                    </h2>
                    <ul class="header-dropdown m-t--5 m-r--5">
                        <a href="/enroll/view3">
                            <button type="button" class="btn btn-success waves-effect">Add Subject</button>
                        </a>
                    </ul>
                </div>
                <div class="body">
                    <div>
                        <table>
                            <tr>
                                <th>ID Number</th>
                                <td>: 111</td>
                            </tr>
                            <tr>
                                <th>Student Name&emsp;</th>
                                <td>: Farza Nurifan</td>
                            </tr>
                            <tr>
                                <th>Course</th>
                                <td>: Informatics</td>
                            </tr>
                            <tr>
                                <th>Year</th>
                                <td>: 2</td>
                            </tr>
                        </table>
                    </div>
                    <br>
                    <div class="table-responsive">
                        <div class="col-md-12">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Subject</th>
                                        <th>Units</th>
                                        <th>Major</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Human Computer Interactin</td>
                                        <td>2</td>
                                        <td>Yes</td>
                                        <td>
                                            <a href="{{ route('enroll.delete') }}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure?">
                                                <i class="material-icons" style="font-size: 1.0em;">delete_sweep</i>
                                                drop
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
