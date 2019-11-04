<?php

namespace App\Http\Controllers;

use App\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$docentes = Docente::all();
        return view('prueba', compact('docentes'));*/
        //return view('viewDocenteEditar', compact('docentes'));
    }    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $docente = new Docente();
        $docente->nombre = $request->input('nombre');
        $docente->apellido = $request->input('apellido');
        $docente->profesion = $request->input('profesion');
        $docente->direccion = $request->input('direccion');
        $docente->celular = $request->input('celular');
        $docente->save();
        return 'Guardado';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function show(Docente $docente)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function edit(Docente $docente)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
           /* $docente->nombre = $request->input('nombre');
            $docente->apellido = $request->input('apellido');
            $docente->profesion = $request->input('profesion');
            $docente->direccion = $request->input('direccion');
            $docente->celular = $request->input('celular');
            $docente->fill($request->all());
            $docente->save();*/
            $undocente = Docente::find($id);
            $undocente->fill($request->all());
            $undocente->save();
            return 'Saved';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $undocente = Docente::find($id);
        $undocente->delete();
        
        $docentes = Docente::all();
        return view('viewDocenteEliminar', compact('docentes'));
    }
}
