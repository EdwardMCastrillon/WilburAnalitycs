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

Route::get('/', [
    'uses' => 'LogginController@index',
    'as'   => 'auth_show_path',
]);

Route::post('/auth/login', [
    'uses' => 'LogginController@login',
    'as'   => 'auth_login_path',
]);

Route::post('/auth/logout', [
    'uses' => 'LogginController@logout',
    'as'   => 'auth_logout_path',
]);

Route::get('/MenuPrincipal', [
  'uses' => 'HomeController@index',
  'as' => 'show_menu_path',
]);

Route::get('/MenuPrincipal/GestionarPersonal/AsignarPerfil.php', [
  'uses' => 'HomeController@perfilView',
  'as' => 'show_asigperfil_path',
]);


/*
_______________________________________________________________________
|                                                                      |
|             Modulo de Registro de Personal                           |
|______________________________________________________________________|*/

Route::get('/MenuPrincipal/Personal.php', [
  'uses' => 'PersonalController@personal',
  'as' => 'show_personal_path',
]);

Route::post('/MenuPrincipal/GestionarPersonal/Personal/Guardar.php', [
  'uses' => 'PersonalController@guardar',
  'as' => 'save_personal_path',
]);

Route::patch('/MenuPrincipal/GestionarPersonal/Personal/Modificar.php', [
  'uses' => 'PersonalController@update',
  'as' => 'update_personal_path',
]);

Route::get('/MenuPrincipal/personal/{id}', 'PersonalController@show');

Route::get('/MenuPrincipal/GestionarPersonal/Personal/consultar/{id}', [
  'uses' => 'PersonalController@consulta',
  'as' => 'search_personal_path',
]);

Route::get('/MenuPrincipal/GestionarPersonal/Personal/eliminar/{id}', [
  'uses' => 'PersonalController@eliminar',
  'as' => 'delete_personal_path'
]);

Route::get('/MenuPrincipal/GestionarPersonal/Personal/listar', [
  'uses' => 'PersonalController@all',
  'as' => 'list_personal_path',
]);

/*
_______________________________________________________________________
|                                                                      |
|             Modulo de Registro de AsignarPerfil                           |
|______________________________________________________________________|*/

Route::get('/MenuPrincipal/GestionarPersonal/AsignarPerfil/Guardar.php', [
  'uses' => 'AsigPerfilController@create',
  'as' => 'save_asigperfil_path',
]);

Route::patch('/MenuPrincipal/GestionarPersonal/AsignarPerfil/Modificar.php', [
  'uses' => 'AsigPerfilController@update',
  'as' => 'update_asignarperfil_path',
]);

Route::get('/MenuPrincipal/GestionarPersonal/AsignarPerfil/Consultar/{id}', [
  'uses' => 'AsigPerfilController@consulta',
  'as' => 'search_asignarperfil_path',
]);

Route::get('/MenuPrincipal/GestionarPersonal/AsignarPerfil/Eliminar/{id}', [
  'uses' => 'AsigPerfilController@eliminar',
  'as' => 'delete_asignarperfil_path',
]);

Route::get('/MenuPrincipal/GestionarPersonal/AsignarPerfil/Listar', [
  'uses' => 'AsigPerfilController@all',
  'as' => 'list_asignarperfil_path',
]);



/*
_______________________________________________________________________
|                                                                      |
|             Modulo de Gestion de Animales                            |
|______________________________________________________________________|*/
Route::get('/MenuPrincipal/GestionAnimal/animales',function(){
  return view('Animales.DatosAnimal');
});
Route::get('/MenuPrincipal/GestionAnimal/jaulas',function(){
  return view('Animales.AsignarJaula');
});
Route::get('/MenuPrincipal/GestionAnimal/animales/store', 'AnimalesController@store');
Route::get('/MenuPrincipal/GestionAnimal/animales/consultar/{id}', 'AnimalesController@consulta');
Route::get('/MenuPrincipal/GestionAnimal/animales/eliminar/{id}', 'AnimalesController@eliminar');
Route::get('/MenuPrincipal/GestionAnimal/animales/editar/{id}', 'AnimalesController@editar');


Route::get('/MenuPrincipal/GestionAnimal/AsignarJaula/{$id?}', 'AnimalesController@AsignarJaula');
