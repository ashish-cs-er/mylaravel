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


Route::view('noaccess', 'noaccess');

//for group middleware
/*
Route::group(['middleware'=>['customAuth']], function(){
    Route::get('/', function () {
        return view('welcome');
    });

    Route::view('profile', 'profile');
});
*/


//route middleware is limited to specific route only
Route::view('profile', 'profile')->middleware('customRouteAuth');
