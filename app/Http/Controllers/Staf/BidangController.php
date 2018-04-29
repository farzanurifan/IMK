<?php

namespace App\Http\Controllers\Staf;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tabel\Staf\StafBidang;
use DB;

class BidangController extends Controller
{
      public function create() {
          $data = DB::table('staf_bidangs')->latest('id')->first();
          $indicator = 'bidang';
          return view('pages.staf.bidang.create',compact('indicator','data'));
      }

      public function create_submit(Request $request) {
          $data = new StafBidang;
          $data->namabidang = $request->input('namabidang');
          $data->kepalabidang = $request->input('kepalabidang');
          $data->nipkabid = $request->input('nipkabid');
          $data->save();
          return redirect()->action('Staf\StafController@bidang')->withSuccess('New Bidang Added');
          // return route->back();
      }

      public function edit($id) {
          $data = StafBidang::find($id);
          $indicator = 'bidang';
          return view('pages.staf.bidang.edit',compact('indicator','data'));
      }

      public function edit_submit(Request $request, $id) {
          $data = StafBidang::find($request->id);
          $data->namabidang = $request->input('namabidang');
          $data->kepalabidang = $request->input('kepalabidang');
          $data->nipkabid = $request->input('nipkabid');
          $data->save();
          return redirect()->action('Staf\StafController@bidang')->withSuccess('Bidang Updated');
          // return route->back();
      }

      public function delete($id) {
          $data = StafBidang::find($id);
          $data->delete();
          return redirect()->action('Staf\StafController@bidang')->withError('Bidang Deleted');
          // return route->back();
      }
}
