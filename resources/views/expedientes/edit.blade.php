@extends('layouts.app')

@section('title')
    Expediente | Editar
@stop

@section('contenido')
@include('alumnos._validation')
    <form class="px-4 my-20 max-w-7xl mx-auto space-y-6" action="{{ route('expediente.update', ['expediente'=>$expediente]) }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="mb-14 sm:text-center">
            <h1 class="text-3xl font-semibold">Modificar Expediente de alumno</h1>
        </div>
        <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-4 ">
                <label for="">Atendió</label>
                <span class="block px-0 py-2.5 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-[#21434E]">
                    {{ $expediente->user->name." ".$expediente->user->surname." ".$expediente->user->secondSurname}}
                </span>
                {{-- <input type="text"
                    class="py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-[#21434E]"
                    id="atendio" name="atendio" value="{{ $expediente->user->name." ".$expediente->user->surname." ".$expediente->user->secondSurname}}
                    "> --}}
                <input type="hidden" name="user_id" id="user_id" value="{{$expediente->user->id}}">
            </div>
            <div class="col-span-6 sm:col-span-2 ">
                <label for="">Fecha</label>
                <span class="block px-0 py-2.5 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-[#21434E]">
                    {{$expediente->created_at}}
                </span>
            </div>
        </div>
        <hr class="border-solid border-4 border-gray-200">
        <h2 class="text-xl text-[#21434E] font-semibold">
            Ficha de identificación
        </h2>
        <div class="grid grid-cols-6 gap-6">
            <label for="default_search"
                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative col-span-6">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <input type="search" id="alumno_id" name="alumno_id"
                    class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Buscar alumno por # control" value="{{$expediente->alumno->id}}" required>
                @error('alumno_id') 
                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{$message}}
                    </span>
                @enderror
                <button type="button" onclick="search_student_by_id();"
                    class="text-white absolute right-2.5 bottom-1.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-1">Search</button>
            </div>
            <div class="col-span-6 sm:col-span-2">
                <label for="">Nombre del alumno</label>
                <span class="block px-3 py-2 sm:text-sm leading-normal  bg-white border border-gray-400 rounded-md shadow transition duration-150 ease-in-out focus:outline-none focus:shadow-outline-blue focus:border-blue-400">
                    {{$expediente->alumno->name}}
                </span>
            </div>
            <div class="col-span-6 sm:col-span-2">
                <label for="">Apellido</label>
                <span class="block px-3 py-2 sm:text-sm leading-normal  bg-white border border-gray-400 rounded-md shadow transition duration-150 ease-in-out focus:outline-none focus:shadow-outline-blue focus:border-blue-400">
                    {{$expediente->alumno->lastname}}
                </span>
            </div>
            <div class="col-span-6 sm:col-span-1">
                <label for="">Edad</label>
                {{-- TODO: mostrar edad en lugar de fecha de nacimiento --}}
                <span class="block px-3 py-2 sm:text-sm leading-normal  bg-white border border-gray-400 rounded-md shadow transition duration-150 ease-in-out focus:outline-none focus:shadow-outline-blue focus:border-blue-400">
                    {{$expediente->alumno->birthdate}}
                </span>
            </div>
            <div class="col-span-6 sm:col-span-1">
                <label for="">Grupo</label>
                <span class="block px-3 py-2 sm:text-sm leading-normal  bg-white border border-gray-400 rounded-md shadow transition duration-150 ease-in-out focus:outline-none focus:shadow-outline-blue focus:border-blue-400">
                    {{$expediente->alumno->group}}
                </span>
            </div>
            <div class="col-span-6 sm:col-span-1">
                <label for="">Turno</label>
                <span class="block px-3 py-2 sm:text-sm leading-normal  bg-white border border-gray-400 rounded-md shadow transition duration-150 ease-in-out focus:outline-none focus:shadow-outline-blue focus:border-blue-400">
                    {{$expediente->alumno->shift}}
                </span>
            </div>
            <div class="col-span-6 sm:col-span-1">
                <label for="">Sexo</label>
                <span class="block px-3 py-2 sm:text-sm leading-normal  bg-white border border-gray-400 rounded-md shadow transition duration-150 ease-in-out focus:outline-none focus:shadow-outline-blue focus:border-blue-400">
                    {{$expediente->alumno->gender}}
                </span>
            </div>
            <div class="col-span-6 sm:col-span-4">
                <label for="">Lugar de nacimiento</label>
                <span class="block px-3 py-2 sm:text-sm leading-normal  bg-white border border-gray-400 rounded-md shadow transition duration-150 ease-in-out focus:outline-none focus:shadow-outline-blue focus:border-blue-400">
                    {{$expediente->alumno->birthplace}}
                </span>
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="">Dirección</label>
                <span class="block px-3 py-2 sm:text-sm leading-normal  bg-white border border-gray-400 rounded-md shadow transition duration-150 ease-in-out focus:outline-none focus:shadow-outline-blue focus:border-blue-400">
                    {{$expediente->alumno->domicile}}
                </span>
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="">Tiempo de residencia</label>
                <span class="block px-3 py-2 sm:text-sm leading-normal  bg-white border border-gray-400 rounded-md shadow transition duration-150 ease-in-out focus:outline-none focus:shadow-outline-blue focus:border-blue-400">
                    {{$expediente->alumno->time_to_reside}}
                </span>
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="">Teléfono de casa</label>
                <span class="block px-3 py-2 sm:text-sm leading-normal  bg-white border border-gray-400 rounded-md shadow transition duration-150 ease-in-out focus:outline-none focus:shadow-outline-blue focus:border-blue-400">
                    {{$expediente->alumno->home_phone}}
                </span>
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="">Teléfono Celular</label>
                <span class="block px-3 py-2 sm:text-sm leading-normal  bg-white border border-gray-400 rounded-md shadow transition duration-150 ease-in-out focus:outline-none focus:shadow-outline-blue focus:border-blue-400">
                    {{$expediente->alumno->cell_phone}}
                </span>
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="">Religión</label>
                <span class="block px-3 py-2 sm:text-sm leading-normal  bg-white border border-gray-400 rounded-md shadow transition duration-150 ease-in-out focus:outline-none focus:shadow-outline-blue focus:border-blue-400">
                    {{$expediente->alumno->religion}}
                </span>
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="">Ocupación</label>
                <span class="block px-3 py-2 sm:text-sm leading-normal  bg-white border border-gray-400 rounded-md shadow transition duration-150 ease-in-out focus:outline-none focus:shadow-outline-blue focus:border-blue-400">
                    {{$expediente->alumno->work}}
                </span>
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
                <textarea
                    class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm
                    @error('motivoConsulta')
                        border-red-500
                    @enderror
                    "
                    rows="8" id="motivoConsulta" name="motivoConsulta" rows="3">{{old('motivoConsulta', $expediente->motivo_consulta)}}
                </textarea>
                @error('motivoConsulta')
                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{$message}}
                </span>
                @enderror
            </div>
            <div class="col-span-6">
                <label for="">Descripcion del paciente</label>
                <textarea
                    class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm
                    @error('descripcionPaciente')
                        border-red-500
                    @enderror "          
                    rows="8" id="descripcionPaciente" name="descripcionPaciente" rows="3">{{old('descripcionPaciente', $expediente->descripcion) }}
                </textarea>
                @error('descripcionPaciente')
                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{$message}}
                </span>
                @enderror
            </div>
            <div class="col-span-6 sm:col-span-3">
                <input
                    class="w-full border-2 border-blue-500 hover:bg-blue-700 hover:text-white text-blue-500 font-bold py-2 rounded"
                    type="submit" class="form-control" value="Modificar expediente">
            </div>
            <div class="col-span-6 sm:col-span-3 grid">
                <a href="{{route('expediente.index')}}" class="text-center col-span-6 border-2 border-red-500 hover:bg-red-700 hover:text-white text-red-500 font-bold py-2  rounded"
                    class="form-control">Cancelar</a>
            </div>
        </div>
    </form>

@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script> 

@livewireScripts
<script src="{{ asset('js/buscarUsuarioEnExpediente.js') }}"></script>

@stop