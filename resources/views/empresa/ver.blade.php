@extends('adminlte::page')

@section('title', 'AIESEC-BOL')

@section('content_header')
    <h1>Información de la empresa {{$empresa->nombre_empresa}}</h1>
@stop

@section('content')

<div class="card">
    <div class="card-header">
        <a class="btn btn-danger" href="{{ route('empresa.index') }}">Volver</a>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="form-group">
                <label for="name">Nombre de la empresa / ONGs: </label>
                <input type="text" name="name" class="form-control" value="{{$empresa->nombre_empresa}}" disabled>
            </div>
        </div>
        <br>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="form-group">
                <label for="name">Nombre del representante: </label>
                <input type="text" name="name" class="form-control" value="{{$empresa->nombre_representante}}" disabled>
            </div>
        </div>
        <br>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="form-group">
                <label for="name">Cargo del representante: </label>
                <input type="text" name="name" class="form-control" value="{{$empresa->cargo_representante}}" disabled>
            </div>
        </div>
        <br>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="form-group">
                <label for="name">Página Web de la Institución / Facebook:  </label>
                <input type="text" name="name" class="form-control" value="{{$empresa->pagina_web}}" disabled>
            </div>
        </div>
        <br>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="form-group">
                <label for="name">Celular de la Institución: </label>
                <input type="text" name="name" class="form-control" value="{{$empresa->celular}}" disabled>
            </div>
        </div>
        <br>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="form-group">
                <label for="name">Teléfono de la Institución: </label>
                <input type="text" name="name" class="form-control" value="{{$empresa->telefono}}" disabled>
            </div>
        </div>
        <br>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="form-group">
                <label for="name">Email del representante de la Institución: </label>
                <input type="text" name="name" class="form-control" value="{{$empresa->correo_representante}}" disabled>
            </div>
        </div>
        <br>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="form-group">
                <label for="name">Email de la Institución:  </label>
                <input type="text" name="name" class="form-control" value="{{$empresa->correo_empresa}}" disabled>
            </div>
        </div>
        <br>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="form-group">
                <label for="name">¿En qué departamento se encuentra la empresa/ONG?: </label>
                <input type="text" name="name" class="form-control" value="{{$empresa->departamento}}" disabled>
            </div>
        </div>
        <br>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="form-group">
                <label for="name">Dirección de la empresa/ONG: </label>
                <input type="text" name="name" class="form-control" value="{{$empresa->direccion}}" disabled>
            </div>
        </div>
        <br>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="form-group">
                <label for="name">¿A qué se dedica la empresa/ONG?: </label>
                <textarea class="form-control" name="name" rows="3" disabled>{{$empresa->dedicacion}}</textarea>
            </div>
        </div>
        <br>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="form-group">
                <label for="name">¿A través de qué medio se entero de AIESEC?: </label>
                <input type="text" name="name" class="form-control" value="{{$empresa->saber_de_AIESEC}}" disabled>
            </div>
        </div>
        <br>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="form-group">
                <label for="name">Si marcaste Amigos/Familiares, indícanos el nombre de la persona que te refirió: </label>
                <input type="text" name="name" class="form-control" value="{{$empresa->nombre_amigo}}" disabled>
            </div>
        </div>
                {{-- <br>
                <label for="email">Ingrese el correo electronico</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                @error('email')
                    <small>*{{ $message }}</small>
                    <br><br>
                @enderror
                <br>
                <label for="password">Ingrese la contraseña</label>
                <input type="password" minlength="8" name="password" class="form-control" value="{{ old('password') }}" required>
                @error('password')
                    <small>*{{ $message }}</small>
                    <br><br>
                @enderror
                <br> --}}



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