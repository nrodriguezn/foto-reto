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
Route::resource('/user', 'userController'); //primera ruta de usuario ( se usa en nav bar)
Route::get('/panel', 'userController@index');
Route::get('/administrar', 'userController@administrar');
Route::get('/participacion', 'userController@participacion');
Route::get('/datos_usuario', 'userController@datos_usuario');


//RUTAS DE photochallenge
Route::resource('/photochallenge', 'photochallengeController');
Route::get('/fotoreto_iniciar_finalizar', 'photochallengeController@fotoreto_iniciar_finalizar');  //cambiar a finalizar mas adelante
Route::get('/fotoreto_crear', 'photochallengeController@fotoreto_crear');
Route::get('/fotoreto_proceso', 'photochallengeController@fotoreto_proceso');
Route::get('/fotoreto_filtrar', 'photochallengeController@fotoreto_filtrar');
Route::get('/fotoreto_resultados', 'photochallengeController@fotoreto_resultados');
Route::get('/fotoreto_datos_generales', 'photochallengeController@fotoreto_datos_generales');
Route::get('/fotoreto_finalizar/{id}', 'photochallengeController@fotoreto_finalizar');
Route::get('/fotoreto_participar', 'photochallengeController@fotoreto_participar');




//RUTAS DE photo
Route::resource('/photo', 'photoController');
Route::get('/', 'photoController@photochallenge_desktop_show');  //return view('welcome'); -> desde el controlador cargo las fotos
Route::post('/photo_decision', 'photoController@photo_decision')->name('photo.decision');



//RUTAS DE direction
Route::resource('/direction', 'directionController');


//RUTAS DE contract
Route::resource('/contract', 'contractController');
Route::get('/contract_pendientes', 'contractController@contract_pendientes');
Route::get('/contract_in_process', 'contractController@contract_in_process');
Route::get('/contract_terminados', 'contractController@contract_terminados');
Route::get('/contract_datos_generales', 'contractController@contract_datos_generales');


//RUTAS DE contact
Route::get('/contact', 'userController@contact')->name('user.contact');
