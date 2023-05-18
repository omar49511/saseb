$(document).ready(function () {
    var now = new Date();
    $('#fecha').val(return_string_date(now)); 
   
});

function search_student_by_id(){

    var id = $("#alumno_id").val();

    $.ajax({
        url: "/alumno/json/"+id,
        method: "GET",
        data: {
            _token: $('input[name="_token"]').val()
        },
        error: function(response) {
            Swal.fire(
                '¡Error!',
                'El alumno no existe.',
                'error'
            )
        },
        success: function (response) {
            var array = JSON.parse(response);
            $("#nombre").val(array.name);
            $("#apellido_paterno").val(array.lastname);
            $("#fecha_nacimiento").val(array.birthdate.split("T")[0]);
            $("#grupo").val(array.group);
            $("#turno").val(array.shift);
            $("#sexo").val(array.gender);
            $("#lugar_nacimiento").val(array.birthplace);
            $("#direccion").val(array.domicile);
            $("#tiempoResidencia").val(array.time_to_reside);
            $("#telefonoCasa").val(array.home_phone);
            $("#celular").val(array.cell_phone);
            $('#religion').val(array.religion);
            $('#ocupacion').val(array.work);
            $('#tiempoResidencia').val(array.time_to_reside);
            $('#grupo').val(array.group);
            $('#turno').val(array.shift);
            $('#ciudad_nacimiento').val(array.city.name);
            $('#estado_nacimiento').val(array.city.state.name);
        }
    });
}

function return_string_date(date){
    var day = ("0" + date.getDate()).slice(-2);
    var month = ("0" + (date.getMonth() + 1)).slice(-2);
    var today = date.getFullYear()+"-"+(month)+"-"+(day) ;
    return today;
}