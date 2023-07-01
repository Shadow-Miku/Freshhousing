@extends('empleado.plantillaEmpleado')
<?php $inicio = false ?>
@section('contenido')

<main class="contenedor seccion">
    <h1>Actualizar Publicacion</h1>

    <form class="formulario" method="POST" action="{{route('publicacion.update',$consultaId->idPub)}}" enctype="multipart/form-data">
        @csrf
        {!! method_field('PUT')!!}
        <fieldset style="background-color: #24272480;">
            <legend>Información General</legend>

            <div class="mb-3" hidden>
                <label class="form-label">Nombre:</label>
                <input type="text" class="form-control" name="autorid" value="{{ $user = auth()->user()->id }}">
                <p class="text-primary fst-italic"> {{ $errors->first('autor') }} </p>
            </div>

            <label for="titulo">Titulo:</label>
            <input class="form-control" type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="{{$consultaId->titulo}}" >

            <label class="form-label" for="titulo">Categoría:</label>
            <select class="form-select" name="categoria" aria-label="Default select example">
                <option disabled selected>Seleccione Venta o Renta...</option>
                <option value="VENTA" @if($consultaId->categoria == 'VENTA') selected @endif>Venta</option>
                <option value="RENTA" @if($consultaId->categoria == 'RENTA') selected @endif>Renta</option>
            </select>

            <label for="precio">Precio:</label>
            <input class="form-control" type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="{{$consultaId->precio}}">

            <label for="imagen">Imagen:</label>
            <input class="form-control" type="file" id="imagen" accept="image/*" name="file" >

            <img  class="form-control" src="{{ $consultaId->url }}" class="imagen-small" style="max-width: 200px;">

            <label for="descripcion">Descripción:</label>
            <textarea class="form-control" id="descripcion" name="descripcion">{{$consultaId->descripcion}}</textarea>

        </fieldset>

        <fieldset style="background-color: #24272480;">
            <legend>Información Propiedad</legend>

            <label class="form-label" for="wc">Tamaño de la propiedad:</label>
            <input class="form-control"  type="number" id="square" name="square" value="{{$consultaId->square}}">

            <label for="habitaciones">Habitaciones:</label>
            <input
            class="form-control"
                type="number"
                id="habitaciones"
                name="habitaciones"
                placeholder="Ej: 3"
                min="1"
                max="9"
                value="{{$consultaId->habitaciones}}"
                >

            <label for="wc">Baños:</label>
            <input class="form-control" type="number" id="wc" name="baños" placeholder="Ej: 3" min="1" max="9" value="{{$consultaId->baños}}">

            <label for="estacionamiento">Estacionamiento:</label>
            <input class="form-control" type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9" value="{{$consultaId->estacionamiento}}">

        </fieldset>
        <br>
        <div class="d-flex justify-content-between">
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Volver</a>
        <input type="submit" value="Actualizar Propiedad" class="btn btn-success">
        </div>
    </form>

</main>
@stop
