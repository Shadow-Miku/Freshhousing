@extends('empleado.plantillaEmpleado')
<?php $inicio = false ?>
@section('contenido')

@if (session()->has('actualizar'))
    {!!" <script> Swal.fire(
        'Exito',
        'Publicación actualizada',
        'success'
    ) </script>"!!}
@endif

@if (session()->has('elimina'))
    {!!" <script> Swal.fire(
        'Completado',
        'Publicación eliminada',
        'success'
    ) </script>"!!}
@endif

@if (session()->has('confirmacion'))
    {!!" <script> Swal.fire(
        'Exito',
        'Publicación registrada',
        'success'
    ) </script>"!!}
@endif

      <main class="contenedor seccion">
        <h1>Administrador de Publicaciones</h1>

        <div class="row justify-content-center mb-4">
            <div class="col-lg-6">
                <form action="{{route('publicacion.index')}}">
                    <div class="input-group">
                        <input type="search" placeholder="Buscar publicaciones..." name="filtrar" class="form-control">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i> Buscar</button>
                    </div>
                </form>
            </div>
        </div>

        <a href="{{ route('publicacion.create') }}" class="btn btn-success bi bi-plus-lg">Nueva Propiedad</a>


        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody style="background-color: #ffffff85;" > <!-- Mostrar los Resultados -->
                @foreach ($consultaPub as $consulta)
            <tr>
                <td>{{$consulta->idPub}}</td>
                <td>{{$consulta->titulo}}</td>
                <td><img src="{{ $consulta->url }}"  alt="Foto de la propiedad" class="imagen-small"></td>
                <td>${{ number_format($consulta->precio, 2, '.', ',') }} {{$consulta->moneda}}</td>

                <td>
                    <button class="btn btn-warning" onclick="location.href='{{ route('publicacion.edit', $consulta->idPub) }}'">
                        <i class="bi bi-arrow-clockwise"></i> Actualizar datos de la publicacion
                    </button>
                    <button class="btn btn-danger" onclick="location.href='{{ route('publicacion.show', $consulta->idPub) }}'">
                        <i class="bi bi-trash2"></i> Dar de baja la publicacion
                    </button>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </main>

@stop
