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

Route::get('/landing', function () { return view('landing/index'); });

Route::group(['as' => 'portal::', 'namespace' => 'Portal'], function () {
    /*Route::get('/', function () {
        return view('index');
    })->name('home');*/

    Route::get('/', 'PortalController@index')->name('home');

    /*Route::post('/login', 'SecurityController@login')->name('login');
    Route::get('/logout', 'SecurityController@logout')->name('logout');*/
});

Route::group(['as' => 'backend::', 'namespace' => 'Backend'], function () {
    /*Route::get('/', function () {
        return view('index');
    })->name('home');*/

    Route::get('/profile', 'UsersController@profile')->name('profile');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

