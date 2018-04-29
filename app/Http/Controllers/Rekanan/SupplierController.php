<?php

namespace App\Http\Controllers\Rekanan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SupplierController extends Controller
{
    public function create() {
        $indicator = 'supplier';
        return view('pages.rekanan.supplier.create',compact('indicator'));
    }

    public function create_submit() {
        return redirect()->action('Rekanan\RekananController@supplier')->withSuccess('New Supplier Added');
        // return route->back();
    }

    public function edit() {
        $indicator = 'supplier';
        return view('pages.rekanan.supplier.edit',compact('indicator'));
    }

    public function edit_submit() {
        return redirect()->action('Rekanan\RekananController@supplier')->withSuccess('Supplier Updated');
        // return route->back();
    }

    public function delete() {
        return redirect()->action('Rekanan\RekananController@supplier')->withError('Supplier Deleted');
        // return route->back();
    }
}
