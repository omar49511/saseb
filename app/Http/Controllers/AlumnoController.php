<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $alumnos = Alumno::orderBy('id','desc')->get();
        return view('alumnos.index',['alumnos'=> $alumnos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $alumno = new Alumno();
        return view('alumnos.create',['alumno'=>$alumno]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'fecha_nacimiento' => 'required',
            'genero' => 'required',
            'lugar_nacimiento' => 'required',
            'domicilio' => 'required',
            'telefono_casa' => 'required',
            'telefono_celular' => 'required'
        ]);
        //
        $alumno = new Alumno;

        $alumno->name = $request->nombre;
        $alumno->lastname=$request->apellido;
        $alumno->birthdate=$request->fecha_nacimiento;
        $alumno->gender=$request->genero;
        $alumno->birthplace=$request->lugar_nacimiento;
        $alumno->domicile=$request->domicilio;
        $alumno->home_phone=$request->telefono_casa;
        $alumno->cell_phone=$request->telefono_celular;
        
        $alumno->save();

        return redirect('/alumno');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno)
    {
        //
        return view('alumnos.edit',['alumno'=> $alumno]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        //

        $request->validate([
            'nombre' => 'required',
            'fecha_nacimiento' => 'required',
            'genero' => 'required',
            'lugar_nacimiento' => 'required',
            'domicilio' => 'required',
            'telefono_casa' => 'required',
            'telefono_celular' => 'required'
        ]);

        $alumno->name = $request->nombre;
        $alumno->lastname=$request->apellido;
        $alumno->birthdate=$request->fecha_nacimiento;
        $alumno->gender=$request->genero;
        $alumno->birthplace=$request->lugar_nacimiento;
        $alumno->domicile=$request->domicilio;
        $alumno->home_phone=$request->telefono_casa;
        $alumno->cell_phone=$request->telefono_celular;
        
        $alumno->save();
        return redirect('/alumno');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        //
        $alumno->delete();
        return redirect('/alumno')->with('eliminar', 'ok');
    }
}
