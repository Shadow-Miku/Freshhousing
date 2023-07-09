@extends('empleado.plantillaEmpleado')
<?php $inicio = false ?>
@section('contenido')

<main class="contenedor seccion">
    <h1>Crear Publicacion</h1>
    <div class="card-body">
    <form class="formulario" method="POST" action="{{ route('adminbolsadet.storereg') }}" enctype="multipart/form-data">
    @csrf
    <fieldset style="background-color: #24272480;">
        <legend>Información de la Publicacion</legend>

        <div class="mb-3" >
            <label class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="autorid" value="{{ $user = auth()->user()->id }}">
            <p class="text-primary fst-italic"> {{ $errors->first('autorid') }} </p>
        </div>

        <label class="form-label" for="titulo">Titulo:</label>
        <input class="form-control"  type="text" id="titulop" name="titulo" placeholder="Titulo Del Trabajo" >

        <label for="categoriaid">Categoría:</label>
        <select name="categoriaid" id="categoriaid" required>
        @foreach ($Categorias as $categoria)
            <option value="{{ $categoria->idcategoria }}">{{ $categoria->nombre_categoria }}</option>
        @endforeach
        </select>

        <label class="form-label" for="imagen">Imagen:</label>
        <input class="form-control"  type="file" id="imagen" accept="image/*" name="file" required>

        <label class="form-label" for="descripcion">Descripción:</label>
        <textarea class="form-control"  id="descripcion" name="descripcion"></textarea>

    </fieldset>
    <br>
    <div class="d-flex justify-content-between">
        <a href="{{ url()->previous() }}" class="btn btn-secondary">Volver</a>
        <input type="submit" value="Crear Publicacion" class="btn btn-success">
    </div>
</form>

</main>
@stop
