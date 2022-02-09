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
Route::get('/strava', function () {
    return view('strava');
});
Route::get('/adminlte', function () {
    return view('adminlte');
});
Route::get('/first_page', 'App\Http\Controllers\HomeController@first_page')->name('home.first_page');
Route::get('/second_page', 'App\Http\Controllers\HomeController@second_page')->name('home.second_page');
Route::get('/testjson', 'App\Http\Controllers\HomeController@testjson')->name('home.testjson');