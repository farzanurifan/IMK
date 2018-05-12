<?php

namespace App\Http\Controllers\Staf;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tabel\Staf\StafBidang;
use App\Tabel\Staf\StafSeksi;
use DB;

class StafController extends Controller
{
    // Bidang
    public function bidang() {
        $data = StafBidang::all();
        $indicator = 'bidang';
        return view('pages.staf.bidang.home',compact('indicator','data'));
    }

    // Nama Bidang
    public function namabidang() {
        $indicator = 'namabidang';
        return view('pages.staf.namabidang.home',compact('indicator','data'));
    }

    // Seksi
    public function seksi() {
        $data = StafSeksi::all();
        $indicator = 'seksi';
        return view('pages.staf.seksi.home',compact('indicator','data'));
    }

    // Nama Seksi
    public function namaseksi() {
        $indicator = 'namaseksi';
        return view('pages.staf.namaseksi.home',compact('indicator','data'));
    }

    // Staf
    public function staff() {
        $indicator = 'staff';
        return view('pages.staf.staff.home')->with('indicator', $indicator);
    }
}
