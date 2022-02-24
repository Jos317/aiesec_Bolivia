@extends('adminlte::page')

@section('title', 'AIESEC-BOL')

@section('content_header')
    <h1>Empresas / ONGs</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            
            <div class="table-responsive" style="overflow: auto">    
                <table class="table table-striped" id="empresas" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">Nombre de la empresa / ONG</th>
                            <th scope="col">Nombre del representante</th>
                            <th scope="col">Cargo del representante</th>
                            <th scope="col">Página Web / Facebook</th>
                            <th scope="col">Celular de la empresa</th>
                            <th scope="col">Teléfono de la empresa</th>
                            <th scope="col">Correo del representante</th>
                            <th scope="col">Correo del empresa</th>
                            <th scope="col">Ubicación departamental de la empresa</th>
                            <th scope="col">Dirección de la empresa</th>
                            <th scope="col">Dedicación de la empresa</th>
                            <th scope="col">Medio por el que supo de AIESEC</th>
                            <th scope="col">Nombre de la persona si se marcó Otro</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($empresas as $empresa)
                            <tr>
                                <td>{{ $empresa->nombre_empresa }}</td>
                                <td>{{ $empresa->nombre_representante }}</td>
                                <td>{{ $empresa->cargo_representante }}</td>
                                <td>{{ $empresa->pagina_web }}</td>
                                <td>{{ $empresa->celular }}</td>
                                <td>{{ $empresa->telefono }}</td>
                                <td>{{ $empresa->correo_representante }}</td>
                                <td>{{ $empresa->correo_empresa }}</td>
                                <td>{{ $empresa->departamento }}</td>
                                <td>{{ $empresa->direccion }}</td>
                                <td>{{ $empresa->dedicacion }}</td>
                                <td>{{ $empresa->saber_de_AIESEC }}</td>
                                <td>{{ $empresa->nombre_amigo }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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
