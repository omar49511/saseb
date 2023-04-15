<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Expediente;
use App\Models\Reporte;
use App\Models\User;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index()
    {
        //
        $Numero_alumnos = Alumno::count();
        $Numero_expedientes = Expediente::count();
        $Numero_reportes = Reporte::count();
        $Numero_usuarios = User::count();
        

        return view('admin.dashboard',['No_alumnos'=> $Numero_alumnos, 'No_expedientes'=>$Numero_expedientes, 'No_reportes'=> $Numero_reportes, 'No_usuarios'=> $Numero_usuarios]);
    }

}

