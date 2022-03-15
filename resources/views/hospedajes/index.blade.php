@extends('adminlte::page')

@section('title', 'AIESEC-BOL')

@section('content_header')
    <h1>Hospedaje Internacional</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{url('hospedaje/excel')}}" class="btn btn-sm btn-success">Exportar a Excel</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            {{-- <a href="{{ route('hospedajes.create') }}" class="btn btn-primary btn-sm">CREAR (TEMPORAL)<a>
                <br>
                <br> --}}
            <div class="table-responsive" style="overflow: auto">
                <table class="table table-striped" id="talentos" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre Completo</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($hospedajes as $hospedaje)
                            <tr>
                                <td>{{ $hospedaje->id }}</td>
                                <td>{{ $hospedaje->nombre }}</td>
                                <td>{{ $hospedaje->correo }}</td>
                                <td>{{ $hospedaje->celular }}</td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{ route('hospedajes.show', $hospedaje) }}">Ver
                                        Informacion</a>
                                </td>
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
            $('#talentos').DataTable();
        });
    </script>
@stop
