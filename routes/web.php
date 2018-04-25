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

Route::group(['prefix' => 'classes'], function(){
    Route::get('/', 'ClassesController@index');
    Route::get('/create', 'ClassesController@create');
    Route::post('/create/submit','ClassesController@create_submit');
    Route::get('/edit', 'ClassesController@edit');
    Route::put('/edit/submit','ClassesController@edit_submit');
    Route::delete('/delete', 'ClassesController@delete')->name('classes.delete');
});

Route::group(['prefix' => 'grades'], function(){
    Route::get('/', 'GradesController@index');
    Route::get('/view', 'GradesController@view');
    Route::get('/create', 'GradesController@create');
    Route::post('/create/submit','GradesController@create_submit');
    Route::get('/edit', 'GradesController@edit');
    Route::put('/edit/submit','GradesController@edit_submit');
    Route::delete('/delete', 'GradesController@delete')->name('grades.delete');
});

Route::group(['prefix' => 'registrar'], function(){
    Route::get('/', 'RegistrarController@index');
    Route::get('/spesial', 'RegistrarController@spesial');
    Route::get('/create', 'RegistrarController@create');
    Route::post('/create/submit','RegistrarController@create_submit');
    Route::get('/edit', 'RegistrarController@edit');
    Route::put('/edit/submit','RegistrarController@edit_submit');
    Route::delete('/delete', 'RegistrarController@delete')->name('registrar.delete');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
