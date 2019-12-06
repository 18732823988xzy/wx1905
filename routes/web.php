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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login','User\LoginController@');
Route::prefix('login')->group(function () {
    //品牌
    Route::get('create', 'User\LoginController@create');
    Route::post('store', 'User\LoginController@store');
});