<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::view('login','login');
Route::post('login','Login@index');



Route::group(['middleware' => ['CustomAuth']], function () {
    Route::get('/profile', function () {
        return view('profile');
    });

    Route::get('/logout','Login@logout');
});
