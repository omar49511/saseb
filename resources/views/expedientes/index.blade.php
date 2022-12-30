@extends('layouts.app')


@section('contenido')

<div class="container">
    <div class='mb-10'>
        <div class=''>
            <!-- Button trigger modal -->
            <button id='btnNuevo' type='button' class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full' data-bs-toggle='modal'
                data-bs-target='#staticBackdrop'>
                <i class='fa-solid fa-user-plus'> </i>
                Nuevo expediente  
            </button>
        </div>
    </div>
</div>
    
@stop