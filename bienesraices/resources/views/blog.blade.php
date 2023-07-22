@extends('plantilla')
<?php $inicio = false ?>
@section('contenido')

    <main class="contenedor seccion contenido-centrado">
        <h1>Bolsa de trabajo</h1>
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
                <a onclick="location.href='{{ route('publibdt.show', $publicacion->idtrab) }}'">
                    <h4>{{ $publicacion->titulo }}</h4>
                    <p>Escrito el: {{ $publicacion->created_at }} por: <span>{{ $publicacion->autor_username }}</span> </p>
                    <p>
                    {{ $publicacion->descripcion }}
                    </p>
                </a>
            </div>
        </article>
        @endforeach
    </main>
@stop
