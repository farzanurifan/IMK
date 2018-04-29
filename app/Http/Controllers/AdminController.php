<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Admin
    public function admin() {
      $indicator = 'admin';
      return view('pages.admin.admin')->with('indicator', $indicator);
  }
}
