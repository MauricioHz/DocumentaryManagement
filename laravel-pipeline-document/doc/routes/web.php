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

Route::get('/home', 'HomeController@index')->name('home');

// Proyecto
Route::get('/proyectos', 'ProyectoController@index')->name('proyectos');
Route::get('/crear-nuevo-proyecto', 'ProyectoController@create')->name('proyecto.create');
Route::post('/store-proyecto', 'ProyectoController@store')->name('proyecto.store');

