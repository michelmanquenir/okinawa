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
    return view('index');
});
Route::get('/galeria', function () { 
    return view('galeria');
});
Route::get('/servicios', function () {
    return view('servicios');
});
Route::get('/contacto', function () {
    return view('contacto');
});
Route::get('/quienes-somos', function () {
    return view('quienes-somos');
});



//Libros
//index Libros
Route::get('/alumnos', 'AlumnosController@index');
//Create Libros
Route::get('/alumnos/create', 'AlumnosController@create')->name('alumnos.create');
//Store Libros
Route::post('/alumnos', 'AlumnosController@store');
//Editar Libros
Route::get('/alumnos/{alumno}/editar', 'AlumnosController@edit')->name('alumnos.edit');
//Update Libros
Route::put('/alumnos/{alumno}', 'AlumnosController@update');
//Destroy Libros
Route::delete('/alumnos/{alumno}', 'AlumnosController@destroy')->name('alumnos.destroy');