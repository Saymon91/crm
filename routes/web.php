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

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Auth;
use App\User;

Route::group(['middleware' => 'log'], function () {

    Route::get('/landing', function () { return view('landing/index'); });
    Route::get('/test', function () { return view('layouts/test', ['form' => User::getRegistrationForm()]); });
    Route::post('/register', function () { return view('test'); })->name('portal::register');
    /*
    Route::group(['as' => 'portal::', 'namespace' => 'Portal'], function () {
        Route::get('/', function () {
            return view('index');
        })->name('home');

        Route::get('/', 'PortalController@index')->name('home');
        Route::get('/about', 'PortalController@about')->name('about');
        Route::get('/contacts', 'PortalController@contacts')->name('contacts');
    });

    Route::group(['as' => 'backend::', 'namespace' => 'Backend'], function () {

    })->midleware('auth');

    Route::group(['as' => 'admin::', 'namespace' => 'Admin'], function () {
        Route::get('/profile/{user}', 'UsersController@profile')->name('user-profile');
    })->midleware('role:admin');


    Route::get('/login', 'SecurityController@login')->name('login');
    Route::post('/login', 'SecurityController@auth')->name('auth');
    Route::get('/logout', 'SecurityController@logout')->name('logout');

    Route::get('/profile', 'UsersController@profile')->name('profile')->middleware('auth');
    Route::patch('/profile', 'UsersController@profile')->name('profile')->middleware('auth');

    //Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');
    */
});

