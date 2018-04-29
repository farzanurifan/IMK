<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function kartu_barang() {
      $indicator = 'kartu-barang';
      return view('pages.laporan.laporan')->with('indicator', $indicator);
    }

    public function lap_stok() {
      $indicator = 'lap-stok';
      return view('pages.laporan.laporan')->with('indicator', $indicator);
    }

    public function permintaan_bidang() {
      $indicator = 'permintaan-bidang';
      return view('pages.laporan.laporan')->with('indicator', $indicator);
    }

    public function kartu_persediaan() {
      $indicator = 'kartu-persediaan';
      return view('pages.laporan.laporan')->with('indicator', $indicator);
    }

    public function rincian_barang_masuk() {
      $indicator = 'rincian-barang-masuk';
      return view('pages.laporan.laporan')->with('indicator', $indicator);
    }

    public function rincian_barang_keluar() {
      $indicator = 'rincian-barang-keluar';
      return view('pages.laporan.laporan')->with('indicator', $indicator);
    }

    public function berita_acara_stok() {
      $indicator = 'berita-acara-stok';
      return view('pages.laporan.laporan')->with('indicator', $indicator);
    }

    public function rekap_barang_setahun() {
      $indicator = 'rekap-barang-setahun';
      return view('pages.laporan.laporan')->with('indicator', $indicator);
    }

    public function laporan_barang_kadaluarsa() {
      $indicator = 'laporan-barang-kadaluarsa';
      return view('pages.laporan.laporan')->with('indicator', $indicator);
    }

    public function data_barang_lokasi() {
      $indicator = 'data-barang-lokasi';
      return view('pages.laporan.laporan')->with('indicator', $indicator);
    }
}
