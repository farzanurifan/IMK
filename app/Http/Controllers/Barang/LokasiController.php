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
        return redirect()->action('Barang\BarangController@lokasi')->withSuccess('New Lokasi Added');
        // return route->back();
    }

    public function edit() {
        $indicator = 'lokasi';
        return view('pages.barang.lokasi.edit',compact('indicator'));
    }

    public function edit_submit() {
        return redirect()->action('Barang\BarangController@lokasi')->withSuccess('Lokasi Updated');
        // return route->back();
    }

    public function delete() {
        return redirect()->action('Barang\BarangController@lokasi')->withError('Lokasi Deleted');
        // return route->back();
    }
}
