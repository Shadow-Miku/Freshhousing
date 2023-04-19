@extends('empleado.plantillaEmpleado')
<?php $inicio = false ?>
@section('contenido')

<main class="contenedor seccion">
    <h1>Crear Publicacion</h1>
    <div class="card-body">
    <form class="formulario" method="POST" action="{{route('publicacion.store')}}" enctype="multipart/form-data">
        @csrf
        <fieldset style="background-color: #24272480;">
            <legend>Información General</legend>

            <div class="mb-3" hidden>
                <label class="form-label">Nombre:</label>
                <input type="text" class="form-control" name="autorid" value="{{ $user = auth()->user()->id }}">
                <p class="text-primary fst-italic"> {{ $errors->first('autorid') }} </p>
            </div>

            <label class="form-label" for="titulo">Titulo:</label>
            <input class="form-control"  type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" >

            <label class="form-label" for="precio">Precio:</label>
            <input class="form-control"  type="number" id="precio" name="precio" placeholder="Precio Propiedad" >

            <label class="form-label" for="imagen">Imagen:</label>
            <input class="form-control"  type="file" id="imagen" accept="image/*" name="file" required>

            <label class="form-label" for="descripcion">Descripción:</label>
            <textarea class="form-control"  id="descripcion" name="descripcion"></textarea>

        </fieldset>

        <fieldset style="background-color: #24272480;">
            <legend>Información Propiedad</legend>

            <label class="form-label" for="habitaciones">Habitaciones:</label>
            <input
            type="number"
            id="habitaciones"
            name="habitaciones"
            placeholder="Ej: 3"
            min="1"
            max="9"
            >

            <label class="form-label" for="wc">Baños:</label>
            <input class="form-control"  type="number" id="wc" name="baños" placeholder="Ej: 3" min="1" max="9" >

            <label class="form-label" for="estacionamiento">Estacionamiento:</label>
            <input class="form-control"  type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9" >

        </fieldset>
        <br>
        <div class="d-flex justify-content-between">
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Volver</a>
            <input type="submit" value="Crear Propiedad" class="btn btn-success">
        </div>
    </form>

</main>
@stop
