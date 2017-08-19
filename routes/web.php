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

/*Mandando para o controler- Primeiro teste*/
Route::get('/teste','TestController@index');


/*Mandado com o nome*/
Route::get('/teste/{nome}','TestController@index');