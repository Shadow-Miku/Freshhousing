@extends('plantilla')
<?php $inicio = false ?>
@section('contenido')

<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
</style>
<div class="container">
<form class="formulario" method="POST" action="{{route('publicacion.destroy', $consultaId->idPub)}}">

    <fieldset>
        <legend>¿Eliminar el siguiente Usuario?</legend>
    <div class="card text-center">

        <div class="card-header">
            <h5 class="text-primary text center">  </h5>
        </div>

        <div class="card-body">
            <label > Nombre: {{$consultaId->titulo}} </p>
            <label > Correo: {{$consultaId->descripcion}} </p>
            <label > Roll: {{$consultaId->precio}} </p>
            <label > Creado el: {{$consultaId->created_at}} </p>
                <img src="{{ $consultaId->url }}" style="max-width: 200px;">
        </div>
    </fieldset>
            @csrf
            @method('delete')
        <div class="card-footer text-muted">
        <button type="submit" class="btn btn-primary  m-1"> Si, eliminalo </button>
        <a href="{{route('publicacion.index')}}" class="btn btn-warning">No, Regresa a admin </a>
        </div>
        </form>
    </div>
</div>
</form>
</div>
@stop
