<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrarController extends Controller
{
    public function index() {
        $indicator = 'registrar';
        return view('pages.registrar.home', compact('indicator'));
    }

    public function create() {
        $indicator = 'registrar';
        return view('pages.registrar.create',compact('indicator'));
    }

    public function create_submit() {
        return redirect()->action('RegistrarController@index')->withSuccess('New Registrar Added');
        // return route->back();
    }

    public function edit() {
        $indicator = 'registrar';
        return view('pages.registrar.edit',compact('indicator'));
    }

    public function edit_submit() {
        return redirect()->action('RegistrarController@index')->withSuccess('Registrar Updated');
        // return route->back();
    }

    public function delete() {
        return redirect()->action('RegistrarController@index')->withError('Registrar Deleted');
        // return route->back();
    }

    public function spesial() {
        return redirect()->action('RegistrarController@index')->withSuccess('Registrar Updated');
    }
}
