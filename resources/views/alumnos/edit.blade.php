@extends('layouts.app')

@section('contenido')
{{-- https://www.creative-tim.com/learning-lab/tailwind-starter-kit/documentation/javascript/alerts --}}
{{-- https://laravel.com/docs/9.x/validation#quick-writing-the-validation-logic --}}

@include('alumnos._validation')

<form method="POST" action="/alumno/{{$alumno->id}}" enctype="multipart/form-data" class="px-4 my-20 max-w-3xl mx-auto space-y-6">
    @method('PATCH')
    @csrf()

    <div class="mb-14 sm:text-center">
        <h1 class="text-3xl font-semibold">Editar Alumnos</h1>
        <p class="text-gray-600">Los cambios realizados seran visibles para otros usuarios</p>
    </div>

    @include('alumnos._form')

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

