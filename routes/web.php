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

//Route::get('/','HomeController@index');

//Route::get('login', 'CatalogoController@Login');
//
//Route::get('logout', 'CatalogoController@Logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('catalogo','CatalogoController@Index')->middleware('auth');

Route::get('catalogo/show/{id?}','CatalogoController@Show')->where('id', '[0-9]+')->middleware('auth');

Route::get('catalogo/create','CatalogoController@Create')->middleware('auth');

Route::get('catalogo/edit/{id?}','CatalogoController@Edit')->where('id', '[0-9]+')->middleware('auth');//condicion para que solo se ingresen numeros

Auth::routes();

Route::get('catalogo/save', 'CatalogoController@Save')->middleware('auth');

Route::get('catalogo/update/{id}', 'CatalogoController@Update')->middleware('auth');

Route::get('catalogo/rent/{id}', 'CatalogoController@Rent')->middleware('auth');

Route::get('catalogo/return/{id}', 'CatalogoController@Return')->middleware('auth');

Route::get('catalogo/delete/{id}', 'CatalogoController@Delete')->middleware('auth');




?>
