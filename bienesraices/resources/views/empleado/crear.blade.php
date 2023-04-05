@extends('plantilla')
<?php $inicio = false ?>
@section('contenido')

<h1>Crear</h1>

<a href="{{ route('publicacion.index') }}" class="boton boton-verde">Volver</a>

<form class="formulario"s method="POST" action="{{route('publicacion.store')}}" enctype="multipart/form-data">
    @csrf
    <fieldset>
        <legend>Información General</legend>

        <div class="mb-3" hidden>
            <label class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="autorid" value="{{ $user = auth()->user()->id }}">
            <p class="text-primary fst-italic"> {{ $errors->first('autorid') }} </p>
        </div>

        <label for="titulo">Titulo:</label>
        <input class="form-control"  type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" >

        <label for="precio">Precio:</label>
        <input class="form-control"  type="number" id="precio" name="precio" placeholder="Precio Propiedad" >

        <label for="imagen">Imagen:</label>
        <input class="form-control"  type="file" id="imagen" accept="image/*" name="file" required>

        <label  for="descripcion">Descripción:</label>
        <textarea class="form-control"  id="descripcion" name="descripcion"></textarea>

    </fieldset>

    <fieldset>
        <legend>Información Propiedad</legend>

        <label for="habitaciones">Habitaciones:</label>
        <input
        type="number"
        id="habitaciones"
        name="habitaciones"
        placeholder="Ej: 3"
        min="1"
        max="9"
        >

        <label for="wc">Baños:</label>
        <input class="form-control"  type="number" id="wc" name="baños" placeholder="Ej: 3" min="1" max="9" >

        <label for="estacionamiento">Estacionamiento:</label>
        <input class="form-control"  type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9" >

    </fieldset>

    <input type="submit" value="Crear Propiedad" class="boton boton-verde">
</form>

</main>
@stop
