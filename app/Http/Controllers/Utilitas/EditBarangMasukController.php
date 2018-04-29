<?php

namespace App\Http\Controllers\Utilitas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditBarangMasukController extends Controller
{
    public function create() {
        $indicator = 'editbarangmasuk';
        return view('pages.utilitas.editbarangmasuk.create',compact('indicator'));
    }

    public function create_submit() {
        return redirect()->action('Utilitas\UtilitasController@editbarangmasuk')->withSuccess('New Permintaan Barang Masuk Added');
        // return route->back();
    }

    public function edit() {
        $indicator = 'editbarangmasuk';
        return view('pages.utilitas.editbarangmasuk.edit',compact('indicator'));
    }

    public function edit_submit() {
        return redirect()->action('Utilitas\UtilitasController@editbarangmasuk')->withSuccess('Permintaan Barang Masuk Updated');
        // return route->back();
    }

    public function delete() {
        return redirect()->action('Utilitas\UtilitasController@editbarangmasuk')->withError('Permintaan Barang Masuk Deleted');
        // return route->back();
    }
}
