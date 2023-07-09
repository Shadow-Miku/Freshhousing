@extends('empleado.plantillaEmpleado')
<?php $inicio = false ?>
@section('contenido')

<!--@if (session()->has('actualizar'))
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
@endif -->
@if (session()->has('confirmacion2'))
    {!!" <script> Swal.fire(
        'Exito',
        'Categoria registrada',
        'success'
    ) </script>"!!}
    @endif

    @if (session()->has('confirmacion3'))
    {!!" <script> Swal.fire(
        'Exito',
        'Publicación registrada',
        'success'
    ) </script>"!!}
@endif 

      <main class="contenedor seccion">
        <h1>Administrador de Publicaciones de trabajos</h1>

        <div class="row justify-content-center mb-4">
            <div class="col-lg-6">
                <form action="">
                    <div class="input-group">
                        <input type="search" placeholder="Buscar publicaciones..." name="filtrar" class="form-control">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i> Buscar</button>
                    </div>
                </form>
            </div>
        </div>

        <button class="btn btn-success" onclick="location.href='{{route('adminbolsadet.createreg')}}'">
        <i class="bi bi-plus"></i> Registrar Publicación de bolsa de trabajo
        </button>
        <button class="btn btn-success" onclick="location.href='{{route('categoria.create')}}'">
        <i class="bi bi-plus"></i> Registrar categoria de trabajo
        </button>

        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Categoria</th>
                    <th>Descripcion</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody style="background-color: #ffffff85;" > <!-- Mostrar los Resultados -->
                @foreach ($consultaPubbt as $consulta)
            <tr>
                <td>{{$consulta->idtrab}}</td>
                <td>{{$consulta->titulo}}</td>
                <td><img src="{{$consulta->url}}"  alt="Foto de la propiedad" class="imagen-small"></td>
                <td>{{$consulta->categoria_nombre}}</td>
                <td>{{$consulta->descripcion}}</td>
                <td>
                    <button class="btn btn-warning" onclick="location.href=''">
                        <i class="bi bi-arrow-clockwise"></i> Actualizar datos de la publicacion
                    </button>
                    <button class="btn btn-danger" onclick="location.href=''">
                        <i class="bi bi-trash2"></i> Dar de baja la publicacion
                    </button>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </main>

@stop
