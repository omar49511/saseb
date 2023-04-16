$(document).ready(function() {
    $('#tabla').DataTable({
        responsive: true,
        language : {
            url: "{{asset('Datatable/es-ES.json')}}"
        }
    });
});