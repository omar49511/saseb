<?php

namespace App\Http\Controllers;

use App\Models\Expediente;
use App\Models\User;
use Illuminate\Http\Request;

class ExpedienteController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('permission:expediente.index')->only('index');
        $this->middleware('permission:expediente.create')->only(['create','store']);
        $this->middleware('permission:expediente.edit')->only(['edit','update']);
        $this->middleware('permission:expediente.destroy')->only('destroy');
    }
    public function index()
    {
        if(auth()->user()->hasRole('Psicologo')){
            $expediente = Expediente::where('user_id',auth()->user()->id)->get();
            return view('expedientes.index', ['expedientes'=>$expediente]);
        }
        $expediente = Expediente::get();
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
        //
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
        //
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
    }
}
