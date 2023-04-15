@extends('layouts.app')

@section('title')
    Dashboard | Admin
@stop

@section('contenido')
    
    <div class="bg-gray-800">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12 text-center">
            <h1 class="text-3xl sm:text-4xl font-bold text-white mb-2">¡Bienvenido, {{ auth()->user()->name }}!</h1>
            <p class="text-gray-400 text-sm sm:text-base mb-8">Estamos felices de tenerte aquí.</p>
        </div>
    </div>

    <div class="flex flex-wrap justify-center m-10">
        <div class="w-full sm:w-1/2 md:w-1/3 xl:w-3/4 p-2">
            <div class="bg-blue-700 rounded-lg shadow-lg p-5">
                <div class="text-white text-xl font-semibold mb-2">Alumnos</div>
                <div class="text-white text-4xl font-bold">{{$No_alumnos}}</div>
            </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/3 xl:w-3/4 p-2">
            <div class="bg-sky-700 rounded-lg shadow-lg p-5">
                <div class="text-white text-xl font-semibold mb-2">Usuarios</div>
                <div class="text-white text-4xl font-bold">{{$No_usuarios}}</div>
            </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/3 xl:w-3/4 p-2">
            <div class="bg-cyan-700 rounded-lg shadow-lg p-5">
                <div class="text-white text-xl font-semibold mb-2">Expedientes</div>
                <div class="text-white text-4xl font-bold">{{$No_expedientes}}</div>
            </div>
        </div>
        
        <div class="w-full sm:w-1/2 md:w-1/3 xl:w-3/4 p-2">
            <div class="bg-teal-700 rounded-lg shadow-lg p-5">
                <div class="text-white text-xl font-semibold mb-2">Reportes</div>
                <div class="text-white text-4xl font-bold">{{$No_reportes}}</div>
            </div>
        </div>
    </div>

    {{-- <div class="flex flex-wrap">
        <div class="w-full sm:w-1/2 md:w-1/3 xl:w-1/4 p-2">
            <div class="bg-blue-500 rounded-lg shadow-lg p-5">
                <div class="text-white text-xl font-semibold mb-2">Expedientes</div>
                <div class="text-white text-4xl font-bold">120</div>
            </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/3 xl:w-1/4 p-2">
            <div class="bg-green-500 rounded-lg shadow-lg p-5">
                <div class="text-white text-xl font-semibold mb-2">Alumnos</div>
                <div class="text-white text-4xl font-bold">250</div>
            </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/3 xl:w-1/4 p-2">
            <div class="bg-yellow-500 rounded-lg shadow-lg p-5">
                <div class="text-white text-xl font-semibold mb-2">Informes</div>
                <div class="text-white text-4xl font-bold">80</div>
            </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/3 xl:w-1/4 p-2">
            <div class="bg-red-500 rounded-lg shadow-lg p-5">
                <div class="text-white text-xl font-semibold mb-2">Pendientes</div>
                <div class="text-white text-4xl font-bold">10</div>
            </div>
        </div>
    </div> --}}


@stop
