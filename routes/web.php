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

Route::group(
    ['prefix' => 'client'],

    function() {
        Route::any('/', 'SPAController@index');
        Route::any('/{param1}', 'SPAController@index');
        Route::any('/{param1}/{param2}', 'SPAController@index');
        Route::any('/{param1}/{param2}/{param3}', 'SPAController@index');
});

Route::get('/', function () {
    return view('welcome');
});
