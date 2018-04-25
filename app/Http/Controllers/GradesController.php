<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GradesController extends Controller
{
    public function index() {
        $indicator = 'grades';
        return view('pages.grades.home', compact('indicator'));
    }

    public function create() {
        $indicator = 'grades';
        return view('pages.grades.create',compact('indicator'));
    }

    public function create_submit() {
        return redirect()->action('GradesController@index')->withSuccess('New Grades Added');
        // return route->back();
    }

    public function edit() {
        $indicator = 'grades';
        return view('pages.grades.edit',compact('indicator'));
    }

    public function edit_submit() {
        return redirect()->action('GradesController@index')->withSuccess('Grades Updated');
        // return route->back();
    }

    public function delete() {
        return redirect()->action('GradesController@index')->withError('Grades Deleted');
        // return route->back();
    }
}
