<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnrollController extends Controller
{
    public function index() {
        $indicator = 'enroll';
        return view('pages.enroll.home', compact('indicator'));
    }

    public function add() {
        return redirect()->action('EnrollController@view2')->withSuccess('Subject Added');
    }

    public function view() {
        $indicator = 'enroll';
        return view('pages.enroll.view', compact('indicator'));
    }

    public function view2() {
        $indicator = 'enroll';
        return view('pages.enroll.view2', compact('indicator'));
    }

    public function view3() {
        $indicator = 'enroll';
        return view('pages.enroll.view3', compact('indicator'));
    }

    public function create() {
        $indicator = 'enroll';
        return view('pages.enroll.create',compact('indicator'));
    }

    public function create_submit() {
        return redirect()->action('EnrollController@index')->withSuccess('New Enroll Added');
        // return route->back();
    }

    public function edit() {
        $indicator = 'enroll';
        return view('pages.enroll.edit',compact('indicator'));
    }

    public function edit_submit() {
        return redirect()->action('EnrollController@index')->withSuccess('Enroll Updated');
        // return route->back();
    }

    public function delete() {
        return redirect()->action('EnrollController@view2')->withError('Subject Dropped');
        // return route->back();
    }
}
