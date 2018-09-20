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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('generos', 'generoController');

Route::resource('tipoInmuebles', 'TipoInmuebleController');

Route::resource('inmuebles', 'InmuebleController');

Route::resource('tipoArticulos', 'TipoArticuloController');

Route::resource('peliculas', 'PeliculasController');


Route::resource('espacios', 'espacioController');
Route::resource('articulos', 'ArticulosController');