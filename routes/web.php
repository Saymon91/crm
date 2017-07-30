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

Route::group(['as' => 'portal::', 'namespace' => 'Portal'], function () {
    /*Route::get('/', function () {
        return view('index');
    })->name('home');*/

    Route::get('/', 'PortalController@index')->name('home');
});


