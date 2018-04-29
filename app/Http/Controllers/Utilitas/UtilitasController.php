<?php

namespace App\Http\Controllers\Utilitas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UtilitasController extends Controller
{
    // ID
    public function id() {
        $indicator = 'id';
        return view('pages.utilitas.id.home', compact('indicator'));
    }

    // Stok
    public function stok() {
        $indicator = 'stok';
        return view('pages.utilitas.stok.home', compact('indicator'));
    }

    // Edit Barang Keluar
    public function editbarangkeluar() {
        $indicator = 'editbarangkeluar';
        return view('pages.utilitas.editbarangkeluar.home', compact('indicator'));
    }

    // Edit Barang Masuk
    public function editbarangmasuk() {
        $indicator = 'editbarangmasuk';
        return view('pages.utilitas.editbarangmasuk.home', compact('indicator'));
    }

    // Operasi Data
    public function operasidata() {
        $indicator = 'operasidata';
        return view('pages.utilitas.operasidata', compact('indicator'));
    }

    // Stok Awal
    public function stokawal() {
        $indicator = 'stokawal';
        return view('pages.utilitas.stokawal', compact('indicator'));
    }
}
