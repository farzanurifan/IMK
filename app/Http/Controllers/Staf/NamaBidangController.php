<?php

namespace App\Http\Controllers\Staf;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NamaBidangController extends Controller
{
    public function create() {
        $indicator = 'namabidang';
        return view('pages.staf.namabidang.create',compact('indicator'));
    }

    public function create_submit() {
        return redirect()->action('Staf\NamaBidangController@bidang')->withSuccess('Berhasil');
        // return route->back();
    }

    public function edit1() {
        $indicator = 'namabidang';
        return view('pages.staf.namabidang.edit',compact('indicator'));
    }

    public function edit2() {
        $indicator = 'namabidang';
        return view('pages.staf.namabidang.edit2',compact('indicator'));
    }

    public function edit_submit() {
        return redirect()->action('Staf\NamaBidangController@bidang')->withSuccess('Berhasil');
        // return route->back();
    }

    public function delete() {
        return redirect()->action('Staf\NamaBidangController@bidang')->withError('Bidang Deleted');
        // return route->back();
    }
}
