@extends('plantilla')
<?php $inicio = false ?>
@section('contenido')

<form class="formulario" method="POST" action="{{route('adminUsu.destroy', $consultaId->id)}}">

        <fieldset>
            <legend>¿Eliminar el siguiente Usuario?</legend>
        <div class="card text-center">

            <div class="card-header">
                <h5 class="text-primary text center">  </h5>
            </div>

            <div class="card-body">
                <label > Nombre: {{$consultaId->name}} </p>
		        <label > Correo: {{$consultaId->email}} </p>
		        <label > Roll: {{$consultaId->roll}} </p>
                <label > Creado el: {{$consultaId->created_at}} </p>
            </div>
        </fieldset>
                @csrf
                @method('delete')
            <div class="card-footer text-muted">
            <button type="submit" class="btn btn-primary  m-1"> Si, eliminalo </button>
            <a href="{{route('adminUsu.index')}}" class="btn btn-warning">No, Regresa a admin </a>
            </div>
            </form>
        </div>
    </div>
</form>
@stop
