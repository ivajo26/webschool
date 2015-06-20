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
Route::get('/', 'HomeController@index');

Route::get('/login','Auth\AuthController@getLogin');
Route::post('/login','Auth\AuthController@postLogin');
Route::get('/logout','Auth\AuthController@getLogout');

Route::get('/asignar/estudiante','AdminController@asignarEstudiante');
Route::post('/asignar/estudiante','AdminController@postAsignarEstudiante');

Route::get('/asignar/cargas','AdminController@asignarCargas');
Route::post('/asignar/cargas','AdminController@postAsignarCargas');

Route::get('/add/{type}','AdminController@newUser');   
Route::post('/add/{type}','AdminController@postStoreUser');

Route::get('/nueva/asignatura','AdminController@newAsignatura');   
Route::post('/nueva/asignatura','AdminController@postNewAsignatura');    


Route::get('/registrar_notas/','DocenteController@getCursos');