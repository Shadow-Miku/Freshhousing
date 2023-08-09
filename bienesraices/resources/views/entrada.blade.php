@extends('plantilla')
<?php $inicio = false ?>
@section('contenido')

    <main class="contenedor seccion contenido-centrado">
        <h1>{{ $consultaIdbdt->titulo }}</h1>


        <picture>
            <source srcset="{{ $consultaIdbdt->url }}" type="image/webp">
            <source srcset="/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="/img/destacada2.jpg" alt="imagen de la propiedad">
        </picture>

        <p class="informacion-meta">Escrito el: <span>{{ $consultaIdbdt->created_at }}</span> por: <span>{{ $consultaIdbdt->autor_username }}</span> </p>


        <div class="resumen-propiedad">
            <p>{{ $consultaIdbdt->descripcion }}</p>
        </div>
        <br>
        <a href="{{ url()->previous() }}" class="btn btn-success">Volver</a>
    </main>
@stop
