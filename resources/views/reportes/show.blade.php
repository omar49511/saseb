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
            <p  class="py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-[#21434E]">
            <strong>Fecha: </strong> {{$reporte->created_at}}
            </p>
        </div>
    </div>
    <div class="col-span-6 sm:col-span-1">
            <p class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm">
            <strong >REPORTE No: </strong>{{$reporte->id}}
            </p>
    </div>
    <div class="col-span-6 sm:col-span-4 ">
            <p  class="py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-[#21434E]">
            <strong>Nombre del responsable del informe: </strong> {{$reporte->firma; }}
            </p>
    </div>
    <div class="col-span-6 sm:col-span-4 ">
            <p  class="py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-0 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-[#21434E]">
            <strong>Informo a usted las actividades desempeñadas el dia de hoy.</strong>
            </p>
    </div>
    <hr class="border-solid border-4 border-gray-200">
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
        <div class="col-span-6">
            <label for="">Observaciones</label>
            <p
                class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm">
                {{$reporte->observaciones}}
                </p>
        </div>
        {{-- <div class="col-span-6 sm:col-span-3">
            <a  href="{{route('reporte.edit', ['reporte'=>$reporte])}}">
                <button
                class="w-full border border-blue-500 hover:bg-blue-600 bg-blue-200 hover:text-white text-blue-500 font-bold py-2 rounded"
                 class="form-control" >Editar</button></a>
        </div>
        <div class="col-span-3 sm:col-span-2">
        <form  method="POST" action="/reporte/{{$reporte->id}}" class="formulario-eliminar">
        @method('DELETE')
        @csrf
            <button class="text-center w-full border border-red-500 hover:bg-red-600 bg-red-200 hover:text-white text-red-500 font-bold py-2 rounded"
                type="submit" class="form-control">Borrar</button>
        </form>
        </div> --}}
        <div class="col-span-3 sm:col-span-1">
            <a href="{{route('reporte.print', ['reporte'=>$reporte->id])}}">
            <button  class="text-center w-full border border-green-500 hover:bg-green-600 bg-green-200 hover:text-white text-green-500 font-bold py-2 rounded">Imprimir</button></a>
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