@extends('plantilla')
<?php $inicio = false ?>
@section('contenido')

    <main class="contenedor seccion contenido-centrado">
        <h1>{{ $consultaId->titulo }}</h1>

        <picture>
            <source srcset="{{ $consultaId->url }}" type="image/webp">
            <source srcset="/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="/img/destacada.jpg" alt="imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">${{ $consultaId->precio }}</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="/img/icono_wc.svg" alt="icono wc">
                    <p>{{ $consultaId->baños }}</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>{{ $consultaId->estacionamiento }}</p>
                </li>
                <li>
                    <img class="icono"  loading="lazy" src="/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p>{{ $consultaId->habitaciones }}</p>
                </li>
            </ul>

            <p>{{ $consultaId->descripcion }}</p>

        </div>
    </main>
@stop