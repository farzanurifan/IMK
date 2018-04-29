<?php

namespace App\Http\Controllers\Utilitas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IdController extends Controller
{
    public function create() {
        $indicator = 'id';
        return view('pages.utilitas.id.create',compact('indicator'));
    }

    public function create_submit() {
        return redirect()->action('Utilitas\UtilitasController@id')->withSuccess('New Id Added');
        // return route->back();
    }

    public function edit() {
        $indicator = 'id';
        return view('pages.utilitas.id.edit',compact('indicator'));
    }

    public function edit_submit() {
        return redirect()->action('Utilitas\UtilitasController@id')->withSuccess('Id Updated');
        // return route->back();
    }

    public function delete() {
        return redirect()->action('Utilitas\UtilitasController@id')->withError('Id Deleted');
        // return route->back();
    }
}
