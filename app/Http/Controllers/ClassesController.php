<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function index() {
        $indicator = 'classes';
        return view('pages.classes.home', compact('indicator'));
    }

    public function create() {
        $indicator = 'classes';
        return view('pages.classes.create',compact('indicator'));
    }

    public function create_submit() {
        return redirect()->action('ClassesController@index')->withSuccess('New Classes Added');
        // return route->back();
    }

    public function edit() {
        $indicator = 'classes';
        return view('pages.classes.edit',compact('indicator'));
    }

    public function edit_submit() {
        return redirect()->action('ClassesController@index')->withSuccess('Classes Updated');
        // return route->back();
    }

    public function delete() {
        return redirect()->action('ClassesController@index')->withError('Classes Deleted');
        // return route->back();
    }
}
