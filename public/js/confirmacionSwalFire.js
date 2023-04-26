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