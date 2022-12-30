@extends('layouts.app')

@section('contenido')
<div class='p-6'>
    
</div>

<form action="" class="px-4 my-20 max-w-3xl mx-auto space-y-6">
    <div class="mb-14 sm:text-center">
        <h1 class="text-3xl font-semibold">Editar Usuario</h1>
        <p class="text-gray-600">Los cambios realizados seran visibles para otros usuarios</p>
    </div>
    <div class="grid grid-cols-6 gap-6">
        <div class="col-span-6 sm:col-span-2">
            <label for="nombre">Nombre</label>
            <input class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm " type="text" name="nombre" id="nombre" value="{{ $user->name }}">
        </div>
        <div class="col-span-6 sm:col-span-2">
            <label for="apellido">Apellido paterno</label>
            <input class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm " type="text" name="apellido" id="apellido" value="{{ $user->surname}}">
        </div>
        <div class="col-span-6 sm:col-span-2">
            <label for="apellido2">Apellido materno</label>
            <input class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm " type="text" name="apellido2" id="apellido2" value="{{ $user->secondSurname}}">
        </div>
        <div class="col-span-6 sm:col-span-6">
            <label for="email">Email</label>
            <div class="mt-1 flex rounded-md shadow-sm">
                <span class="mt-1 inline-flex items-center rounded-l-md border-gray-400 bg-blue-500 px-3 text-sm text-white"><i class="fa-sharp fa-solid fa-envelope"></i></span>
                <input class="mt-1 block w-full rounded-r-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm " type="email" name="email" id="email" value="{{ $user->email }}">
            </div>
        </div>
        <div class="col-span-6 sm:col-span-6">
            <label for="telefono">Telefono</label>
            <div class="mt-1 flex rounded-md shadow-sm">
                <span class="mt-1 inline-flex items-center rounded-l-md border-gray-400 bg-blue-500 px-3 text-sm text-white"><i class="fa-solid fa-phone"></i></span>
                <input class="mt-1 block w-full rounded-r-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm " type="text" name="telefono" id="telefono" value="{{ $user->phone }}">
            </div>
        </div>
    </div>
    <div class="grid grid-cols-6 gap-6 py-11">
        <div class="col-span-6 sm:col-span-3">
            <input class="w-full border-2 border-blue-500 hover:bg-blue-700 hover:text-white text-blue-500 font-bold py-2 px-4 rounded-full" type="submit" value="Guardar">
        </div>
        <div class="col-span-6 sm:col-span-3 border-2 border-red-500 hover:bg-red-700 hover:text-white text-red-500 font-bold py-2 px-4 rounded-full text-center">
            <a  class=''href="{{ route('user.index') }}">
                Cancelar 
            </a>
        </div>
    </div>
</form>



@stop