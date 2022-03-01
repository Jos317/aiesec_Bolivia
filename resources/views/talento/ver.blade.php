@extends('adminlte::page')

@section('title', 'AIESEC-BOL')

@section('content_header')
    <h1>Información de la persona {{$talento->nombres}} {{$talento->apellidos}}</h1>
@stop

@section('content')

<div class="card">
    <div class="card-header">
        <a class="btn btn-danger" href="{{ route('talento.index') }}">Volver</a>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="form-group">
                <label for="name">Nombres: </label>
                <input type="text" name="name" class="form-control" value="{{$talento->nombres}}" disabled>
            </div>
        </div>
        <br>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="form-group">
                <label for="name">Apellidos: </label>
                <input type="text" name="name" class="form-control" value="{{$talento->apellidos}}" disabled>
            </div>
        </div>
        <br>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="form-group">
                <label for="name">Edad: </label>
                <input type="text" name="name" class="form-control" value="{{$talento->edad}}" disabled>
            </div>
        </div>
        <br>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="form-group">
                <label for="name">Correo:  </label>
                <input type="email" name="name" class="form-control" value="{{$talento->correo}}" disabled>
            </div>
        </div>
        <br>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="form-group">
                <label for="name">Celular: </label>
                <input type="text" name="name" class="form-control" value="{{$talento->celular}}" disabled>
            </div>
        </div>
        <br>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="form-group">
                <label for="name">¿En que ciudad resides?: </label>
                <input type="text" name="name" class="form-control" value="{{$talento->ciudad_reside}}" disabled>
            </div>
        </div>
        <br>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="form-group">
                <label for="name">¿En que universidad / Instituto estudias o estudiaste?: </label>
                <input type="text" name="name" class="form-control" value="{{$universidades[$talento->universidad - 1]->name}}" disabled>
            </div>
        </div>
        <br>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="form-group">
                <label for="name">Grado de Estudio:  </label>
                <input type="text" name="name" class="form-control" value="{{$talento->grado_estudio}}" disabled>
            </div>
        </div>
        <br>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="form-group">
                <label for="name">¿Qué carrera estudias o estudiaste?: </label>
                <input type="text" name="name" class="form-control" value="{{$talento->carrera}}" disabled>
            </div>
        </div>
        <br>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="form-group">
                <label for="name">Si seleccionaste "Otra" escribe tú carrera: </label>
                <input type="text" name="name" class="form-control" value="{{$talento->otra_carrera}}" disabled>
            </div>
        </div>
        <br>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="form-group">
                <label for="name">Nivel de Ingles: </label>
                <input type="text" name="name" class="form-control" value="{{$talento->nivel_ingles}}" disabled>
            </div>
        </div>
        <br>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="form-group">
                <label for="name">Experiencia Laboral: </label>
                <input type="text" name="name" class="form-control" value="{{$talento->experiencia}}" disabled>
            </div>
        </div>
        <br>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="form-group">
                <label for="name">¿En qué área te gustaría desarrollarte?: </label>
                <input type="text" name="name" class="form-control" value="{{$talento->area_desarrollo}}" disabled>
            </div>
        </div>
        <br>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="form-group">
                <label for="name">¿Porque desea tomar una pasantía internacional?: </label>
                <input type="text" name="name" class="form-control" value="{{$talento->pasantia_internacional}}" disabled>
            </div>
        </div>
        <br>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="form-group">
                <label for="name">¿Cual de los programas te interesa?: </label>
                <input type="text" name="name" class="form-control" value="{{$talento->programa}}" disabled>
            </div>
        </div>
        <br>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="form-group">
                <label for="name">¿Cómo te enteraste de nuestro programa de Pasantías Globales?: </label>
                <input type="text" name="name" class="form-control" value="{{$talento->descubrimiento_programa}}" disabled>
            </div>
        </div>
        <br>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="form-group">
                <label for="name">¿Por qué medio deseas ser contactado?: </label>
                <input type="text" name="name" class="form-control" value="{{$talento->medio_contacto}}" disabled>
            </div>
        </div>
        <br>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="form-group">
                <label for="name">Describa los documentos a adjuntar: </label>
                <input type="text" name="name" class="form-control" value="{{$talento->describir_documento}}" disabled>
            </div>
        </div>
        <br>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="form-group">
                <label for="name">Archivo adjuntado: </label>
                <a href="{{asset('storage/'.$talento->documentos)}}" download>Descargar el archivo zip</a>
            </div>
        </div>
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#empresas').DataTable();
        });
    </script>
@stop