@extends('plantilla')
<?php $inicio = false ?>
@section('contenido')

    <main class="contenedor seccion">
        <h1>Panel de control</h1>
        <li class="w-100">
            <a>Hola {{ auth()->user()->name }}</a>
            <a href=" {{route('publicacion.index')}} " class="nav-link px-0"> <span class="d-none d-sm-inline"> &nbsp; &nbsp; Levantar publicaciones </span> </a>

        </li>
    </main>
@stop
