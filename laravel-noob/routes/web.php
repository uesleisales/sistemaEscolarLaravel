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

//Quando digitar 'estoque/categoria' redireicionar para o controlador CategoriaController
Route::resource('estoque/categoria' , 'CategoriaController'); // Precisa ser resource quando faz conexão com bd
