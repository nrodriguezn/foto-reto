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

Route::get('/home', 'HomeController@index');

//Route::resource('/noticias', 'Noticias'); //adquiere los metodos del controlador y los convierte en rutas

Route::resource('/photochallenge', 'photochallengeController');
Route::resource('/user', 'userController');
Route::resource('/photo', 'photoController');
Route::resource('/direction', 'directionController');
Route::resource('/contract', 'contractController');
