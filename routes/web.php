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
Route::get('/', 'InicioController@index');
Route::get('/DocenteCreate', 'InicioController@vistaDocenteCreate');
Route::get('/DocenteVer', 'InicioController@vistaDocenteVer');
Route::get('/DocenteEditar', 'InicioController@vistaDocenteEditar');
Route::get('/DocenteEliminar', 'InicioController@vistaDocenteEliminar');
//Route::resource('/user','InicioController@index');
Route::resource('Docente', 'DocenteController');
Route::resource('/Estudiante', 'EstudianteController');
Route::resource('/Curso', 'CursoController');
Route::resource('/Materia', 'MateriaController');
Route::resource('/Plan_Curricular', 'PlanCurricularController');