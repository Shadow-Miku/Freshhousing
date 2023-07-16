@extends('plantilla')
<?php $inicio = false ?>
@section('contenido')

    <main class="contenedor seccion contenido-centrado">
        <h1>Nuestro Blog</h1>
        @foreach ($publicacionesbt as $publicacion)
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="{{ $publicacion->url }}" type="image/webp">
                    <source srcset="{{ $publicacion->url }}" type="image/jpeg">
                    <img loading="lazy" src="{{ $publicacion->url }}" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="  ">
                    <h4>{{ $publicacion->titulo }}</h4>
                    <p>Escrito el: {{ $publicacion->created_at }} <span>titulo</span> por: <span>{{ $publicacion->autorid }}</span> </p>

                    <p>
                    {{ $publicacion->descripcion }}
                    </p>
                </a>
            </div>
        </article>
        @endforeach
    </main>
@stop