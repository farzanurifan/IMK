<?php

namespace App\Http\Controllers\Utilitas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IdController extends Controller
{
    public function edit() {
        $indicator = 'id';
        return view('pages.utilitas.id.edit',compact('indicator'));
    }

    public function edit_submit() {
        return redirect()->action('Utilitas\UtilitasController@id')->withSuccess('Berhasil');
        // return route->back();
    }
}
