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

//------------ Admin Routes ----------------------

Route::get('/', 'HomeController@index');
Route::post('/', 'SearchController@postSearch');

Route::get('/search','SearchController@getSearch');
Route::post('/search','SearchController@postSearch');


Route::get('/login','Auth\AuthController@getLogin');
Route::post('/login','Auth\AuthController@postLogin');
Route::get('/logout','Auth\AuthController@getLogout');

Route::get('/asignar/estudiante','AdminController@asignarEstudiante');
Route::post('/asignar/estudiante','AdminController@postAsignarEstudiante');

Route::get('/asignar/cargas','AdminController@asignarCargas');
Route::post('/asignar/cargas','AdminController@postAsignarCargas');

Route::get('/add/{type}','AdminController@newUser');   
Route::post('/add/{type}','AdminController@postStoreUser');
Route::get('/user/{id}/activate','AdminController@activateUser');
Route::get('/user/{id}/edit','AdminController@editUser');
Route::patch('/user/{id}/update','AdminController@updateUser');

Route::get('/asignaturas','AdminController@getAsignatura');
Route::get('/asignatura/{id}', 'AdminController@activateAsignatura');
Route::get('/asignatura/{id}/edit','AdminController@editAsignatura');
Route::patch('/asignatura/{id}/edit','AdminController@postUpdateAsignatura');

Route::get('/nueva/asignatura','AdminController@newAsignatura');   
Route::post('/nueva/asignatura','AdminController@postNewAsignatura');    

// ------------------ Docente Routes ------------------------------

Route::get('/seleccionar/materias','DocenteController@getCursos');

Route::get('/mostrar/estudiantes','DocenteController@postCursos');
Route::post('/mostrar/estudiantes','DocenteController@postCursos');

Route::post('/registrar/notas','DocenteController@postRegistrarNotas');
