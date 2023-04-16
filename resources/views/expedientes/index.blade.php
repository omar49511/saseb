@extends('layouts.app')

@section('title')
    Expediente | Alumno
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap5.min.css">
@stop

@section('contenido')

    <div class="overflow-hidden bg-gray-800 sm:rounded-t-lg p-10">
        <a href="{{ route('expediente.create') }}" class="inline-block rounded bg-neutral-50 px-6 pb-2 pt-2.5 font-medium uppercase leading-normal text-neutral-800 shadow-[0_4px_9px_-4px_#cbcbcb] transition duration-150 ease-in-out hover:bg-neutral-100 hover:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:bg-neutral-100 focus:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:outline-none focus:ring-0 active:bg-neutral-200 active:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(251,251,251,0.3)] dark:hover:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:focus:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:active:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)]">Registrar Expediente</a>
    </div>
    <div class="px-4 mt-5 mb-20  mx-auto space-y-6">
        <table class='table table-striped table-hover' width="100%" id="tabla">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th>Atendió</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="tabla">
                @foreach ($expedientes as $expediente)
                <tr>
                    <td>{{$expediente->id}}</td>
                    <td>{{$expediente->alumno->name}}</td>
                    <td>{{$expediente->alumno->lastname}}</td>
                    <td>{{$expediente->alumno->cell_phone}}</td>
                    <td>{{$expediente->user->name." ".$expediente->user->surname}}</td>
                    <td>{{$expediente->created_at}}</td>
                    <td class="flex space-x-4">
                        <div class="flex gap-2">
                        <a type='button' class='bg-blue-700 hover:bg-blue-600 text-white font-bold py-2 px-3 rounded' href="{{route('expediente.edit', ['expediente'=>$expediente])}}" title="Editar">
                            <i class='fa-solid fa-edit'></i>
                        </a>
                        
                        <a type='button' title="Ver" class='bg-sky-700 hover:bg-sky-600 text-white font-bold py-2 px-3 rounded' href="expediente/{{$expediente['id']}}">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a type='button' href="{{route('expediente.print', ['expediente'=>$expediente->id])}}" title="Imprimir" class='bg-cyan-700 hover:bg-cyan-600 text-white font-bold py-2 px-3 rounded' >
                            <i class="fa fa-print"></i>
                        </a>
                        <form method="POST" action="/expediente/{{$expediente->id}}" class="formulario-eliminar">
                            @method('DELETE')
                            @csrf
                            <button type='submit' class='bg-red-700 hover:bg-red-600 text-white font-bold py-2 px-3 rounded' title="Eliminar">
                                <i class='fa-solid fa-trash-alt'></i>
                            </button>
                        </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    
@stop
@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#tabla').DataTable({
            responsive: true,
            language : {
                url: "{{asset('Datatable/es-ES.json')}}"
            },
            columnDefs:[{
                type:"num",
                targets: 0
            }]
        });
    });
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('eliminar') == 'ok')
        <script>
            Swal.fire(
                '¡Eliminado!',
                'El expediente ha sido eliminado.',
                'success'
            )
        </script>
@endif

<script>
    $(document).on('click', '.formulario-eliminar button[type=submit]', function(e){
        e.preventDefault();
        var form = $(this).closest('form');
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '¡Sí, bórralo!'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        })
    });
</script>
@stop