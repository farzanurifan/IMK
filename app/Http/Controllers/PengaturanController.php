<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengaturanController extends Controller
{
    //
    public function pengaturan() {
        $indicator = 'pengaturan';
        return view('pengaturan',compact('indicator'));
    }
    public function apply() {
        return redirect()->action('PengaturanController@pengaturan')->withSuccess('Berhasil');
    }
}
