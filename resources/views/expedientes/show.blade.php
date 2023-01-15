@extends('layouts.app')

@section('css')
    
@stop

@section('title')
    Expediente | {{$expediente->id}}
@stop

@section('contenido')
<div class="px-4 my-20 max-w-7xl mx-auto space-y-6" >
    <div class="mb-14 sm:text-center">
        <h1 class="text-3xl font-semibold">Expediente del alumno {{$expediente->alumno->name }}</h1>
    </div>
    <div class="grid grid-cols-6 gap-6">
        <div class="col-span-6 sm:col-span-4 ">
            <p  class="py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-[#21434E]">
            <strong>Atendió: </strong> {{$expediente->user->name." ".$expediente->user->surname." ".$expediente->user->secondSurname; }}
            </p>
        </div>
        <div class="col-span-6 sm:col-span-2 ">
            <p  class="py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-[#21434E]">
            <strong>Fecha: </strong> {{$expediente->created_at}}
            </p>
        </div>
    </div>
    <hr class="border-solid border-4 border-gray-200">
    <h2 class="text-xl text-[#21434E] font-semibold">
        Ficha de identificación
    </h2>
    <div class="grid grid-cols-6 gap-6">
        <div class="col-span-6 sm:col-span-2">
            <p class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm">
            <strong>Nombre del alumno: </strong>{{$expediente->alumno->name}}
            </p>
        </div>
        <div class="col-span-6 sm:col-span-2">
            <p class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm">
            <strong>Apellido: </strong>{{$expediente->alumno->lastname}}
            </p>
        </div>
        <div class="col-span-6 sm:col-span-1">
            <p class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm">
            <strong>Edad: </strong>
            @php
                $string_birthdate = $expediente->alumno->birthdate;
                $date_birthdate = strtotime($string_birthdate);
                $birthdate_year = date('Y', $date_birthdate);
                $actual_year = date('Y');
                echo $actual_year - $birthdate_year; 
            @endphp
            &nbsp;años de edad
            </p>
        </div>
        <div class="col-span-6 sm:col-span-1">
            <p class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm">
            <strong >Grupo: </strong>{{$expediente->alumno->group}}
            </p>
        </div>
        <div class="col-span-6 sm:col-span-1">
            <p class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm">
            <strong >Turno: </strong>{{$expediente->alumno->shift}}
            </p>
        </div>
        <div class="col-span-6 sm:col-span-1">
            <p class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm">
            <strong >Sexo: </strong>{{$expediente->alumno->gender}}
            </p>
        </div>
        <div class="col-span-6 sm:col-span-4">
            <p class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm">
            <strong>Lugar de nacimiento: </strong>{{$expediente->alumno->birthplace}}
            </p>
        </div>
        <div class="col-span-6 sm:col-span-3">
            <p class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm">
            <strong>Dirección: </strong>{{$expediente->alumno->domicile}}
            </p>
        </div>
        <div class="col-span-6 sm:col-span-3">
            <p class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm">
            <strong>Tiempo de residencia: </strong>{{$expediente->alumno->time_to_reside}}
            </p>
        </div>
        <div class="col-span-6 sm:col-span-3">
            <p class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm">
            <strong>Teléfono de casa: </strong>{{$expediente->alumno->home_phone}}
            </p>
        </div>
        <div class="col-span-6 sm:col-span-3">
            <p class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm">
            <strong>Teléfono Celular: </strong>{{$expediente->alumno->cell_phone}}
            </p>
        </div>
        <div class="col-span-6 sm:col-span-3">
            <p class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm">
            <strong >Religión: </strong>{{$expediente->alumno->religion}}
            </p>
        </div>
        <div class="col-span-6 sm:col-span-3">
            <p class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm">
            <strong>Ocupación: </strong>{{$expediente->alumno->work}}
            </p>
        </div>
    </div>
    <hr class="border-solid border-4 border-gray-200">
    <h2 class="text-xl text-[#21434E] font-semibold">
        Motivo de consulta
    </h2>
    <div class="grid grid-cols-6 gap-6">
        <div class="col-span-6">
            <label for="">(Quien lo refirio, historia del problema, fecha de aparicion y evolucion, tratamiento
                o terapia psicologica anterior, otros datos relevantes)</label>
            <p
                class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm">
                {{$expediente->motivo_consulta}}
            </p>
        </div>
        <div class="col-span-6">
            <label for="">Descripcion del paciente</label>
            <p
                class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm">
                {{$expediente->descripcion}}
                </p>
        </div>
        <div class="col-span-6 sm:col-span-3">
            <input
                class="w-full border border-blue-500 hover:bg-blue-600 bg-blue-200 hover:text-white text-blue-500 font-bold py-2 rounded"
                type="submit" class="form-control" value="Editar">
        </div>
        <div class="col-span-2 sm:col-span-3">
            <a class="text-center w-full border border-red-500 hover:bg-red-600 bg-red-200 hover:text-white text-red-500 font-bold py-2 rounded"
                type="submit" class="form-control">Borrar</a>
        </div>
        <div class="col-span-1 sm:col-span-3">
            <a class="text-center w-full border border-red-500 hover:bg-red-600 bg-red-200 hover:text-white text-red-500 font-bold py-2 rounded"
                type="submit" class="form-control">Imprimir</a>
        </div>

    </div>
</div>

@stop