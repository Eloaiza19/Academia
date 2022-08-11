<?php

namespace App\Http\Controllers;

use App\Models\Docentes;
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
        $docentesitos = Docentes::all();
        return view('docentes.index', compact('docentesitos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->input('nombre');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $docentecitos = new Docentes();
        $docentecitos->nombres = $request->input('nombres');
        $docentecitos->apellidos = $request->input('apellidos');
        $docentecitos->titulo_universitario = $request->input('titulo_universitario');
        $docentecitos->edad = $request->input('edad');
        $docentecitos->feha_contrato = $request->input('fecha_contrato');
        if($request->hasFile('imagen')){
             $docentecitos->imagen1 = $request->file('imagen1')->store('public/docentes');
        }
        if($request->hasFile('imagen')){
            $docentecitos->imagen2 = $request->file('imagen2')->store('public/docentes');
        }
        $docentecitos->save();

        return 'Guardado Exitosamente';
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
