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
    return view('startpage');
});

Route::group(['prefix' => 'custmer'], function() {
    Route::get('/', 'MachicomiController@add');
    Route::get('/search', 'MachicomiController@search');
    Route::get('/department', 'MachicomiController@department');
    Route::get('/inquiry', 'MachicomiController@inquiry');
    Route::post('/inquiry', 'MachicomiController@save');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('inquiry', 'Admin\MachiController@index');
    Route::get('test', 'Admin\MachiController@test');
});