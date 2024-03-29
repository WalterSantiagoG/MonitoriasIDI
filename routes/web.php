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

Route::get('monitores', 'MonitorController@index')->name('monitores.index');
Route::resource('monitors', 'MonitorController');
Route::post('listarmonitorias', 'MonitoriaController@listarmonitorias');
Route::get('monitors/{id}/destroy',[
	'uses' => 'MonitorController@destroy',
	'as'   => 'monitors.destroy'
]);
Route::resource('monitorias', 'MonitoriaController');
