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

Route::get('/', 'PageController@index');
/**********For Product **************/

Route::get('products/create','ProductController@create');
Route::post('products/create','ProductController@store');
Route::get('products','PageController@index');
Route::get('products/{id}/detail','PageController@detail');
Route::get('products/{id}/add','PageController@add');
Route::get('products/clear_cart','PageController@clear_cart');
Route::get('products/all_cart','PageController@all_cart');

