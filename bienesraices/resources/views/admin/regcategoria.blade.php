@extends('admin.plantillaAdmin')
<?php $inicio = false ?>
@section('contenido')

@if (session()->has('confirmacion2'))
        {!!" <script> Swal.fire(
            'Muy bien!',
            'Usuario registrado',
            'success'
          ) </script>"!!}
    @endif


<main class="contenedor seccion">
    <h1>Crear Categoria</h1>
    <div class="card-body">
    <form class="formulario" method="POST" action="{{route('categoria.store')}}" enctype="multipart/form-data">
        @csrf
        <fieldset style="background-color: #24272480;">
            <legend>Información de la categoria</legend>

            <label class="form-label" for="titulo">Categoria del trabajo:</label>
            <input class="form-control"  type="text" id="nombrecat" name="nombrecat" placeholder="Tipo de trabajo" >

        </fieldset>
        <br>
        <div class="d-flex justify-content-between">
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Volver</a>
            <input type="submit" value="Guardar" class="btn btn-success">
        </div>
    </form>

</main>
@stop
