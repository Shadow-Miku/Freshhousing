@extends('plantilla')
<?php $inicio = false ?>
@section('contenido')

<h1>Crear</h1>    

<a href="{{ route('menu') }}" class="boton boton-verde">Volver</a>

<form class="formulario" method="POST" action="" enctype="multipart/form-data">
    <fieldset>
        <legend>Información General</legend>

        <label for="titulo">Titulo:</label>
        <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" >

        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" >

        <label for="imagen">Imagen:</label>
        <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion"></textarea>

    </fieldset>

    <fieldset>
        <legend>Información Propiedad</legend>

        <label for="habitaciones">Habitaciones:</label>

        <label for="wc">Baños:</label>
        <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9" >

        <label for="estacionamiento">Estacionamiento:</label>
        <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9" >

    </fieldset>

    <fieldset>
        <legend>Vendedor</legend>

        <select name="vendedor">
            <option value="">-- Seleccione --</option>
        </select>
    </fieldset>

    <input type="submit" value="Crear Propiedad" class="boton boton-verde">
</form>

</main>
@stop