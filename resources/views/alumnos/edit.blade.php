@extends('layouts.app')

@section('contenido')
{{-- https://www.creative-tim.com/learning-lab/tailwind-starter-kit/documentation/javascript/alerts --}}
{{-- https://laravel.com/docs/9.x/validation#quick-writing-the-validation-logic --}}

@include('alumnos._validation')

<form method="POST" action="/alumno/{{$alumno->id}}" enctype="multipart/form-data" class="px-4 my-20 max-w-3xl mx-auto space-y-6">
    @method('PATCH')
    @csrf()

    <div class="mb-14 sm:text-center">
        <h1 class="text-3xl font-semibold">Editar Alumnos</h1>
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
<script src="https://code.jquery.com/jquery-3.5.1.js"></script> 

<script>

function selectState(){
    var state_name = $("#estado").val();
    var state_obj = $("#estados_dropdown")
    console.log(state_obj.options);
    setSelectedValue(state_obj, state_name);
    loadCities.call(state_obj);
}

function loadCities() {
    var estado_id = $(this).val();
    url = '/estado/'+estado_id+'/get_all_ciudades';
    if (estado_id) {
        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                var options = '';
                $.each(response, function(index, ciudad) {
                    options += '<option value="' + ciudad.id + '">' + ciudad.name + '</option>';
                });
                $('#ciudades_dropdown').empty();
                $('#ciudades_dropdown').append(options);
                selectCity();
            }
        });
    } else {
        $('#ciudades_dropdown').html('<option value="">Seleccione una ciudad</option>');
    }
}

function selectCity(){
    var city_dropdown = $("#ciudades_dropdown");
    city_name = $("#ciudad").val();
    setSelectedValue(city_dropdown, city_name);
}

function setSelectedValue(selectObj, valueToSelect){
    options = selectObj.children()
    if (options){
        for (var i = 0; i < options.length; i++) {
            if(options[i].text == valueToSelect)
            {
                options[i].selected = true;
                return;
            }
        }
    }
    else{
        console.error('El objeto no tiene opciones.');
        console.error(selectObj);
    }
}

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
    $('#estados_dropdown').on('click', loadCities);
    selectState();
});
    
</script>

@stop

