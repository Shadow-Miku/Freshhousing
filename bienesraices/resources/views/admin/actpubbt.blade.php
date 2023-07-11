@extends('empleado.plantillaEmpleado')
<?php $inicio = false ?>
@section('contenido')

<main class="contenedor seccion">
    <h1>Actualizar Publicación</h1>
    <div class="card-body">
    <form class="formulario" method="POST" action="{{ route('adminbolsadet.update', $bolsadt->idtrab) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <fieldset style="background-color: #24272480;">
        <legend>Información de la Publicación</legend>

        <div class="mb-3" hidden>
            <label class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="autorid" value="{{ $user = auth()->user()->id }}">
            <p class="text-primary fst-italic"> {{ $errors->first('autorid') }} </p>
        </div>

        <label class="form-label" for="titulo">Título:</label>
        <input class="form-control"  type="text" id="titulop" name="titulo" placeholder="Título Del Trabajo" value="{{ $bolsadt->titulo }}" >

        <label for="categoriaid">Categoría:</label>
        <select name="categoriaid" id="categoriaid" required>
        @foreach ($Categorias as $categoria)
            <option value="{{ $categoria->idcategoria }}" {{ $categoria->idcategoria == $bolsadt->categoriaid ? 'selected' : '' }}>{{ $categoria->nombre_categoria }}</option>
        @endforeach
        </select>

        <label class="form-label" for="imagen">Imagen:</label>
        <input class="form-control"  type="file" id="imagen" accept="image/*" name="file">

        <label class="form-label" for="descripcion">Descripción:</label>
        <textarea class="form-control"  id="descripcion" name="descripcion">{{ $bolsadt->descripcion }}</textarea>

    </fieldset>
    <br>
    <div class="d-flex justify-content-between">
        <a href="{{ url()->previous() }}" class="btn btn-secondary">Volver</a>
        <input type="submit" value="Actualizar Publicación" class="btn btn-success">
    </div>
</form>

</main>
@stop
