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

        <form action="#">
            <input type="search" placeholder="Buscar anuncio..." name="filtrar" class="form-control">
              <button type="submit" class="btn btn-primary">
                <i class="bi bi-pen"></i> Buscar publicaciones </button>
        </form>

        <a href="{{ route('publicacion.create') }}" class="boton boton-verde">Nueva Propiedad</a>


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
                <td><img src="{{ $consulta->url }}"  alt="Foto de la propiedad" class="imagen-tabla"></td>
                <td>{{$consulta->precio}}</td>

                <td>
                    <button class="btn btn-warning" onclick="location.href='{{ route('publicacion.edit', $consulta->idPub) }}'">
                        <i class="bi bi-pen"></i> Actualizar datos de la publicacion
                    </button>
                    <button class="btn btn-danger" onclick="location.href='{{ route('publicacion.show', $consulta->idPub) }}'">
                        <i class="bi bi-pen"></i> Dar de baja la publicacion
                    </button>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </main>

@stop


