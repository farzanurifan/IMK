<?php

namespace App\Http\Controllers\Staf;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tabel\Staf\StafSeksi;
use DB;

class SeksiController extends Controller
{
  public function create() {
      $data = DB::table('staf_seksis')->latest('id')->first();
      $indicator = 'seksi';
      return view('pages.staf.seksi.create',compact('indicator','data'));
  }

  public function create_submit(Request $request) {
      $data = new StafSeksi;
      $data->namaseksi = $request->input('namaseksi');
      $data->bidang_id = $request->input('bidang_id');
      $data->kepalaseksi = $request->input('kepalaseksi');
      $data->nipkasek = $request->input('nipkasek');
      $data->save();
      return redirect()->action('Staf\StafController@seksi')->withSuccess('New Seksi Added');
      // return route->back();
  }

  public function edit($id) {
      $data = StafSeksi::find($id);
      $indicator = 'seksi';
      return view('pages.staf.seksi.edit',compact('indicator','data'));
  }

  public function edit_submit(Request $request, $id) {
      $data = StafSeksi::find($request->id);
      $data->namaseksi = $request->input('namaseksi');
      $data->kepalaseksi = $request->input('kepalaseksi');
      $data->nipkabid = $request->input('nipkabid');
      $data->save();
      return redirect()->action('Staf\StafController@seksi')->withSuccess('Seksi Updated');
      // return route->back();
  }

  public function delete($id) {
      $data = StafSeksi::find($id);
      $data->delete();
      return redirect()->action('Staf\StafController@seksi')->withError('Seksi Deleted');
      // return route->back();
  }
}
