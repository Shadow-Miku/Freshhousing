@extends('empleado.plantillaEmpleado')
<?php $inicio = false ?>
@section('contenido')


      <main class="contenedor seccion">
        <h1>Mensajes</h1>

        <div class="row justify-content-center mb-4">
            <div class="col-lg-6">
                <form action="{{route('mensajes.index')}}">
                    <div class="input-group">
                        <input type="search" placeholder="Filtrar mensajes..." name="filtrar" class="form-control">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i> Buscar</button>
                    </div>
                </form>
            </div>
        </div>

        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Mensaje</th>
                </tr>
            </thead>

            <tbody style="background-color: #ffffff85;" > <!-- Mostrar los Resultados -->
                @foreach ($consultaMsg as $consulta)
            <tr>
                <td>{{$consulta->idcontacto}}</td>
                <td>{{$consulta->nombre}}</td>
                <td>{{$consulta->email}}</td>
                <td>{{$consulta->telefono}}</td>
                <td>{{$consulta->mensaje}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </main>

@stop
