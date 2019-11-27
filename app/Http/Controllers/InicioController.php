<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Docente;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inicio()
    {
        return view('prueba');//
    }


    public function index()
    {
        return view('ingresar');//
    }

    public function vistaDocenteCreate(Request $request)
    {
        $request->user()->authorizeRoles('admin');
        return view('viewDocenteCreate');//
    }

    public function vistaDocenteVer()
    {
      //  $docentes = Docente::all();

        $docentes = DB::table('Docente')->paginate(3);

        //return view('user.index', ['users' => $users]);

        return view('viewDocenteVer', compact('docentes'));
    }

    public function vistaDocenteEditar()
    {
        //$docentes = Docente::all();
        $docentes = DB::table('Docente')->paginate(3);
        return view('viewDocenteEditar', compact('docentes'));
    }
    public function vistaDocenteEliminar()
    {
        //$docentes = Docente::all();
        $docentes = DB::table('Docente')->paginate(3);
        return view('viewDocenteEliminar', compact('docentes'));//
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
