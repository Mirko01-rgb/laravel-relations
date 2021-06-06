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

Route::get('home', 'TestController@home')
     ->name('home');

Route::get('/pilot/{id}', 'TestController@pilot')
    -> name('pilot');

Route::get('/create', 'TestController@create')
    -> name('create');

Route::post('/store/car', 'TestController@storeCar')                             //Post, non get
      -> name('store');
