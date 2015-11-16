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

Route::post('/loggin', 'LogginController@index');
Route::get('MenuPrincipal/personal', 'PersonalController@personal');
Route::get('guardarUsuario', 'PersonalController@guardar');
Route::get('/MenuPrincipal/personal/{id}', 'PersonalController@show');











































//Terminan Rutas Ivan
