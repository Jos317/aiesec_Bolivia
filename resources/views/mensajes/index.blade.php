@extends('adminlte::page')

@section('title', 'AIESEC-BOL')
@section('content_header')

@stop


@section('content')

    <br>
    <div class="card text-dark">
        <div class="card-header  text-center">
            <h3><b>Bandeja de Correos</b></h3>
        </div>
    </div>

    <div class="card-body table-responsive">
        <table class="table table-striped table-bordered shadow-lg mt-4" id="mensajes">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Correo</th>
                    <th>Observación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($contacto as $contactos)
                    {{-- hereeeeee --}}
                    <tr>
                        <td>
                            <center>{{ $contactos->id }}</center>
                        </td>
                        <td>
                            <center>{{ $contactos->correo }}</center>
                        </td>

                        <td>
                            @if ($contactos->estado == null)
                                <center>Sin ver</center>
                            @else
                                <center>{{ $contactos->estado }}</center>
                            @endif

                        </td>



                        {{-- @can('Modo Admin') --}}
                        <td class="text-center">
                            <form action="{{ route('contactos.destroy', $contactos) }}" method="POST">

                                <a href="{{ route('contactos.edit', $contactos) }}" class="btn btn-primary btn-sm"><i
                                        class="fas fa-edit"></i>
                                    Editar</a>
                                @csrf

                                @method('delete')
                                <button onclick="return confirm('¿ESTA SEGURO DE  BORRAR?')" type="submit" value="Borrar"
                                    class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i>
                                    Eliminar</button>

                            </form>
                        </td>
                        {{-- @endcan --}}
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $('#marcas').DataTable({
            autoWidth: false
        });
    </script>
@endsection
