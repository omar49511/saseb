@extends('layouts.app')

@section('contenido')
@include('alumnos._validation')

<form method="POST" action="/user/{{$user->id}}" enctype="multipart/form-data" class="px-4 my-20 max-w-3xl mx-auto space-y-6">
    @method('PATCH')
    @csrf()

    <div class="mb-14 sm:text-center">
        <h1 class="text-3xl font-semibold">Editar Usuario</h1>
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
                @error('email')
                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{$message}}
                </span>
                @enderror
            </div>
        </div>
        <div class="col-span-6 sm:col-span-6">
            <label for="telefono">Telefono</label>
            <div class="mt-1 flex rounded-md shadow-sm">
                <span class="mt-1 inline-flex items-center rounded-l-md border-gray-400 bg-blue-500 px-3 text-sm text-white"><i class="fa-solid fa-phone"></i></span>
                <input class="mt-1 block w-full rounded-r-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm " type="text" name="telefono" id="telefono" value="{{ $user->phone }}">
            </div>
        </div>
        <div class="col-span-6 sm:col-span-6">
            <label for="rol">Rol</label>
            <select class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm " name="role">
                @foreach ($roles as $role)
                <option value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-span-6 sm:col-span-6">
            <div class="sm:text-center">
                <p class="text-gray-600">Dejar en blanco en caso de que no se quiera cambiar la contraseña.</p>
            </div>
            <label for="password">Contraseña</label>
            <div class="mt-1 flex rounded-md shadow-sm">
                <span class="mt-1 inline-flex items-center rounded-l-md border-gray-400 bg-blue-500 px-3 text-sm text-white"><i class="fa-solid fa-key"></i></span>
                <input class="mt-1 block w-full rounded-r-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm @if($errors->has('password')) border-red-500 @endif" type="password" name="password" id="password" minlength="8">
                @if($errors->has('password'))
                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                {{ $errors->first('password') }}
                </span>
            @endif
            </div>
        </div>
        <div class="col-span-6 sm:col-span-6">
            <label for="password">Confirmar Contraseña</label>
            <div class="mt-1 flex rounded-md shadow-sm">
                <span class="mt-1 inline-flex items-center rounded-l-md border-gray-400 bg-blue-500 px-3 text-sm text-white"><i class="fa-solid fa-key"></i></span>
                <input class="mt-1 block w-full rounded-r-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm @if($errors->has('password')) border-red-500 @endif " type="password" name="password_confirmation" id="password_confirmation" minlength="8">
            </div>
        </div>
    </div>
    <div class="grid grid-cols-6 gap-6 py-11">
        <div class="col-span-6 sm:col-span-3">
            <button class="w-full border-2 border-blue-500 hover:bg-blue-700 hover:text-white text-blue-500 font-bold py-2 rounded" type="submit">Guardar</button>
        </div>
        <div class="col-span-6 sm:col-span-3 grid">
            <a class="text-center col-span-6 border-2 border-red-500 hover:bg-red-700 hover:text-white text-red-500 font-bold py-2  rounded" href="{{ route('user.index') }}">
                Cancelar
            </a>
        </div>
    </div>
</form>

@stop