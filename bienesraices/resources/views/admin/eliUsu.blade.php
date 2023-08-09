@extends('admin.plantillaAdmin')
<?php $inicio = false ?>
@section('contenido')
<div class="row justify-content-center align-items-center mt-5">
    <div class="col-12 col-md-8 col-lg-6">
        <div class="card border-0 shadow-lg rounded-lg">
            <div class="card-header bg-primary text-center">
                <h5 class="text-white">Eliminar Usuario</h5>
            </div>
            <div class="card-body bg-secondary">
                <form class="formulario" method="POST" action="{{route('adminUsu.destroy', $consultaId->id)}}">
                    <fieldset>
                        <legend>¿Eliminar el siguiente Usuario?</legend>
                        <div class="form-group">
                            <label>Nombre: {{$consultaId->name}}</label>
                            <img src="{{ $consultaId->url }}" style="max-width: 200px;">
                            <label>Correo: {{$consultaId->email}}</label>
                            <label>Roll: {{$consultaId->roll}}</label>
                            <label>Creado el: {{$consultaId->created_at}}</label>
                        </div>
                    </fieldset>
                    @csrf
                    @method('delete')
                    <div class="d-flex justify-content-between">
                        <a href="{{ url()->previous() }}" class="btn btn-primary">Cancelar</a>
                        <button type="submit" class="btn btn-danger m-1">Confirmar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
