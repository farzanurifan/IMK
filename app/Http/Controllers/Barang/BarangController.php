<?php

namespace App\Http\Controllers\Barang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BarangController extends Controller
{
    // Data Barang
    public function databarang() {
        $indicator = 'databarang';
        return view('pages.barang.databarang.home', compact('indicator'));
    }

    // Kategori Barang
    public function kategori() {
        $indicator = 'kategori';
        return view('pages.barang.kategori.home', compact('indicator'));
    }

    // Barang Masuk
    public function masuk() {
        $indicator = 'masuk';
        return view('pages.barang.masuk.home', compact('indicator'));
    }

    // Barang Kelua
    public function keluar() {
        $indicator = 'keluar';
        return view('pages.barang.keluar.home', compact('indicator'));
    }

    // Lokasi
    public function lokasi() {
        $indicator = 'lokasi';
        return view('pages.barang.lokasi.home', compact('indicator'));
    }
}
