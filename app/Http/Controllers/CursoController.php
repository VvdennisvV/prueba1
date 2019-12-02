<?php

namespace App\Http\Controllers;

use App\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
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
        $curso = new Curso();
        $curso->nombre = $request->input('nombre');
        $curso->aula = $request->input('aula');
        $curso->save();
    }

    public function buscarVer(Request $request)
    {
        $cursos = Curso::name($request->get('name'))->paginate(3);
        return view('viewCursoVer',compact('cursos'));
    }

    public function buscarEditar(Request $request)
    {
        $cursos = Curso::name($request->get('name'))->paginate(3);
        return view('viewCursoEditar',compact('cursos'));
    }

    public function buscarEliminar(Request $request)
    {
        $cursos = Curso::name($request->get('name'))->paginate(3);
        return view('viewCursoEliminar',compact('cursos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $curso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $uncurso = Curso::find($id);
        $uncurso->fill($request->all());
        $uncurso->save();
        return redirect()->action('InicioController@vistaCursoEditar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $uncurso = Curso::find($id);
        $uncurso->delete();
        return redirect()->action('InicioController@vistaCursoEliminar');
    }
}
