<?php

namespace App\Http\Controllers\Staf;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NamaSeksiController extends Controller
{
    public function create() {
        $indicator = 'namaseksi';
        return view('pages.staf.namaseksi.create',compact('indicator'));
    }

    public function create_submit() {
        return redirect()->action('Staf\NamaSeksiController@seksi')->withSuccess('Berhasil');
        // return route->back();
    }

    public function edit1() {
        $indicator = 'namaseksi';
        return view('pages.staf.namaseksi.edit',compact('indicator'));
    }

    public function edit2() {
        $indicator = 'namaseksi';
        return view('pages.staf.namaseksi.edit2',compact('indicator'));
    }

    public function edit_submit() {
        return redirect()->action('Staf\NamaSeksiController@seksi')->withSuccess('Berhasil');
        // return route->back();
    }

    public function delete() {
        return redirect()->action('Staf\NamaSeksiController@seksi')->withError('Seksi Deleted');
        // return route->back();
    }
}

