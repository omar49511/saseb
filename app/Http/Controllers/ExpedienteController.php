<?php

namespace App\Http\Controllers;

use App\Models\Expediente;
use App\Models\User;
use Illuminate\Http\Request;

class ExpedienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $expediente = Expediente::orderBy('id')->get();
        return view('expedientes.index', ['expedientes'=>$expediente]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('expedientes.create');
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
        $request->validate([
            'user_id' => 'required',
            'motivoConsulta' => 'required',
            'descripcionPaciente' => 'required',
            'alumno_id' => 'required'
        ]);

        $expediente = new Expediente();
        $expediente->alumno_id = $request->alumno_id;
        $expediente->user_id = $request->user_id;
        $expediente->motivo_consulta = $request->motivoConsulta;
        $expediente->descripcion = $request->descripcionPaciente;

        $expediente->save();
        return redirect(route('expediente.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expediente  $expediente
     * @return \Illuminate\Http\Response
     */
    public function show(Expediente $expediente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Expediente  $expediente
     * @return \Illuminate\Http\Response
     */
    public function edit(Expediente $expediente)
    {
        return view('expedientes.edit', ['expediente' => $expediente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expediente  $expediente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expediente $expediente)
    {
        $request->validate([
            'user_id' => 'required',
            'motivoConsulta' => 'required',
            'descripcionPaciente' => 'required',
            'alumno_id' => 'required'
        ]);

        $expediente->alumno_id = $request->alumno_id;
        $expediente->user_id = $request->user_id;
        $expediente->motivo_consulta = $request->motivoConsulta;
        $expediente->descripcion = $request->descripcionPaciente;

        $expediente->save();
        return redirect(route('expediente.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expediente  $expediente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expediente $expediente)
    {
        //
        $expediente->delete();
        return redirect(route('expediente.index'))->with('eliminar', 'ok');
    }
}
