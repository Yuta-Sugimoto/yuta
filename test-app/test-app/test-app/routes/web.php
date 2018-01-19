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

Route::get('/hello', 'HelloController@index');
Route::get('/article', 'Articlecontroller@index');
Route::get('/article/show/{id}', 'Articlecontroller@show');
Route::get('/article/create/', 'Articlecontroller@create');
Route::post('/article/store/', 'Articlecontroller@store');

