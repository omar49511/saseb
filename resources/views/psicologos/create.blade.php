@extends('layouts.app')

@section('contenido')

<form method="POST" action="/user" class="px-4 my-20 max-w-3xl mx-auto space-y-6">
    {{ csrf_field() }}
    <div class="mb-14 sm:text-center">
        <h1 class="text-3xl font-semibold">Registrar Usuario</h1>
        <p class="text-gray-600">Los cambios realizados seran visibles para otros usuarios</p>
    </div>
    <div class="grid grid-cols-6 gap-6">
        <div class="col-span-6 sm:col-span-2">
            <label for="nombre">Nombre</label>
            <input class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm " type="text" name="nombre" id="nombre" value="{{old('nombre')}}" required>
        </div>
        <div class="col-span-6 sm:col-span-2">
            <label for="apellido">Apellido paterno</label>
            <input class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm " type="text" name="apellido" id="apellido" value="{{old('apellido')}}" required>
        </div>
        <div class="col-span-6 sm:col-span-2">
            <label for="apellido2">Apellido materno</label>
            <input class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm " type="text" name="apellido2" id="apellido2" value="{{old('apellido2')}}">
        </div>
        <div class="col-span-6 sm:col-span-6">
            <label for="email">Email</label>
            <div class="mt-1 flex rounded-md shadow-sm">
                <span class="mt-1 inline-flex items-center rounded-l-md border-gray-400 bg-blue-500 px-3 text-sm text-white"><i class="fa-sharp fa-solid fa-envelope"></i></span>
                <input class="mt-1 block w-full rounded-r-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm " type="email" name="email" id="email" value="{{old('email')}}" required>
            </div>
        </div>
        <div class="col-span-6 sm:col-span-6">
            <label for="telefono">Telefono</label>
            <div class="mt-1 flex rounded-md shadow-sm">
                <span class="mt-1 inline-flex items-center rounded-l-md border-gray-400 bg-blue-500 px-3 text-sm text-white"><i class="fa-solid fa-phone"></i></span>
                <input class="mt-1 block w-full rounded-r-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm " type="text" name="telefono" id="telefono" value="{{old('telefono')}}">
            </div>
        </div>
        <div class="col-span-6 sm:col-span-6">
            <label for="rol">Rol</label>
            <select class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm " name="rol" id="rol">
                <option value="1">Psicologo</option>
                <option value="2">Administrador</option>
            </select>
        </div>
        <div class="col-span-6 sm:col-span-6">
            <label for="password">Contraseña</label>
            <div class="mt-1 flex rounded-md shadow-sm">
                <span class="mt-1 inline-flex items-center rounded-l-md border-gray-400 bg-blue-500 px-3 text-sm text-white"><i class="fa-solid fa-key"></i></span>
                <input class="mt-1 block w-full rounded-r-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm " type="password" name="password" id="password" required minlength="8">
            </div>
        </div>
        <div class="col-span-6 sm:col-span-6">
            <label for="password">Confirmar Contraseña</label>
            <div class="mt-1 flex rounded-md shadow-sm">
                <span class="mt-1 inline-flex items-center rounded-l-md border-gray-400 bg-blue-500 px-3 text-sm text-white"><i class="fa-solid fa-key"></i></span>
                <input class="mt-1 block w-full rounded-r-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm " type="password" name="password_confirmation" id="password_confirmation">
            </div>
        </div>
    </div>
    <div class="grid grid-cols-6 gap-6 py-11">
        <div class="col-span-6 sm:col-span-3">
            <button class="w-full border-2 border-blue-500 hover:bg-blue-700 hover:text-white text-blue-500 font-bold py-2 px-4 rounded-full" type="submit">Guardar</button>
        </div>
        <div class="col-span-6 sm:col-span-3 border-2 border-red-500 hover:bg-red-700 hover:text-white text-red-500 font-bold py-2 px-4 rounded-full text-center">
            <a  class=''href="{{ route('user.index') }}">
                Cancelar 
            </a>
        </div>
    </div>
</form>
    
@stop
