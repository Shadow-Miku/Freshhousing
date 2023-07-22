@extends('plantilla')
<?php $inicio = false ?>
@section('contenido')
<head>
    <meta charset="utf-8">
    <title>Change a map's style</title>
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.js"></script>
    <style>
    body { margin: 0; padding: 0; }
    #map { position: absolute; top: 0; bottom: 0; width: 100%; }
    </style>
    </head>
    <body>
    <style>
    #menu {
    position: absolute;
    background: #efefef;
    padding: 10px;
    font-family: 'Open Sans', sans-serif;
    }
</style>
<main class="contenedor seccion">
    <h1>Sobre nuestra Empresa de Bienes Raíces</h1>
    <div class="contenido-nosotros">
        <div class="imagen">
            <picture>
                <source srcset="/img/nosotros.webp" type="image/webp">
                <source srcset="/img/nosotros.jpg" type="image/jpeg">
                <img loading="lazy" src="/img/nosotros.jpg" alt="Sobre Nosotros">
            </picture>
        </div>
        <div class="texto-nosotros">
            <blockquote>
                25 Años de experiencia en el mercado
            </blockquote>

            <p>Somos una empresa de bienes raíces especializada en la compra, venta y renta de propiedades de alta calidad. Nos enorgullecemos de brindar un servicio excepcional y personalizado a cada uno de nuestros clientes.</p>

            <p>Contamos con un equipo de expertos en el mercado inmobiliario que se encargan de ofrecer soluciones únicas a las necesidades de cada cliente. Nuestra misión es superar las expectativas de nuestros clientes y asegurarnos de que tengan una experiencia satisfactoria al trabajar con nosotros.</p>
        </div>
    </div>
</main>

<section class="contenedor seccion">
    <h1>Nuestros Valores</h1>
    <br>
    <div class="iconos-nosotros">

        <div class="icono">
            <img src="/img/icono1.svg" alt="Icono seguridad" loading="lazy">
            <br>
            <h3>Seguridad</h3>
            <br>
            <p>En nuestra empresa, la seguridad es nuestra máxima prioridad. Nos aseguramos de que todas las transacciones sean seguras y confidenciales.</p>
        </div>

        <div class="icono">
            <img src="/img/icono2.svg" alt="Icono Precio" loading="lazy">
            <br>
            <h3>Precio justo</h3>
            <br>
            <p>Valoramos la honestidad y la transparencia en todas nuestras transacciones. Nos aseguramos de ofrecer precios justos y competitivos a todos nuestros clientes.</p>
        </div>

        <div class="icono">
            <img src="/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
            <br>
            <h3>Puntualidad</h3>
            <br>
            <p>Nos comprometemos a cumplir con los plazos acordados y a ofrecer un servicio puntual y eficiente.</p>
        </div>

    </div>
</section>

<style>
    .mapa {
        width: 80%;
        height: 80%;
        margin: 0 auto;
        margin-bottom: 2rem;
    }
</style>

<section class="mapa">
    <h1>Nos puedes encontrar aquí</h1>
    <x-maps-leaflet
        :centerPoint="['lat' => 20.58806, 'long' => -100.38806]"
        :zoomLevel="16"
        :markers="[['lat' => 20.589872, 'long' => -100.3870118]]"
    >
    </x-maps-leaflet>
</section>




@stop
