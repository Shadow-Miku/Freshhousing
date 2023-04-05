@extends('plantilla')
<?php $inicio = false ?>
@section('contenido')

    <main class="contenedor seccion">
        <h1>Panel de control</h1>
        <li class="w-100">

            <a href=" {{route('adminUsu.index')}} " class="nav-link px-0"> <span class="d-none d-sm-inline"> &nbsp; &nbsp; Gestionar Usuarios </span> </a>

        </li>
    </main>
@stop
