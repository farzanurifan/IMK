<?php

namespace App\Http\Controllers\Barang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KategoriController extends Controller
{
    public function create() {
        $indicator = 'kategori';
        return view('pages.barang.kategori.create',compact('indicator'));
    }

    public function create_submit() {
        return redirect()->action('Barang\BarangController@kategori')->withSuccess('Berhasil');
        // return route->back();
    }


    public function edit1() {
        $indicator = 'kategori';
        return view('pages.barang.kategori.edit',compact('indicator'));
    }
    public function edit2() {
        $indicator = 'kategori';
        return view('pages.barang.kategori.edit2',compact('indicator'));
    }
    public function edit3() {
        $indicator = 'kategori';
        return view('pages.barang.kategori.edit3',compact('indicator'));
    }
    public function edit4() {
        $indicator = 'kategori';
        return view('pages.barang.kategori.edit4',compact('indicator'));
    }



    public function edit_submit() {
        return redirect()->action('Barang\BarangController@kategori')->withSuccess('Berhasil');
        // return route->back();
    }

    public function delete() {
        return redirect()->action('Barang\BarangController@kategori')->withError('Kategori Deleted');
        // return route->back();
    }
}
