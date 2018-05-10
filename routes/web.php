<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
////////////////////////////////////////////////////////////////////////////////

Route::get('/', function () {
    return redirect('/login');
});


Route::get('/pengaturan', 'PengaturanController@pengaturan');

Route::get('/pengaturan/apply', 'PengaturanController@apply');

////////////////////////////////////////////////////////////////////////////////

Route::group(['prefix' => 'staf'], function(){
    // Halaman Utama
    Route::get('/bidang', 'Staf\StafController@bidang');
    Route::get('/seksi', 'Staf\StafController@seksi');
    Route::get('/staff', 'Staf\StafController@staff');

    // Bidang
    Route::group(['prefix' => 'bidang'], function(){
        Route::get('/create', 'Staf\BidangController@create');
        Route::post('/create/submit','Staf\BidangController@create_submit');
        Route::get('/edit1', 'Staf\BidangController@edit1');
        Route::get('/edit2', 'Staf\BidangController@edit2');
        Route::put('/edit/submit','Staf\BidangController@edit_submit');
        Route::delete('/delete/{id}', 'Staf\BidangController@delete')->name('bidang.delete');
    });

    // Seksi
    Route::group(['prefix' => 'seksi'], function(){
        Route::get('/create', 'Staf\SeksiController@create');
        Route::post('/create/submit','Staf\SeksiController@create_submit');
        Route::get('/edit1', 'Staf\SeksiController@edit1');
        Route::get('/edit2', 'Staf\SeksiController@edit2');
        Route::put('/edit/submit','Staf\SeksiController@edit_submit');
        Route::delete('/delete/{id}', 'Staf\SeksiController@delete')->name('seksi.delete');
    });

    // Staf
    Route::group(['prefix' => 'staff'], function(){
        Route::get('/create', 'Staf\StaffController@create');
        Route::post('/create/submit','Staf\StaffController@create_submit');
        Route::get('/edit1', 'Staf\StaffController@edit1');
        Route::get('/edit2', 'Staf\StaffController@edit2');
        Route::put('/edit/submit','Staf\StaffController@edit_submit');
        Route::delete('/delete', 'Staf\StaffController@delete')->name('staff.delete');
    });
});

////////////////////////////////////////////////////////////////////////////////

Route::group(['prefix' => 'rekanan'], function(){
    // Halaman Utama
    Route::get('/supplier', 'Rekanan\RekananController@supplier');

    // Supplier
    Route::group(['prefix' => 'supplier'], function(){
        Route::get('/create', 'Rekanan\SupplierController@create');
        Route::post('/create/submit','Rekanan\SupplierController@create_submit');
        Route::get('/edit', 'Rekanan\SupplierController@edit');
        Route::put('/edit/submit','Rekanan\SupplierController@edit_submit');
        Route::delete('/delete', 'Rekanan\SupplierController@delete')->name('supplier.delete');
    });
});

////////////////////////////////////////////////////////////////////////////////

Route::get('/pemasok', 'Pemasok\PemasokController@pemasok');
Route::group(['prefix' => 'pemasok'], function(){
    Route::get('/create', 'Pemasok\PemasokController@create');
    Route::post('/create/submit','Pemasok\PemasokController@create_submit');
    Route::get('/edit', 'Pemasok\PemasokController@edit');
    Route::put('/edit/submit','Pemasok\PemasokController@edit_submit');
    // Route::delete('/delete', 'Pemasok\PemasokController@pemasok')->name('supplier.delete');
});

////////////////////////////////////////////////////////////////////////////////

