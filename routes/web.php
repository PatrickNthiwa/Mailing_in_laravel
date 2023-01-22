<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('pages.home.index');
    });
    Route::resource('/users', '\App\Http\Controllers\UsersController');
    Route::get('/my-profile', '\App\Http\Controllers\UsersController@getProfile');
    Route::get('/my-profile/edit', '\App\Http\Controllers\UsersController@getEditProfile');
    Route::patch('/my-profile/edit', '\App\Http\Controllers\UsersController@postEditProfile');

    Route::get('/forbidden', function () {
        return view('pages.forbidden.forbidden_area');
    });
});

Route::get('/', function () {
    return redirect()->to('/admin');
});
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
