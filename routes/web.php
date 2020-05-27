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

Route::get('/', 'HomeController@index');
Route::post('/', 'HomeController@postindex');

Route::get('nguoi-mua', function (){
    return view('hello');
});

Route::get('nguoi-ban', function (){
    return view('ciao');
});
Route::post('/admin','AdminController@index');

Route::get('/admin','AdminController@all_saler');

Route::post('/wait','WaiController@index');
