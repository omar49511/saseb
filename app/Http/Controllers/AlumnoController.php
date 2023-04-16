<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\City;
use Illuminate\Http\Request;
use App\Models\State;
use PhpParser\Builder\Class_;

class AlumnoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:alumno.index')->only('index');
        $this->middleware('permission:alumno.create')->only(['create','store']);
        $this->middleware('permission:alumno.edit')->only(['edit','update']);
        $this->middleware('permission:alumno.destroy')->only('destroy');
    }

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

        $city = City::find(1);
        $alumno->city_id = $city->id;

        $states = new State();
        $states = $states->all();

        return view('alumnos.create',['alumno'=>$alumno,'states'=>$states]);
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
			'grupo' => 'required',
			'turno' => 'required',
            'genero' => 'required',
            // 'lugar_nacimiento' => 'required',
			'tiempo_residir' => 'required',
            'domicilio' => 'required',
            'telefono_casa' => 'required',
            'telefono_celular' => 'required',
			'religion' => 'required',
            'ciudades_dropdown'=>'required'
        ]);
        //
        $alumno = new Alumno;

        $alumno->name = $request->nombre;
        $alumno->lastname=$request->apellido;
        $alumno->birthdate=$request->fecha_nacimiento;
		$alumno->group = $request->grupo;
		$alumno->shift = $request->turno;
        $alumno->gender=$request->genero;
        // $alumno->birthplace=$request->lugar_nacimiento;
		$alumno->time_to_reside = $request->tiempo_residir;
        $alumno->domicile=$request->domicilio;
        $alumno->home_phone=$request->telefono_casa;
        $alumno->cell_phone=$request->telefono_celular;
		$alumno->religion=$request->religion;
		$alumno->work=$request->trabajo;
        $alumno->city_id = $request->ciudades_dropdown;
        
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
        // TODO: crear un nuevo metodo para regresar el alumno como json
    }

    public function get_alumn_json(Alumno $alumno){
        $alumno_array = $alumno->toArray();
        $city_array = $alumno->city->toArray();
        $alumno_array["city"] = $city_array;
        $state_array = $alumno->city->state->toArray();
        $alumno_array["city"]["state"] = $state_array;
        unset($alumno_array["city"]["state_id"]);
        unset($alumno_array["city_id"]);

        return response(json_encode($alumno_array),200)->header('Content-type','text/plain');
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
        $states = new State();
        $states = $states->all();
        return view('alumnos.edit',['alumno'=> $alumno, 'states'=>$states]);
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
			'grupo' => 'required',
			'turno' => 'required',
            'genero' => 'required',
            // 'lugar_nacimiento' => 'required',
			'tiempo_residir' => 'required',
            'domicilio' => 'required',
            'telefono_casa' => 'required',
            'telefono_celular' => 'required',
			'religion' => 'required',
        ]);

        $alumno->name = $request->nombre;
        $alumno->lastname=$request->apellido;
        $alumno->birthdate=$request->fecha_nacimiento;
		$alumno->group = $request->grupo;
		$alumno->shift = $request->turno;
        $alumno->gender=$request->genero;
        // $alumno->birthplace=$request->lugar_nacimiento;
		$alumno->time_to_reside = $request->tiempo_residir;
        $alumno->domicile=$request->domicilio;
        $alumno->home_phone=$request->telefono_casa;
        $alumno->cell_phone=$request->telefono_celular;
		$alumno->religion=$request->religion;
		$alumno->work=$request->trabajo;
        
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
