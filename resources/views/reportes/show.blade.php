@extends('layouts.app')

@section('css')
    
@stop

@section('title')
    Reporte | {{$reporte->id}}
@stop

@section('contenido')
<div class="px-4 my-20 max-w-7xl mx-auto space-y-6" >
    <div class="mb-14 sm:text-center">
        <h1 class="text-3xl font-semibold">REPORTE DE ACTIVIDADES</h1>
    </div>
    <div class="grid grid-cols-6 gap-6">
        <div class="col-span-6 sm:col-span-2 ">
            <p class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm">
            <strong>Fecha: </strong> {{$reporte->created_at}}
            </p>
        </div>
    </div>
    <div class="col-span-6 sm:col-span-1">
            <p class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm">
            <strong >Reporte No: </strong>{{$reporte->id}}
            </p>
    </div>
    <div class="col-span-6 sm:col-span-1">
            <p class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm">
            <strong >Grupo: </strong>{{$reporte->grupo}}
            </p>
    </div>
    <div class="col-span-6 sm:col-span-4 ">
            <p class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm">
            <strong>Nombre del responsable del informe: </strong> {{$reporte->firma; }}
            </p>
    </div>
    <h2 class="text-xl text-[#21434E] font-semibold">
        Actividades
    </h2>
    <div class="grid grid-cols-6 gap-6">
        <div class="col-span-6">
            <p
                class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm">
                {{$reporte->actividades}}
            </p>
        </div>
    <h2 class="text-xl text-[#21434E] font-semibold">
        Observaciones
    </h2>
        <div class="col-span-6">
            <p
                class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm">
                {{$reporte->observaciones}}
                </p>
        </div>

        <div class="col-span-6 sm:col-span-1 grid">
            <a href="{{route('reporte.index')}}" class="text-center col-span-6 border-2 border-red-500 hover:bg-red-700 hover:text-white text-red-500 font-bold py-2  rounded"
                class="form-control">Cancelar</a>
        </div>
    </div>
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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