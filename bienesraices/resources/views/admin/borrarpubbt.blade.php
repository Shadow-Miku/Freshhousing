@extends('admin.plantillaAdmin')
<?php $inicio = false ?>
@section('contenido')
<div class="row justify-content-center align-items-center mt-5">
    <div class="col-12 col-md-8 col-lg-6">
        <div class="card border-0 shadow-lg rounded-lg">
            <div class="card-header bg-primary text-center">
                <h5 class="text-white">Eliminar Publicación</h5>
            </div>
            <div class="card-body bg-secondary">
                <form class="formulario" method="POST" action="{{route('adminbolsadet.destroy', $consultaId->idtrab)}}">
                    <fieldset>
                        <legend>¿Eliminar la siguiente publicacion?</legend>
                        <div class="form-group">
                            <label>Titulo: {{$consultaId->titulo}}</label>
                            <label>Categoria: {{$consultaId->categoriaid}}</label>
                            <label>Imagen: {{$consultaId->url}}</label>
                            <label>Descripcion: {{$consultaId->descripcion}}</label>
                        </div>
                    </fieldset>
                    @csrf
                    @method('delete')
                    <div class="d-flex justify-content-between">
                        <a href="{{ url()->previous() }}" class="btn btn-primary">Volver</a>
                        <button type="submit" class="btn btn-danger m-1">Si, elimínalo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
