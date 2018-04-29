<?php

namespace App\Http\Controllers\Staf;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaffController extends Controller
{
    public function create() {
        $indicator = 'staff';
        return view('pages.staf.staff.create',compact('indicator'));
    }

    public function create_submit() {
        return redirect()->action('Staf\StafController@staff')->withSuccess('New Staff Added');
        // return route->back();
    }

    public function edit() {
        $indicator = 'staff';
        return view('pages.staf.staff.edit',compact('indicator'));
    }

    public function edit_submit() {
        return redirect()->action('Staf\StafController@staff')->withSuccess('Staff Updated');
        // return route->back();
    }

    public function delete() {
        return redirect()->action('Staf\StafController@staff')->withError('Staff Deleted');
        // return route->back();
    }
}
