<?php

namespace App\Http\Controllers\Pemasok;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PemasokController extends Controller
{
    public function pemasok() {
      $indicator = 'pemasok';
      return view('pages.pemasok.home')->with('indicator', $indicator);
  	}
  	public function create() {
        $indicator = 'pemasok';
        return view('pages.pemasok.create',compact('indicator'));
    }

    public function create_submit() {
        return redirect()->action('Pemasok\PemasokController@pemasok')->withSuccess('Berhasil');
        // return route->back();
    }

    public function edit() {
        $indicator = 'pemasok';
        return view('pages.pemasok.edit',compact('indicator'));
    }

    public function edit_submit() {
        return redirect()->action('Pemasok\PemasokController@pemasok')->withSuccess('Berhasil');
        // return route->back();
    }

    public function delete() {
        return redirect()->action('Rekanan\RekananController@supplier')->withError('Supplier Deleted');
        // return route->back();
    }
}
