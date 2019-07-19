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

Route::resource('/proyectos', 'ProyectosController');

Route::get('proyectos/{id}/destroy', 'ProyectosController@destroy')->name('proyectos.destroy'); //ruta para eliminar producto


// Route::get('proyectos/create', 'ProyectosController@create')->name('proyectos.create');



