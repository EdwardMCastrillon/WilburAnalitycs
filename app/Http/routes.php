<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('loggin');
});

Route::post('loggin', 'LogginController@index');
Route::get('MenuPrincipal/personal', 'PersonalController@personal');
Route::get('/MenuPrincipal/GestionarPersonal/Personal/guardar', 'PersonalController@guardar');
Route::get('/MenuPrincipal/personal/{id}', 'PersonalController@show');
Route::get('/MenuPrincipal/GestionarPersonal/Personal/consultar/{id}', 'PersonalController@consulta');
Route::get('/MenuPrincipal/GestionarPersonal/Personal/eliminar/{id}', 'PersonalController@eliminar');
Route::get('/MenuPrincipal/GestionarPersonal/Personal/listar', 'PersonalController@all');



/*
_______________________________________________________________________
|                                                                      |
|             Modulo de Gestion de Animales                            |
|______________________________________________________________________|*/
Route::get('/gestionAnimal/animales',function(){
  return view('Animales.DatosAnimal');
});
Route::get('/gestionAnimal/jaulas',function(){
  return view('Animales.AsignarJaula');
});
Route::get('/gestionAnimal/animales/store', 'AnimalesController@store');
Route::get('/gestionAnimal/animales/consultar/{id}', 'AnimalesController@consulta');
Route::get('/gestionAnimal/animales/eliminar/{id}', 'AnimalesController@eliminar');
Route::get('/gestionAnimal/animales/editar/{id}', 'AnimalesController@editar');


Route::get('/gestionAnimal/AsignarJaula/{$id?}', 'AnimalesController@AsignarJaula');
