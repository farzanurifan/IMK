@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Student Academic Information
                    </h2>
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
                                        <th>Grade</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Human Computer Interaction</td>
                                        <td>95</td>
                                        <td>
                                            <a href="/grades/edit">
                                                <i class="material-icons" style="font-size: 1.0em;">create</i>
                                                edit
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
