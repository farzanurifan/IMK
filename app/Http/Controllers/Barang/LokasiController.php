<?php

namespace App\Http\Controllers\Barang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LokasiController extends Controller
{
    public function create() {
        $indicator = 'lokasi';
        return view('pages.barang.lokasi.create',compact('indicator'));
    }

    public function create_submit() {
        return redirect()->action('Barang\BarangController@lokasi')->withSuccess('Berhasil');
        // return route->back();
    }

    public function edit1() {
        $indicator = 'lokasi';
        return view('pages.barang.lokasi.edit',compact('indicator'));
    }
    public function edit2() {
        $indicator = 'lokasi';
        return view('pages.barang.lokasi.edit2',compact('indicator'));
    }
    public function edit3() {
        $indicator = 'lokasi';
        return view('pages.barang.lokasi.edit3',compact('indicator'));
    }


    public function edit_submit() {
        return redirect()->action('Barang\BarangController@lokasi')->withSuccess('Berhasil');
        // return route->back();
    }

    public function delete() {
        return redirect()->action('Barang\BarangController@lokasi')->withError('Lokasi Deleted');
        // return route->back();
    }
}
