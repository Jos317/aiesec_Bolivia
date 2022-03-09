@extends('adminlte::page')

@section('title', 'AIESEC-BOL')

@section('content_header')
    <h1>Información de la persona {{$talento->nombres}} {{$talento->apellidos}}</h1>
@stop

@section('content')

<div class="card">
    <div class="card-header">
        <a class="btn btn-danger" href="{{ route('talentos.index') }}">Volver</a>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                <div class="form-group">
                    <label for="name">Nombres: </label>
                    <input type="text" name="name" class="form-control" value="{{$talento->nombres}}" disabled>
                </div>
            </div>
            <div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                <div class="form-group">
                    <label for="name">Apellidos: </label>
                    <input type="text" name="name" class="form-control" value="{{$talento->apellidos}}" disabled>
                </div>
            </div>
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <div class="form-group">
                    <label for="name">Edad: </label>
                    <input type="text" name="name" class="form-control" value="{{$talento->edad}}" disabled>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group">
                    <label for="name">Correo:  </label>
                    <input type="email" name="name" class="form-control" value="{{$talento->correo}}" disabled>
                </div>
            </div>
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <div class="form-group">
                    <label for="name">Celular: </label>
                    <input type="text" name="name" class="form-control" value="{{$talento->celular}}" disabled>
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="form-group">
                    <label for="name">¿En que ciudad resides?: </label>
                    <input type="text" name="name" class="form-control" value="{{$talento->ciudad_reside}}" disabled>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-7 col-sm-7 col-md-7 col-lg-7 col-xl-7">
                <div class="form-group">
                    <label for="name">¿En que universidad / Instituto estudias o estudiaste?: </label>
                    <input type="text" name="name" class="form-control" value="{{$universidades[$talento->universidad - 1]->name}}" disabled>
                </div>
            </div>
            <div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                <div class="form-group">
                    <label for="name">Grado de Estudio:  </label>
                    <input type="text" name="name" class="form-control" value="{{$talento->grado_estudio}}" disabled>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="form-group">
                    <label for="name">¿Qué carrera estudias o estudiaste?: </label>
                    <input type="text" name="name" class="form-control" value="{{$talento->carrera}}" disabled>
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="form-group">
                    <label for="name">Nombre de la carrera si seleccionó Otro: </label>
                    @if (strlen($talento->otra_carrera)==0)
                        <input type="text" name="name" class="form-control" value="No seleccionó Otro" disabled>
                    @else
                        <input type="text" name="name" class="form-control" value="{{$talento->otra_carrera}}" disabled>
                    @endif
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="form-group">
                    <label for="name">Nivel de Ingles: </label>
                    <input type="text" name="name" class="form-control" value="{{$talento->nivel_ingles}}" disabled>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group">
                    <label for="name">Experiencia Laboral: </label>
                    <input type="text" name="name" class="form-control" value="{{$talento->experiencia}}" disabled>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group">
                    <label for="name">¿En qué área te gustaría desarrollarte?: </label>
                    <input type="text" name="name" class="form-control" value="{{$talento->area_desarrollo}}" disabled>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group">
                    <label for="name">¿Porque desea tomar una pasantía internacional?: </label>
                    <input type="text" name="name" class="form-control" value="{{$talento->pasantia_internacional}}" disabled>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group">
                    <label for="name">¿Cual de los programas te interesa?: </label>
                    <input type="text" name="name" class="form-control" value="{{$talento->programa}}" disabled>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group">
                    <label for="name">¿Cómo te enteraste de nuestro programa de Pasantías Globales?: </label>
                    <input type="text" name="name" class="form-control" value="{{$talento->descubrimiento_programa}}" disabled>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group">
                    <label for="name">¿Por qué medio deseas ser contactado?: </label>
                    <input type="text" name="name" class="form-control" value="{{$talento->medio_contacto}}" disabled>
                </div>
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
                <a href="{{asset('storage/'.$talento->documentos)}}" download><input type="text" name="name" class="form-control text-info" value="Click aquí para descargar el archivo zip" disabled></a>
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