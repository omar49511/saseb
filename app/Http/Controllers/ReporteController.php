<?php

namespace App\Http\Controllers;

use App\Models\Reporte;
use App\Models\User;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('permission:reporte.index')->only('index');
        $this->middleware('permission:reporte.create')->only(['create','store']);
        $this->middleware('permission:reporte.edit')->only(['edit','update']);
        $this->middleware('permission:reporte.destroy')->only('destroy');
    }
    public function index()
    {
        if(auth()->user()->hasRole('Psicologo')){
             $reporte = Reporte::where('user_id',auth()->user()->id)->get();
             return view('reportes.index', ['reportes'=>$reporte]);
        }
        $reporte = Reporte::get();
        return view('reportes.index', ['reportes'=>$reporte]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reportes.create');
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
            'grupo' => 'required',
            'observaciones' => 'required',
            'actividades' => 'required'
        ]);

        $reporte = new Reporte();
        $reporte->user_id = $request->user_id;
        $reporte->grupo = $request->grupo;
        $reporte->observaciones = $request->observaciones;
        $reporte->actividades= $request->actividades;
        $reporte->firma= $request->firma;

        $reporte->save();
        return redirect(route('reporte.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function show(Reporte $reporte)
    {
        return view('reportes.show', ['reporte'=>$reporte]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function edit(Reporte $reporte)
    {
        return view('reportes.edit', ['reporte' => $reporte]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reporte $reporte)
    {
        //
        $request->validate([
            'grupo' => 'required',
            'observaciones' => 'required',
            'actividades' => 'required'
        ]);

        $reporte->grupo = $request->grupo;
        $reporte->observaciones = $request->observaciones;
        $reporte->actividades= $request->actividades;

        $reporte->save();
        return redirect(route('reporte.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reporte $reporte)
    {
        //
        $reporte->delete();
        return redirect(route('reporte.index'))->with('eliminar', 'ok');
    }

     /**
     * Return the resource as a pdf
     *
     * @param  \App\Models\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function print($reporte){
        // TODO
        $reporte = Reporte::find($reporte);
        return view('reportes.print', ['reporte' => $reporte]);

    }
}
