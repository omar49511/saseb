@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap5.min.css">
@stop

@section('contenido')

    @can('alumno.create')
    <div class="overflow-hidden bg-gray-800 sm:rounded-t-lg p-10">
        <a href="{{ route('alumno.create') }}" class="inline-block rounded bg-neutral-50 px-6 pb-2 pt-2.5 font-medium uppercase leading-normal text-neutral-800 shadow-[0_4px_9px_-4px_#cbcbcb] transition duration-150 ease-in-out hover:bg-neutral-100 hover:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:bg-neutral-100 focus:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:outline-none focus:ring-0 active:bg-neutral-200 active:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(251,251,251,0.3)] dark:hover:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:focus:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:active:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)]">Registrar Alumno</a>
    </div>
    @endcan
    <div class="px-4 mt-5 mb-20  mx-auto space-y-6">
        <table class='table table-striped table-hover' width="100%" id="tabla">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
					<th>Grupo</th>
					<th>Turno</th>
                    <th>Sexo</th>
                    <th>Lugar de nacimiento</th>
					<th>Tiempo de residencia</th>
                    <th>Domicilio</th>
                    <th>Telefono casa</th>
                    <th>Telefono celular</th>
					<th>Ocupacion</th>
					<th>Religion</th>
                    @can('alumno.edit')
                    <th>Acciones</th>
                    @endcan
                </tr>
            </thead>
            <tbody id="databody">
                @foreach ($alumnos as $alumno)
                <tr>
                    <td>{{$alumno['id']}}</td>
                    <td>{{$alumno["name"]}}</td> 
                    <td>{{$alumno["lastname"]}}</td>
                    <td><?php $hoy = date('Y-m-d'); $fecha = $alumno['birthdate']; $edad = date_diff(date_create($fecha),date_create($hoy)); echo $edad->format('%y'); ?></td>
					<td>{{$alumno["group"]}}</td>
					<td>{{$alumno["shift"]}}</td> 					
                    <td>{{$alumno["gender"]}}</td>
                    <td>{{$alumno["birthplace"]}}</td>
					<td>{{$alumno["time_to_reside"]}}</td>
                    <td>{{$alumno["domicile"]}}</td>
                    <td>{{$alumno["home_phone"]}}</td>
                    <td>{{$alumno["cell_phone"]}}</td>
					<td>{{$alumno["work"]}}</td>
					<td>{{$alumno["religion"]}}</td>
                    @can('alumno.edit')
                    <td class="flex space-x-4">
                        <div class="flex gap-2">
                            <a type='button' class='bg-blue-700 hover:bg-blue-600 text-white font-bold py-2 px-3 rounded' href="alumno/{{$alumno['id']}}/edit">
                                <i class='fa-solid fa-edit'></i>
                            </a>
                            <a type='button' class='bg-sky-700 hover:bg-sky-600 text-white font-bold py-2 px-3 rounded' href="expediente/create/{{$alumno['id']}}">
                                <i class="fa-solid fa-folder-open"></i>
                            </a>
                            <form method="POST" action="/alumno/{{$alumno->id}}" class="formulario-eliminar">
                                @method('DELETE')
                                @csrf
                                <button type='submit' class='bg-red-700 hover:bg-red-600 text-white font-bold py-2 px-3 rounded'>
                                    <i class='fa-solid fa-trash-alt'></i>
                                </button>
                            </form>
                        </div>
                    </td>
                    @endcan
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> 
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap5.min.js"></script>



@livewireScripts
<script src="{{ asset('js/dataTable.js') }}"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('eliminar') == 'ok')

@livewireScripts
<script src="{{ asset('js/eliminadoMensaje.js') }}"></script>
@endif

@livewireScripts
<script src="{{ asset('js/confirmacionSwalFire.js') }}"></script>


@stop