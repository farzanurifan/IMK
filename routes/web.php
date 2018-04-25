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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'student'], function(){
    Route::get('/', 'StudentController@index');
    Route::get('/create', 'StudentController@create');
    Route::post('/create/submit','StudentController@create_submit');
    Route::get('/edit', 'StudentController@edit');
    Route::put('/edit/submit','StudentController@edit_submit');
    Route::delete('/delete', 'StudentController@delete')->name('student.delete');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
