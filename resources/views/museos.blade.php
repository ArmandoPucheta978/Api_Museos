@extends('adminlte::page')

@section('title', 'Museos')

@section('content_header')
    <h1>Lista de museos</h1>
@endsection

@section('content')
<div class="container">
    <h1>Listado de Museos</h1>
    <table id="museosTable" class="display">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Sitio Web</th>
                <th>Costo de Entrada</th>
                <th>Promedio de Calificaciones</th>
                <th>Tipo</th>
                <th>Imagenes</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($museos as $museo)
            <tr>
                <td>{{ $museo->nombre }}</td>
                <td>{{ $museo->descripcion }}</td>
                <td>{{ $museo->ubicacion }}</td>
                <td>{{ $museo->contacto }}</td>
                <td><a href="{{ $museo->sitio_web }}" target="_blank">{{ $museo->sitio_web }}</a></td>
                <td>${{ number_format($museo->costo_entrada, 2) }}</td>
                <td>{{ number_format($museo->promedioCalificaciones(), 2) }}</td>
                <td>
                    @foreach($museo->tipos as $tipo)
                        {{ $tipo->nombre }}@if(!$loop->last), @endif
                    @endforeach
                </td>
                <td>
                    @foreach($museo->imagenes as $imagen)
                        <img src="{{ asset('storage/images/' . $imagen->ruta) }}" alt="Imagen del Museo" style="width: 50px; height: 50px;">
                    @endforeach
                </td>
                <td>
                    {{-- <a href="{{ route('museos.show', $museo) }}" class="btn btn-info">Ver</a> --}}
                    {{-- <a href="{{ route('museos.edit', $museo) }}" class="btn btn-warning">Editar</a> --}}
                    {{-- <form action="{{ route('museos.destroy', $museo) }}" method="POST" style="display:inline;"> --}}
                        @csrf
                        @method('DELETE')
                        {{-- <button type="submit" class="btn btn-danger">Eliminar</button> --}}
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('#museosTable').DataTable();
    });
</script>
@endsection