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

Route::get('/profile','Profile@index');

Route::view('/addprofile','addprofile');
Route::post('/addprofile','Profile@addprofile');

Route::view('/updateprofile','updateprofile');
Route::post('/updateprofile','Profile@updateprofile');
