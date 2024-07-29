@extends('adminlte::page')

@section('title', 'Museos')

@section('content_header')
    <h1>nuevo museo</h1>
@endsection

@section('content')
<div class="container">
    <form action="{{ route('guardar.museo') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="ciudad">Ciudad</label>
            <input type="text" name="ciudad" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="pais">pais</label>
            <input type="text" name="pais" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="ubicacion">Dirección</label>
            <input type="text" name="ubicacion" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="contacto">Teléfono</label>
            <input type="text" name="contacto" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="sitio_web">Sitio Web</label>
            <input type="url" name="sitio_web" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="costo_entrada">Costo de Entrada</label>
            <input type="number" step="0.01" name="costo_entrada" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tipos">Tipos de Museo:</label>
            @foreach($tipos as $tipo)
                <div class="form-check">
                    <input type="checkbox" name="tipos[]" value="{{ $tipo->id }}" class="form-check-input">
                    <label class="form-check-label">{{ $tipo->nombre }}</label>
                </div>
            @endforeach
        </div>
        <div class="form-group">
            <label for="horarios">Horarios:</label>
            @foreach(['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'] as $dia_semana)
                <div class="form-group">
                    <label>{{ ucfirst($dia_semana) }}:</label>
                    <div class="d-flex">
                        <input type="hidden" name="horarios[{{ $loop->index }}][dia_semana]" value="{{ $dia_semana }}">
                        <input type="time" name="horarios[{{ $loop->index }}][hora_apertura]" class="form-control mx-1" required>
                        <input type="time" name="horarios[{{ $loop->index }}][hora_cierre]" class="form-control mx-1" required>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="form-group">
            <label for="images">Imágenes del Museo</label>
            <input type="file" name="images[]" class="form-control" multiple>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>


@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@endsection

@section('js')
    <script>
        document.getElementById('add-horario').addEventListener('click', function() {
            var container = document.getElementById('horarios-container');
            var index = container.children.length;
            var horario = `
                <div class="horario">
                    <select name="horarios[${index}][dia_semana]" class="form-control" required>
                        <option value="Lunes">Lunes</option>
                        <option value="Martes">Martes</option>
                        <option value="Miércoles">Miércoles</option>
                        <option value="Jueves">Jueves</option>
                        <option value="Viernes">Viernes</option>
                        <option value="Sábado">Sábado</option>
                        <option value="Domingo">Domingo</option>
                    </select>
                    <input type="time" name="horarios[${index}][hora_apertura]" class="form-control" required>
                    <input type="time" name="horarios[${index}][hora_cierre]" class="form-control" required>
                </div>
            `;
            container.insertAdjacentHTML('beforeend', horario);
        });
        </script>
@endsection