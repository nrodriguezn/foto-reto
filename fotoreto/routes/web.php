<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| //Route::resource('/noticias', 'Noticias'); //adquiere los metodos del controlador y los convierte en rutas
*/
/*
Route::get($uri, $callback);
Route::post($uri, $callback);
Route::put($uri, $callback);
Route::patch($uri, $callback);
Route::delete($uri, $callback);
Route::options($uri, $callback);
*/


Auth::routes();


//RUTAS DE home
Route::get('/home', 'HomeController@index');


// RUTAS DE usuario
Route::resource('/user', 'userController');
Route::get('/panel', 'userController@index');
Route::get('/show_user', 'userController@mostrar');


//RUTAS DE photochallenge
Route::resource('/photochallenge', 'photochallengeController');

//RUTAS DE photo
Route::resource('/photo', 'photoController');
Route::get('/', 'photoController@photochallenge_desktop_show');  //return view('welcome'); -> desde el controlador cargo las fotos


//RUTAS DE direction
Route::resource('/direction', 'directionController');


//RUTAS DE contract
Route::resource('/contract', 'contractController');

//RUTAS DE contact
Route::resource('/contact', 'contactController');
