<?php

namespace App\Http\Controllers;

use App\Proyecto;
use Illuminate\Http\Request;
use App\Http\Requests\ProyectoRequestRule;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Proyecto::all();
        return view('proyecto.index')->with('proyectos', $proyectos);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proyecto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$validated = $request->validated();

        $proyecto = new Proyecto();
        $proyecto->id = uniqid();
        $proyecto->nombre = $request->nombre;
        $proyecto->descripcion = $request->descripcion;
        $proyecto->grupoId = '0';
        $proyecto->usuarioId = '0';
        $proyecto->fechaInicio = $request->fechaInicio;
        $proyecto->fechaVencimiento = $request->fechaVencimiento;
        $proyecto->vigente = '1';
        $proyecto->fechaSistema = date('Y-m-d');
        $proyecto->save();


        //var_dump($request);
        return;
        //echo 'ok creado!!';
        //return view('proyecto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function show(Proyecto $proyecto)
    {
        return view('proyecto.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function edit(Proyecto $proyecto)
    {
        return view('proyecto.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proyecto $proyecto)
    {
        return view('proyecto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proyecto $proyecto)
    {
        return view('proyecto.index');
    }
}
