<?php

namespace App\Http\Controllers\Barang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MasukController extends Controller
{
    public function create() {
        $indicator = 'masuk';
        return view('pages.barang.masuk.create',compact('indicator'));
    }

    public function create_submit() {
        return redirect()->action('Barang\BarangController@masuk')->withSuccess('Berhasil');
        // return route->back();
    }

    public function edit1() {
        $indicator = 'masuk';
        return view('pages.barang.masuk.edit',compact('indicator'));
    }
    public function edit2() {
        $indicator = 'masuk';
        return view('pages.barang.masuk.edit2',compact('indicator'));
    }

    public function edit_submit() {
        return redirect()->action('Barang\BarangController@masuk')->withSuccess('Berhasil');
        // return route->back();
    }

    public function delete() {
        return redirect()->action('Barang\BarangController@masuk')->withError('Barang Masuk Deleted');
        // return route->back();
    }
}
