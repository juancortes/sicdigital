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

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/uindex/', [ 'as' => 'users.index', 'uses' => 'UserController@index']);
Route::get('/ucreate/', [ 'as' => 'users.create', 'uses' => 'UserController@create']);
Route::get('/udestroy/', [ 'as' => 'users.destroy', 'uses' => 'UserController@destroy']);
Route::get('/ushow/', [ 'as' => 'users.show', 'uses' => 'UserController@show']);
Route::get('/uedit/', [ 'as' => 'users.edit', 'uses' => 'UserController@edit']);
Route::get('/ustore/', [ 'as' => 'users.store', 'uses' => 'UserController@store']);
Route::post('/uupdate/', [ 'as' => 'users.update', 'uses' => 'UserController@update']);

//personas
Route::get('/pindex/', [ 'as' => 'personas.index', 'uses' => 'PersonaController@index']);
Route::get('/pcreate/', [ 'as' => 'personas.create', 'uses' => 'PersonaController@create']);
Route::get('/pdestroy/', [ 'as' => 'personas.destroy', 'uses' => 'PersonaController@destroy']);
Route::get('/pshow/', [ 'as' => 'personas.show', 'uses' => 'PersonaController@show']);
Route::get('/pedit/', [ 'as' => 'personas.edit', 'uses' => 'PersonaController@edit']);
Route::get('/pstore/', [ 'as' => 'personas.store', 'uses' => 'PersonaController@store']);
Route::post('/pupdate/', [ 'as' => 'personas.update', 'uses' => 'PersonaController@update']);

