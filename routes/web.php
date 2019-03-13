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
Route::resource('/users', 'Admin\UserController');
Route::get('carrito', 'CarritoController@index');
Route::get('carritoproducto', 'CarritoproductoController@index');
Route::get('categoria', 'CategoriaController@index');
Route::get('deseable', 'DeseableController@index');
Route::get('direccion', 'DireccionController@index');
Route::get('productocategoria', 'ProductoCategoriaController@index');
Route::get('producto', 'ProductoController@index');






