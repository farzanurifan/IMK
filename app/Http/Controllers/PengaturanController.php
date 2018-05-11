<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;

class PengaturanController extends Controller
{
    //
    public function pengaturan() {
        $indicator = 'pengaturan';
        return view('pengaturan',compact('indicator'));
    }
    public function apply($warna) {
        $user = Auth::user();
        $data = User::find($user->id);
        $data->warna = $warna;
        $data->save();
        return redirect()->action('PengaturanController@pengaturan')->withSuccess('Berhasil');
    }
}
