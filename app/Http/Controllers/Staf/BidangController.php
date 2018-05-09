<?php

namespace App\Http\Controllers\Staf;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tabel\Staf\StafBidang;
use DB;

class BidangController extends Controller
{
      public function create() {
        //   $data = DB::table('staf_bidangs')->latest('id')->first();
          $indicator = 'bidang';
          return view('pages.staf.bidang.create',compact('indicator','data'));
      }

      //public function create_submit(Request $request) {
        public function create_submit() {
        //   $data = new StafBidang;
        //   $data->namabidang = $request->input('namabidang');
        //   $data->kepalabidang = $request->input('kepalabidang');
        //   $data->nipkabid = $request->input('nipkabid');
        //   $data->save();
          return redirect()->action('Staf\StafController@bidang')->withSuccess('Berhasil');
          // return route->back();
      }

      //public function edit($id) {
        public function edit1() {
        //   $data = StafBidang::find($id);
          $indicator = 'bidang';
          return view('pages.staf.bidang.edit',compact('indicator','data'));
      }

        public function edit2() {
        //   $data = StafBidang::find($id);
          $indicator = 'bidang';
          return view('pages.staf.bidang.edit2',compact('indicator','data'));
      }

      //public function edit_submit(Request $request, $id) {
        public function edit_submit() {
        //   $data = StafBidang::find($request->id);
        //   $data->namabidang = $request->input('namabidang');
        //   $data->kepalabidang = $request->input('kepalabidang');
        //   $data->nipkabid = $request->input('nipkabid');
        //   $data->save();
          return redirect()->action('Staf\StafController@bidang')->withSuccess('Berhasil');
          // return route->back();
      }

      //public function delete($id) {
        public function delete() {
        //   $data = StafBidang::find($id);
        //   $data->delete();
          return redirect()->action('Staf\StafController@bidang')->withError('Bidang Deleted');
          // return route->back();
      }
}
