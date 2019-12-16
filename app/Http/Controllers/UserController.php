<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = DB::table('Users')->get();
        return view('admin.vistaAdminUsuario',compact('usuarios'));
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
        $unUsuario = User::find($id);
        $unUsuario->name = $request->input('nombre'); 
        $unUsuario->apellPaterno = $request->input('apellidoPaterno'); 
        $unUsuario->apellMaterno = $request->input('apellidoMaterno'); 
        $unUsuario->ci = $request->input('carnetIdentidad'); 
        $unUsuario->privilegio = $request->input('privilegio'); 
        $unUsuario->email = $request->input('email'); 
        $unUsuario->observacion = $request->input('observacion'); 
        $unUsuario->save();
        
        $usuarios = DB::table('Users')->get();
        return view('admin.vistaAdminUsuario',compact('usuarios'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unUsuario = User::find($id);
        $unUsuario->delete();
        
        $usuarios = DB::table('Users')->get();
        return view('viewDocenteEliminar', compact('docentes'));//

    }
}