Route::group(['prefix' => 'barang'], function(){
    // Halaman Utama
    Route::get('/databarang', 'Barang\BarangController@databarang');
    Route::get('/kategori', 'Barang\BarangController@kategori');
    Route::get('/masuk', 'Barang\BarangController@masuk');
    Route::get('/keluar', 'Barang\BarangController@keluar');
    Route::get('/lokasi', 'Barang\BarangController@lokasi');

    // Data Barang
    Route::group(['prefix' => 'databarang'], function(){
        Route::get('/create', 'Barang\DataBarangController@create');
        Route::post('/create/submit','Barang\DataBarangController@create_submit');
        Route::get('/edit/1', 'Barang\DataBarangController@edit1');
        Route::get('/edit/2', 'Barang\DataBarangController@edit2');
        Route::put('/edit/submit','Barang\DataBarangController@edit_submit');
        Route::delete('/delete', 'Barang\DataBarangController@delete')->name('databarang.delete');
    });

    // Kategori
    Route::group(['prefix' => 'kategori'], function(){
        Route::get('/create', 'Barang\KategoriController@create');
        Route::post('/create/submit','Barang\KategoriController@create_submit');
        Route::get('/edit', 'Barang\KategoriController@edit');
        Route::put('/edit/submit','Barang\KategoriController@edit_submit');
        Route::delete('/delete', 'Barang\KategoriController@delete')->name('kategori.delete');
    });

    // Masuk
    Route::group(['prefix' => 'masuk'], function(){
        Route::get('/create', 'Barang\MasukController@create');
        Route::post('/create/submit','Barang\MasukController@create_submit');
        Route::get('/edit', 'Barang\MasukController@edit');
        Route::put('/edit/submit','Barang\MasukController@edit_submit');
        Route::delete('/delete', 'Barang\MasukController@delete')->name('masuk.delete');
    });

    // Keluar
    Route::group(['prefix' => 'keluar'], function(){
        Route::get('/create', 'Barang\KeluarController@create');
        Route::post('/create/submit','Barang\KeluarController@create_submit');
        Route::get('/edit', 'Barang\KeluarController@edit');
        Route::put('/edit/submit','Barang\KeluarController@edit_submit');
        Route::delete('/delete', 'Barang\KeluarController@delete')->name('keluar.delete');
    });

    // Lokasi
    Route::group(['prefix' => 'lokasi'], function(){
        Route::get('/create', 'Barang\LokasiController@create');
        Route::post('/create/submit','Barang\LokasiController@create_submit');
        Route::get('/edit', 'Barang\LokasiController@edit');
        Route::put('/edit/submit','Barang\LokasiController@edit_submit');
        Route::delete('/delete', 'Barang\LokasiController@delete')->name('lokasi.delete');
    });
});

// Laporan
Route::group(['prefix' => 'laporan'], function(){
    // Halaman Utama
    Route::get('/kartu-barang', 'LaporanController@kartu_barang');
    Route::get('/lap-stok', 'LaporanController@lap_stok');
    Route::get('/permintaan-bidang', 'LaporanController@permintaan_bidang');
    Route::get('/kartu-persediaan', 'LaporanController@kartu_persediaan');
    Route::get('/rincian-barang-masuk', 'LaporanController@rincian_barang_masuk');
    Route::get('/rincian-barang-keluar', 'LaporanController@rincian_barang_keluar');
    Route::get('/berita-acara-stok', 'LaporanController@berita_acara_stok');
    Route::get('/rekap-barang-setahun', 'LaporanController@rekap_barang_setahun');
    Route::get('/laporan-barang-kadaluarsa', 'LaporanController@laporan_barang_kadaluarsa');
    Route::get('/data-barang-lokasi', 'LaporanController@data_barang_lokasi');
});

////////////////////////////////////////////////////////////////////////////////

Route::group(['prefix' => 'utilitas'], function(){
    // Halaman Utama
    Route::get('/id', 'Utilitas\UtilitasController@id');
    Route::get('/stok', 'Utilitas\UtilitasController@stok');

    // ID
    Route::group(['prefix' => 'id'], function(){
        Route::get('/edit', 'Utilitas\IdController@edit');
        Route::put('/edit/submit','Utilitas\IdController@edit_submit');
    });
});

////////////////////////////////////////////////////////////////////////////////

Route::get('/instansi', 'Instansi\InstansiController@instansi');
       
Route::group(['prefix' => 'instansi'], function(){
    Route::get('/edit', 'Instansi\InstansiController@edit');
    Route::put('/edit/submit','Instansi\InstansiController@edit_submit');
});

////////////////////////////////////////////////////////////////////////////////


// Admin
Route::get('/admin', 'AdminController@admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::group(['prefix' => 'staff'], function () {
//     Route::get('/', '');
// });

// Route::group(['prefix' => 'admin'], function () {
//     Route::get('/', '');
// });

// Route::group(['prefix' => 'super-admin'], function () {
//     Route::get('/', '');
// });
