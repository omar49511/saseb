@extends('layouts.app')

@section('contenido')

<form method="POST" action="/alumno" enctype="multipart/form-data" class="px-4 my-20 max-w-3xl mx-auto space-y-6">

    {{ csrf_field() }}

    <div class="mb-14 sm:text-center">
        <h1 class="text-3xl font-semibold">Registrar Alumnos</h1>
        <p class="text-gray-600">Los cambios realizados seran visibles para otros usuarios</p>
    </div>
    <div class="grid grid-cols-6 gap-6">
        <div class="col-span-6 sm:col-span-3">
            <label for="nombre">Nombre</label>
            <input class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm " type="text" name="nombre" id="nombre" value="{{old('nombre')}}">
        </div>
        <div class="col-span-6 sm:col-span-3">
            <label for="apellido">Apellido</label>
            <input class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm " type="text" name="apellido" id="apellido" value="{{old('apellido')}}">
        </div>
        
        <div class="col-span-6 sm:col-span-2">
            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
            <input class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm " type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="{{old('fecha_nacimiento')}}">
        </div>
        <div class="col-span-6 sm:col-span-2">
            <label for="genero">Genero</label>
            <select class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm " name="genero" id="genero" value="{{old('genero')}}">
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
            </select>
        </div>
        <div class="col-span-6 sm:col-span-2">
            <label for="lugar_nacimiento">Lugar de nacimiento</label>
            <input class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm " type="text" name="lugar_nacimiento" id="lugar_nacimiento" value="{{old('lugar_nacimiento')}}">
        </div>
        <div class="col-span-6 sm:col-span-6">
            <label for="domicilio">Domicilio</label>
            <input class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm " type="text" name="domicilio" id="domicilio" value="{{old('domicilio')}}">
        </div>
        
        <div class="col-span-6 sm:col-span-3">
            <label for="telefono_casa">Telefono de casa</label>
            <input class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm " type="text" name="telefono_casa" id="telefono_casa" value="{{old('telefono_casa')}}">
        </div>

        <div class="col-span-6 sm:col-span-3">
            <label for="telefono_celular">Telefono celular</label>
            <input class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm " type="text" name="telefono_celular" id="telefono_celular" value="{{old('telefono_celular')}}">
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
