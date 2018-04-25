<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        $indicator = 'student';
        return view('pages.student.home', compact('indicator'));
    }

    public function create() {
        $indicator = 'student';
        return view('pages.student.create',compact('indicator'));
    }

    public function create_submit() {
        return redirect()->action('StudentController@index')->withSuccess('New Student Added');
        // return route->back();
    }

    public function edit() {
        $indicator = 'student';
        return view('pages.student.edit',compact('indicator'));
    }

    public function edit_submit() {
        return redirect()->action('StudentController@index')->withSuccess('Student Updated');
        // return route->back();
    }

    public function delete() {
        return redirect()->action('StudentController@index')->withError('Student Deleted');
        // return route->back();
    }
}
