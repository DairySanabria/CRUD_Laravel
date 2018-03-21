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

Route::middleware('auth')->group(function() {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/alumnos', 'AlumnoController@index');
    
    Route::get('/profesor', 'ProfesorController@index');
    
    Route::get('/notas', 'NotaController@index');
    
    Route::get('/ojos', 'AuditorController@index');

    Route::get('/formulario/alumnos', 'AlumnoController@create');

    Route::get('/formulario/profesores', 'ProfesorController@create');

    Route::post('/formulario/alumno', 'AlumnoController@store');

    Route::post('/formulario/profesores', 'ProfesorController@store');
    
});

