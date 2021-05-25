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

Route::view('/coches', 'mostrarCoches');

Route::resource('coche', 'CocheController');
Route::resource('marca', 'MarcaController');
Route::resource('usuario', 'userController');
Route::post('/validar', 'userController@validar')->name('user.validar');
Route::get('/ordenar', 'CocheController@ordenar')->name('coche.ordenar');
Route::get('/marcas', 'CocheController@marcas')->name('coche.marcas');
Route::view('/iniciarSesion', 'InicioSesionRegistro/InicioSesion')->name('IniciarSesion');
