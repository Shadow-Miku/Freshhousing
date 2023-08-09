@extends('plantilla')
<?php $inicio = false ?>
@section('contenido')
@php
    use Illuminate\Support\Str;
@endphp
    <main class="contenedor seccion">

        <h2>Publicaciones</h2>

        <div class="contenedor-anuncios">
        @foreach ($publicaciones as $publicacion)
            <div class="anuncio">
                <picture class="imagen">
                    <source srcset="{{ $publicacion->url }}">
                    <source srcset="/img/anuncio1.jpg" type="image/jpeg">
                    <img loading="lazy" src="/img/anuncio1.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h1>{{ $publicacion->titulo }}</h1>
                    <p>{{ Str::limit($publicacion->descripcion, $limit = 100, $end = '...') }}</p>
                    <p class="categoria">{{ $publicacion->categoria }}</p>
                    <p class="precio">${{ number_format($publicacion->precio, 2, '.', ',') }} {{$publicacion->moneda}}</p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" loading="lazy" src="/img/icono_wc.svg" alt="icono wc">
                            <p>{{ $publicacion->baños }}</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p>{{ $publicacion->estacionamiento }}</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="/img/icono_dormitorio.svg" alt="icono habitaciones">
                            <p>{{ $publicacion->habitaciones }}</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="/img/area.png" alt="icono habitaciones"  width="46" height="40">
                            <p>{{ $publicacion->square }}</p>
                        </li>
                    </ul>

                    <a class="boton-amarillo-block" onclick="location.href='{{ route('publi.show', $publicacion->idPub) }}'">
                        Ver Propiedad
                    </a>
                </div><!--.contenido-anuncio-->
            </div><!--anuncio-->
            @endforeach
        </div> <!--.contenedor-anuncios-->
    </main>
@stop
