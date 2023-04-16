@extends('empleado.plantillaEmpleado')
<?php $inicio = false ?>
@section('contenido')
<div class="row justify-content-center align-items-center mt-5">
    <div class="col-12 col-md-8 col-lg-6">
      <div class="card border-0 shadow-lg rounded-lg">
        <div class="card-header">
          <div class="card-body bg-primary">
            <div class="card">
              <div class="card-body bg-secondary">
                <div class="container">
                  <form class="formulario" method="POST" action="{{ route('publicacion.destroy', $consultaId->idPub) }}">
                    <fieldset>
                      <legend>¿Eliminar la siguiente publicación?</legend>
                      <div class="form-group">
                        <p>Nombre: {{ $consultaId->titulo }}</p>
                        <p>Descripción: {{ $consultaId->descripcion }}</p>
                        <p>Costo: {{ $consultaId->precio }}</p>
                        <p>Creado el: {{ $consultaId->created_at }}</p>
                        <br>
                        <img src="{{ $consultaId->url }}" style="max-width: 200px;">
                        <br>
                    </div>
                    </fieldset>

                    @csrf
                    @method('delete')

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('publicacion.index') }}" class="btn btn-primary">No, regresa a admin</a>
                      <button type="submit" class="btn btn-danger ">Si, elimínalo</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
