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


//Olá => 'Olá !' GET

//ola/<nome> => 'Olá <nome>' GET
Route::get('/ola/{nome}', 'OlaController@ola');