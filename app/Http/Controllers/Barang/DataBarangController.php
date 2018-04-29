<?php

namespace App\Http\Controllers\Barang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataBarangController extends Controller
{
    public function create() {
        $indicator = 'databarang';
        return view('pages.barang.databarang.create',compact('indicator'));
    }

    public function create_submit() {
        return redirect()->action('Barang\BarangController@databarang')->withSuccess('New Data Barang Added');
        // return route->back();
    }

    public function edit() {
        $indicator = 'databarang';
        return view('pages.barang.databarang.edit',compact('indicator'));
    }

    public function edit_submit() {
        return redirect()->action('Barang\BarangController@databarang')->withSuccess('Data Barang Updated');
        // return route->back();
    }

    public function delete() {
        return redirect()->action('Barang\BarangController@databarang')->withError('Data Barang Deleted');
        // return route->back();
    }
}
