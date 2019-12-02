<?php

namespace App\Http\Controllers;

use App\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estudiante = new Estudiante();
        $estudiante->nombre = $request->input('nombre');
        $estudiante->apellido = $request->input('apellido');
        $estudiante->IdCurso = $request->input('curso');
        $estudiante->carrera = $request->input('carrera');
        $estudiante->save();
    }

    public function buscarVer(Request $request)
    {
        $estudiantes = Estudiante::name($request->get('name'))->paginate(3);
        return view('viewEstudianteVer',compact('estudiantes'));
    }

    public function buscarEditar(Request $request)
    {
        $estudiantes = Estudiante::name($request->get('name'))->paginate(3);
        return view('viewEstudianteEditar',compact('estudiantes'));
    }

    public function buscarEliminar(Request $request)
    {
        $estudiantes = Estudiante::name($request->get('name'))->paginate(3);
        return view('viewEstudianteEliminar',compact('estudiantes'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiante $estudiante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudiante $estudiante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $unestudiante = Estudiante::find($id);
        $unestudiante->fill($request->all());
        $unestudiante->save();
        return redirect()->action('InicioController@vistaEstudianteEditar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unestudiante = Estudiante::find($id);
        $unestudiante->delete();
        return redirect()->action('InicioController@vistaEstudianteEliminar');
    }
}
