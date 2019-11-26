<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


use App\Docente;

use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //prueba de Json
        /*
        $docentesJSON = Docente::orderBy('id', 'ASC')->get();
        $response = [
            'status' => true,
            'response' => $docentesJSON,

        ];
        return response()->json($response);
        */
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
        return redirect()->action('InicioController@inicio');
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
            return redirect()->action('InicioController@vistaDocenteEditar');
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
        
        //$docentes = Docente::all();
        //$docentes = DB::table('Docente')->paginate(3);
        return redirect()->action('InicioController@vistaDocenteEliminar');
    }

    public function buscarVer(Request $request)
    {
        $docentes = Docente::name($request->get('name'))->paginate(3);
        return view('viewDocenteVer',compact('docentes'));
    }

    public function buscarEditar(Request $request)
    {
        $docentes = Docente::name($request->get('name'))->paginate(3);
        return view('viewDocenteEditar',compact('docentes'));
    }

    public function buscarEliminar(Request $request)
    {
        $docentes = Docente::name($request->get('name'))->paginate(3);
        return view('viewDocenteEliminar',compact('docentes'));
    }

    public function reporte()
    {
        $listaDocentes = Docente::All();
        $cantDocentes = Docente::count();
        $viewDatos = \View::make('viewReporte',compact('listaDocentes','cantDocentes'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($viewDatos);
        return $pdf->stream();
    }

}
