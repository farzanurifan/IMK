<?php

namespace App\Http\Controllers\Utilitas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditBarangKeluarController extends Controller
{
    public function create() {
        $indicator = 'editbarangkeluar';
        return view('pages.utilitas.editbarangkeluar.create',compact('indicator'));
    }

    public function create_submit() {
        return redirect()->action('Utilitas\UtilitasController@editbarangkeluar')->withSuccess('New Permintaan Barang Keluar Added');
        // return route->back();
    }

    public function edit() {
        $indicator = 'editbarangkeluar';
        return view('pages.utilitas.editbarangkeluar.edit',compact('indicator'));
    }

    public function edit_submit() {
        return redirect()->action('Utilitas\UtilitasController@editbarangkeluar')->withSuccess('Permintaan Barang Keluar Updated');
        // return route->back();
    }

    public function delete() {
        return redirect()->action('Utilitas\UtilitasController@editbarangkeluar')->withError('Permintaan Barang Keluar Deleted');
        // return route->back();
    }
}
