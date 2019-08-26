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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/trains', 'TrainController');
Route::get('/read', 'TrainController@index');
Route::get('/tambah', 'TrainController@create')->name('tambah');
Route::get('/edit/{id}', 'TrainController@edit')->name('edit');
Route::post('/trains/submit/{id}', 'TrainController@update')->name('update');
Route::get('/delete/{id}', 'TrainController@destroy')->name('hapus');

Route::get('/index', 'TrainController@indextwo');

