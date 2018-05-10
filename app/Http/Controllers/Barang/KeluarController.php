<?php

namespace App\Http\Controllers\Barang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KeluarController extends Controller
{
    public function create() {
        $indicator = 'keluar';
        return view('pages.barang.keluar.create',compact('indicator'));
    }

    public function create_submit() {
        return redirect()->action('Barang\BarangController@keluar')->withSuccess('Berhasil');
        // return route->back();
    }

    public function edit1() {
        $indicator = 'keluar';
        return view('pages.barang.keluar.edit',compact('indicator'));
    }
    public function edit2() {
        $indicator = 'keluar';
        return view('pages.barang.keluar.edit2',compact('indicator'));
    }


    public function edit_submit() {
        return redirect()->action('Barang\BarangController@keluar')->withSuccess('Berhasil');
        // return route->back();
    }

    public function delete() {
        return redirect()->action('Barang\BarangController@keluar')->withError('Barang Keluar Deleted');
        // return route->back();
    }
}
