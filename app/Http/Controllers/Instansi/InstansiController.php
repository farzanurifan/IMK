<?php

namespace App\Http\Controllers\Instansi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InstansiController extends Controller
{
    public function instansi() {
      $indicator = 'instansi';
      return view('pages.instansi.home')->with('indicator', $indicator);
  	}
  	public function edit() {
        $indicator = 'instansi';
        return view('pages.instansi.edit',compact('indicator'));
    }

    public function edit_submit() {
        return redirect()->action('Instansi\InstansiController@instansi')->withSuccess('Berhasil');
        // return route->back();
    }
}
