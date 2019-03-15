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
Route::resource('/carrito', 'Admin\CarritoController');
Route::resource('/carritoproducto', 'Admin\CarritoproductoController');
Route::resource('/category', 'Admin\CategoryController');
Route::resource('/deseable', 'Admin\DeseableController');
Route::resource('/direccion', 'Admin\DirectionController');
Route::resource('/productocategoria', 'Admin\ProductoCategoriaController');
Route::resource('/products', 'Admin\ProductoController')->except(['destroy']);
Route::DELETE('/products/{id}', 'Admin\ProductoController@destroy')->name('product.destroy');








