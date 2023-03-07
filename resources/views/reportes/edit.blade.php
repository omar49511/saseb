@extends('layouts.app')

@section('title')
    Reporte | Editar
@stop

@section('contenido')
@include('alumnos._validation')
    <form class="px-4 my-20 max-w-7xl mx-auto space-y-6" action="{{ route('reporte.update', ['reporte'=>$reporte]) }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="mb-14 sm:text-center">
            <h1 class="text-3xl font-semibold">Modificar Reporte Grupal</h1>
        </div>
        <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-6">
                <label for="">Grupo</label>
                <input type="text"
                    class="py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-[#21434E]"
                    id="grupo" name="grupo" value="{{$reporte->grupo}}">
            </div>
        </div>
        <hr class="border-solid border-4 border-gray-200">

        <h2 class="text-xl text-[#21434E] font-semibold">
            Actividades
        </h2>
        <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6">
                <label for="">(Actividades desempeñadas el dia de hoy)</label>
                <textarea
                    class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm
                    @error('actividades')
                        border-red-500
                    @enderror
                    " value="{{old('actividades')}}"
                    rows="8" id="actividades" name="actividades" rows="3">{{old('actividades', $reporte->actividades)}}</textarea>
                @error('actividades')
                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{$message}}
                </span>
                @enderror
            </div>
        <h2 class="text-xl text-[#21434E] font-semibold">
            Observaciones
        </h2>
            <div class="col-span-6">
                <textarea
                    class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm
                    @error('observaciones')
                        border-red-500
                    @enderror "          
                    value="{{ old('observaciones') }}" rows="8" id="observaciones" name="observaciones" rows="3">{{old('observaciones', $reporte->observaciones)}}</textarea>
                @error('observaciones')
                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{$message}}
                </span>
                @enderror
            </div>

            <div class="col-span-6 sm:col-span-3">
                <input
                    class="w-full border border-blue-500 hover:bg-blue-600 bg-blue-200 hover:text-white text-blue-500 font-bold py-2 rounded"
                    type="submit" class="form-control" value="Modificar reporte">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <a class="text-center w-full border border-red-500 hover:bg-red-600 bg-red-200 hover:text-white text-red-500 font-bold py-2 rounded"
                    type="submit" class="form-control">Cancelar</a>
            </div>

        </div>
    </form>

@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
<script>
    $(document).ready(function () {
        var now = new Date();
        $('#fecha').val(return_string_date(now)); 
       
    });

    function return_string_date(date){
        var day = ("0" + date.getDate()).slice(-2);
        var month = ("0" + (date.getMonth() + 1)).slice(-2);
        var today = date.getFullYear()+"-"+(month)+"-"+(day) ;
        return today;
    }
</script>
@stop