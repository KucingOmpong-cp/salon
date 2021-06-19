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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/services', 'HomeController@services')->name('services');
Route::get('/order', 'HomeController@order')->name('order');
Route::get('/history', 'HomeController@history')->name('history');
Route::get('/user', 'HomeController@user')->name('user');
Route::get('/report', 'HomeController@report')->name('report');
