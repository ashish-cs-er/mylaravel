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

Route::get('/profile', function () {
    if(!session()->has('user')){
        return redirect('login');
    }
    return view('profile');
});

Route::view('login','login');

Route::post('login','Login@index');

Route::get('logout','Login@logout');
