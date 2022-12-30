@extends('layouts.app')

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h2 class="mb-3 pt-5 pb-4">Expediente de alumno</h2>
            </div>
        </div>
    </div>
    <form class="border border-secondary p-4 mb-5" action="" method="POST">
        <div class="row g-3">
            <div class="col-sm-6">
                <label for="">Atendió</label>
                <input type="text" class="form-control" id="atendio" name="atendio" placeholder="Atendió">
            </div>
            <div class="col-sm-6">
                <label for="">Fecha</label>
                <input type="date" class="form-control" id="fecha" name="fecha">
            </div>
        </div>
        <hr class="my-4">
        <h4 class="mb-3">
            Ficha de identificación
        </h4>
        <div class="row gy-3">
            <div class="col-sm-3">
                <label for="">Nombre del alumno</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del alumno">
            </div>
            <div class="col-sm-3">
                <label for="">Apellido paterno del alumno</label>
                <input type="text" class="form-control" id="apellido_paterno" name="apellidoPaterno" placeholder="Apellido paterno del alumno">
            </div>
            <div class="col-sm-3">
                <label for="">Apellido materno del alumno</label>
                <input type="text" class="form-control" id="apellido_materno" name="apellidoMaterno" placeholder="Apellido materno del alumno">
            </div>
            <div class="col-sm-3">
                <label for="">Fecha de nacimiento</label>
                <input type="date" class="form-control" id="fecha_nacimiento" name="fechaNacimiento" placeholder="Fecha de nacimiento">
            </div>
            <div class="col-sm-4">
                <label for="">Grupo</label>
                <input type="text" class="form-control" id="grupo" name="grupo" placeholder="Grupo">
            </div>
            <div class="col-sm-4">
                <label for="">Turno</label>
                <input type="text" class="form-control" id="turno" name="turno" placeholder="Turno">
            </div>
            <div class="col-sm-4">
                <label for="">Sexo</label>
                <input type="text" class="form-control" id="sexo" name="sexo" placeholder="Sexo">
            </div>
            <div class="col-sm-3">
                <label for="">Lugar de nacimiento</label>
                <input type="text" class="form-control" id="lugar_nacimiento" name="lugar" placeholder="Lugar de nacimiento">
            </div>
            <div class="col-sm-6">
                <label for="">Dirección</label>
                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección">
            </div>
            <div class="col-sm-3">
                <label for="">Tiempo de residencia</label>
                <input type="text" class="form-control" id="tiempoResidencia" name="tiempoResidencia" placeholder="Tiempo de residencia">
            </div>
            <div class="col-sm-6">
                <label for="">Teléfono de casa</label>
                <input type="text" class="form-control" id="telefonoCasa" name="telefonoCasa" placeholder="Teléfono de Casa">
            </div>
            <div class="col-sm-6">
                <label for="">Teléfono Celular</label>
                <input type="text" class="form-control" id="celular" name="telefonoCelular" placeholder="Teléfono celular">
            </div>
            <div class="col-sm-6">
                <label for="">Religión</label>
                <input type="text" class="form-control" id="ocupacion" name="ocupacion" placeholder="Ocupación">
            </div>
            <div class="col-sm-6">
                <label for="">Ocupación</label>
                <input type="text" class="form-control" id="ocupacion" name="ocupacion" placeholder="Ocupación">
            </div>
        </div>
        <hr class="my-4">
        <h4 class="mb-3">
            Motivo de consulta
        </h4>
        <div class="row gy-3">
            <div class="col-sm-12">
                <label for="">Motivo de consulta</label>
                <textarea class="form-control" id="motivoConsulta" name="motivoConsulta" rows="3"></textarea>
            </div>
            <div class="col-sm-12">
                <label for="">Descripcion del paciente</label>
                <textarea class="form-control" id="descripcionPaciente" name="descripcionPaciente" rows="3"></textarea>
            </div>
            <div class="col-md-12">
                <input class="w-100 btn btn-primary btn-lg" type="submit" class="form-control" value="Agregar expediente">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <input type="hidden" class="form-control" 
                        id="idAlumno" name="idAlumno">
                </div>
            </div>
        </div>
   </form>
</div>
@stop