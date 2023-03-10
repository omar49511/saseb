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

    <div class="overflow-hidden bg-blue-700 sm:rounded-t-lg p-10">
        <a href="{{ route('expediente.create') }}" class="border-2 border-white hover:bg-blue-500 text-white font-bold py-2 px-4 rounded-full">Registrar Expediente</a>
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
                        <a type='button' class='bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-3 rounded' href="{{route('expediente.edit', ['expediente'=>$expediente])}}" title="Editar">
                            <i class='fa-solid fa-edit'></i>
                        </a>
                        <form method="POST" action="/expediente/{{$expediente->id}}" class="formulario-eliminar">
                            @method('DELETE')
                            @csrf
                            <button type='submit' class='bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-3 rounded' title="Eliminar">
                                <i class='fa-solid fa-trash-alt'></i>
                            </button>
                        </form>
                        <a type='button' title="Ver" class='bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-3 rounded' href="expediente/{{$expediente['id']}}">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a type='button' href="{{route('expediente.print', ['expediente'=>$expediente->id])}}" title="Imprimir" class='bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-2 px-3 rounded' >
                            <i class="fa fa-print"></i>
                        </a>
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
            }
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
    $('.formulario-eliminar').submit(function(e){
        e.preventDefault();
        Swal.fire({
            title: '¿Estas seguro?',
            text: "¡No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '¡Si, bórralo!'
        }).then((result) => {
            if (result.isConfirmed) {
                this.submit();
            }
        })
    });

</script>
@stop