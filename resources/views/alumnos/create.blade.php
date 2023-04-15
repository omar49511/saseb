@extends('layouts.app')


@section('contenido')

@include('alumnos._validation')

<form method="POST" action="{{ route('alumno.store') }}" enctype="multipart/form-data" class="px-4 my-20 max-w-3xl mx-auto space-y-6">

    {{ csrf_field() }}

    <div class="mb-14 sm:text-center">
        <h1 class="text-3xl font-semibold">Registrar Alumnos</h1>
        <p class="text-gray-600">Los cambios realizados seran visibles para otros usuarios</p>
    </div>

    @include('alumnos._form')

    <div class="grid grid-cols-6 gap-6 py-11">
        <div class="col-span-6 sm:col-span-3">
            <button class="w-full border-2 border-blue-500 hover:bg-blue-700 hover:text-white text-blue-500 font-bold py-2 rounded" type="submit">Guardar</button>
        </div>
        <div class="col-span-6 sm:col-span-3 grid">
            <a class="text-center col-span-6 border-2 border-red-500 hover:bg-red-700 hover:text-white text-red-500 font-bold py-2  rounded" href="{{ route('alumno.index') }}">
                Cancelar
            </a>
        </div>
    </div>
</form>

@stop
@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
<script>

$(document).ready(function() {
    $.ajax({
        url: '{{ route("estado.ciudades",["estado"=>1]) }}',
        type: 'GET',
        // data: {estado_id: 0}
        dataType: 'json',
        success: function(response) {
            var options = '';
            $.each(response, function(index, ciudad) {
                options += '<option value="' + ciudad.id + '">' + ciudad.name + '</option>';
            });
            $('#ciudades_dropdown').append(options);
        }
    });

$('#estados_dropdown').on('click', function() {
        var estado_id = $(this).val();
        url = '/estado/'+estado_id+'/get_all_ciudades';
        console.log(url);
        if (estado_id) {
            $.ajax({
                url: url,
                type: 'GET',
                // data: {estado_id: estado_id},
                dataType: 'json',
                success: function(response) {
                    var options = '';
                    $.each(response, function(index, ciudad) {
                        options += '<option value="' + ciudad.id + '">' + ciudad.name + '</option>';
                    });
                    $('#ciudades_dropdown').empty();
                    $('#ciudades_dropdown').append(options);
                }
            });
        } else {
            $('#ciudades_dropdown').html('<option value="">Seleccione una ciudad</option>');
        }
    });
});
    
</script>

@stop
