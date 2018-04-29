<?php

namespace App\Http\Controllers\Rekanan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RekananController extends Controller
{
    public function supplier() {
        $indicator = 'supplier';
        return view('pages.rekanan.supplier.home', compact('indicator'));
    }
}
