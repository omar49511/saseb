@extends('layouts.app')

@section('contenido')

<form method="POST" action="/alumno/{{$alumno->id}}" enctype="multipart/form-data" class="px-4 my-20 max-w-3xl mx-auto space-y-6">
    @method('PATCH')
    @csrf()

    <div class="mb-14 sm:text-center">
        <h1 class="text-3xl font-semibold">Editar Alumnos</h1>
        <p class="text-gray-600">Los cambios realizados seran visibles para otros usuarios</p>
    </div>
    <div class="grid grid-cols-6 gap-6">
        <div class="col-span-6 sm:col-span-3">
            <label for="nombre">Nombre</label>
            <input class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm " type="text" name="nombre" id="nombre" value="{{ $alumno->name }}">
        </div>
        <div class="col-span-6 sm:col-span-3">
            <label for="apellido">Apellido</label>
            <input class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm " type="text" name="apellido" id="apellido" value="{{ $alumno->lastname}}">
        </div>
        
        <div class="col-span-6 sm:col-span-2">
            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
            <input class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm " type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="{{ $alumno->birthdate }}">
        </div>
        <div class="col-span-6 sm:col-span-2">
            <label for="genero">Genero</label>
            <select class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm " name="genero" id="genero" value="{{$alumno->gender}}">
                <option value="Masculino"{{ $alumno->gender == "Masculino" ? 'selected' : '' }}>Masculino</option>
                <option value="Femenino" {{ $alumno->gender == "Femenino" ? 'selected' : '' }}>Femenino</option>
            </select>
        </div>
        <div class="col-span-6 sm:col-span-2">
            <label for="lugar_nacimiento">Lugar de nacimiento</label>
            <input class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm " type="text" name="lugar_nacimiento" id="lugar_nacimiento" value="{{ $alumno->birthplace }}">
        </div>
        <div class="col-span-6 sm:col-span-6">
            <label for="domicilio">Domicilio</label>
            <input class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm " type="text" name="domicilio" id="domicilio" value="{{ $alumno->domicile}}">
        </div>
        
        <div class="col-span-6 sm:col-span-3">
            <label for="telefono_casa">Telefono de casa</label>
            <input class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm " type="text" name="telefono_casa" id="telefono_casa" value="{{ $alumno->home_phone }}">
        </div>

        <div class="col-span-6 sm:col-span-3">
            <label for="telefono_celular">Telefono celular</label>
            <input class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm " type="text" name="telefono_celular" id="telefono_celular" value="{{ $alumno->cell_phone }}">
        </div>

    </div>
    <div class="grid grid-cols-6 gap-6 py-11">
        <div class="col-span-6 sm:col-span-3">
            <button class="w-full border-2 border-blue-500 hover:bg-blue-700 hover:text-white text-blue-500 font-bold py-2 rounded-full" type="submit">Guardar</button>
        </div>
        <div class="col-span-6 sm:col-span-3 grid">
            <a class="text-center col-span-6 border-2 border-red-500 hover:bg-red-700 hover:text-white text-red-500 font-bold py-2  rounded-full" href="{{ route('alumno.index') }}">
                Cancelar
            </a>
        </div>
    </div>
</form>

@stop