<?php

namespace App\Http\Controllers;

use App\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
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
        $materia = new Materia();
        $materia->nombre = $request->input('nombre');
        $materia->profesor = $request->input('docente');
        $materia->curricula = $request->input('curricula');
        $materia->IdCurso = $request->input('curso');
        $materia->save();
    }

    public function buscarVer(Request $request)
    {
        $materias = Materia::name($request->get('name'))->paginate(3);
        return view('viewMateriaVer',compact('materias'));
    }

    public function buscarEditar(Request $request)
    {
        $materias = Materia::name($request->get('name'))->paginate(3);
        return view('viewMateriaEditar',compact('materias'));
    }

    public function buscarEliminar(Request $request)
    {
        $materias = Materia::name($request->get('name'))->paginate(3);
        return view('viewMateriaEliminar',compact('materias'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function show(Materia $materia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function edit(Materia $materia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $unaMateria = Materia::find($id);
        $unaMateria->fill($request->all());
        $unaMateria->save();
        return redirect()->action('InicioController@vistaMateriaEditar');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unaMateria = Materia::find($id);
        $unaMateria->delete();
        return redirect()->action('InicioController@vistaMateriaEliminar');
    }
}
