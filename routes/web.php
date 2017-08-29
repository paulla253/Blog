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
//Route::get('/test','TestController@index');


/*Mandado com o nome*/
Route::get('/test/{nome}','TestController@index');
Route::get('/notas','TestController@notas');

Route::get('/blog','PostsController@index');

/*Atividade que foi Entregada*/
Route::get('/blogEntrega','BlogController@index');
