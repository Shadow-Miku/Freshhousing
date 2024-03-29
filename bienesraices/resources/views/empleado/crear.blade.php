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
            <input class="form-control"  type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="{{old('titulo')}}" required>

            <label class="form-label" for="titulo">Categoria:</label>
            <select class="form-select" name="categoria" value="{{old('categoria')}}" aria-label="Default select example">
                <option disabled selected> Seleccione Venta o Renta...</option>
                    <option value="Venta">Venta</option>
                    <option value="Renta">Renta</option>
            </select>

            <label class="form-label" for="precio">Precio:</label>
            <input class="form-control"  type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="{{old('precio')}}"  required>

            <label class="form-label" for="titulo">Moneda:</label>
            <select class="form-select" name="moneda" value="{{old('moneda')}}" aria-label="Default select example">
                <option disabled selected> Seleccione el tipo de divisa...</option>
                    <option value="MX">Peso Mexicano</option>
                    <option value="RUB">Rublo Ruso</option>
                    <option value="USD">Dolar Estadounidense</option>
                    <option value="JPY">Yen Japones</option>
                    <option value="EUR">Euro</option>
            </select>

            <label class="form-label" for="imagen">Imagen:</label>
            <input class="form-control"  type="file" id="imagen" accept="image/*" name="file" required>

            <label class="form-label" for="descripcion">Descripción:</label>
            <textarea class="form-control"  id="descripcion" name="descripcion" value="{{old('descripcion')}}" required></textarea>

        </fieldset>

        <fieldset style="background-color: #24272480;">
            <legend>Información Propiedad</legend>

            <label class="form-label" for="wc">Tamaño de la propiedad:</label>
            <input class="form-control"  type="number" id="square" name="square" placeholder="Tamaño del terreno de la propiedad" value="{{old('square')}}" required>

            <label class="form-label" for="habitaciones">Habitaciones:</label>
            <input
            type="number"
            id="habitaciones"
            name="habitaciones"
            placeholder="Ej: 3"
            min="1"
            max="9"
            value="{{old('habitaciones')}}"
            required
            >

            <label class="form-label" for="wc">Baños:</label>
            <input class="form-control"  type="number" id="wc" name="baños" placeholder="Ej: 3" min="1" max="9" value="{{old('baños')}}" required>

            <label class="form-label" for="estacionamiento">Estacionamiento:</label>
            <input class="form-control"  type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9" value="{{old('estacionamiento')}}" required>

        </fieldset>
        <br>
        <div class="d-flex justify-content-between">
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Volver</a>
            <input type="submit" value="Guardar" class="btn btn-success">
        </div>
    </form>

</main>
@stop
