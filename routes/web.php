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
//Route::get('/ingresar', 'InicioController@index');
//Route::resource('/user','InicioController@index');
Route::resource('/Docente', 'DocenteController');
//vistas de tabla Estudiante
Route::get('/EstudianteCreate', 'InicioController@vistaEstudianteCreate');
Route::get('/EstudianteVer', 'InicioController@vistaEstudianteVer');
Route::get('/EstudianteEditar', 'InicioController@vistaEstudianteEditar');
Route::get('/EstudianteEliminar', 'InicioController@vistaEstudianteEliminar');
//Controladores generales de los modelos
Route::resource('/Estudiante', 'EstudianteController');
Route::resource('/Curso', 'CursoController');
Route::resource('/Materia', 'MateriaController');
Route::resource('/Plan_Curricular', 'PlanCurricularController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//rutas adicionales de controlador docente
Route::get('/rutaBuscarVer', 'DocenteController@buscarVer');
Route::get('/rutaBuscarEditar', 'DocenteController@buscarEditar');
Route::get('/rutaBuscarEliminar', 'DocenteController@buscarEliminar');
//rutas adicionales de controlador estudiante
Route::get('/rutaEstudianteBuscarVer', 'EstudianteController@buscarVer');
Route::get('/rutaEstudianteBuscarEditar', 'EstudianteController@buscarEditar');
Route::get('/rutaEstudianteBuscarEliminar', 'EstudianteController@buscarEliminar');
//vistas de tabla Materia
Route::get('/MateriaCreate', 'InicioController@vistaMateriaCreate');
Route::get('/MateriaVer', 'InicioController@vistaMateriaVer');
Route::get('/MateriaEditar', 'InicioController@vistaMateriaEditar');
Route::get('/MateriaEliminar', 'InicioController@vistaMateriaEliminar');
//rutas adicionales de controlador materia
Route::get('/rutaMateriaBuscarVer', 'MateriaController@buscarVer');
Route::get('/rutaMateriaBuscarEditar', 'MateriaController@buscarEditar');
Route::get('/rutaMateriaBuscarEliminar', 'MateriaController@buscarEliminar');
//vistas de tabla Curso
Route::get('/CursoCreate', 'InicioController@vistaCursoCreate');
Route::get('/CursoVer', 'InicioController@vistaCursoVer');
Route::get('/CursoEditar', 'InicioController@vistaCursoEditar');
Route::get('/CursoEliminar', 'InicioController@vistaCursoEliminar');
//rutas adicionales de controlador curso
Route::get('/rutaCursoBuscarVer', 'CursoController@buscarVer');
Route::get('/rutaCursoBuscarEditar', 'CursoController@buscarEditar');
Route::get('/rutaCursoBuscarEliminar', 'CursoController@buscarEliminar');
//Reportes
Route::get('DocenteReporte', 'DocenteController@reporte');
//rutas de admin
Route::resource('/AdminUsuario', 'UserController');
