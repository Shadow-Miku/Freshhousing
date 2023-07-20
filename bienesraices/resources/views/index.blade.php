@extends('plantilla')
<?php $inicio = true ?>
@section('contenido')
@php
    use Illuminate\Support\Str;
@endphp

    <main class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

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
                <h3>Precio</h3>
                <br>
                <p>Valoramos la honestidad y la transparencia en todas nuestras transacciones. Nos aseguramos de ofrecer precios justos y competitivos a todos nuestros clientes.</p>
            </div>
            <div class="icono">
                <img src="/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <br>
                <h3>A Tiempo</h3>
                <br>
                <p>Nos comprometemos a cumplir con los plazos acordados y a ofrecer un servicio puntual y eficiente.</p>
            </div>
        </div>
    </main>

    <section class="seccion contenedor">
        <h2>Ejemplos de casas y departamentos</h2>

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

        <div class="alinear-derecha">
            <a href=" {{ route('publicaciones.index') }} " class="btn btn-success">Ver Todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
        <a href=" {{ route('contacto.create') }} " class="btn btn-warning">Contactános</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>
            @foreach ($publicacionesbolsa as $publicacionbt)
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="{{ $publicacionbt->url }}" type="image/webp">
                        <source srcset="/img/blog1.jpg" type="image/jpeg">
                        <img loading="lazy" src="/img/blog1.jpg" alt="Texto Entrada Blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a onclick="', $publicacion->idtrab) }}'">
                        <h4>{{ $publicacionbt->titulo }}</h4>
                        <p class="informacion-meta">Escrito el: <span>{{ $publicacionbt->created_at }}</span> por: <span>{{ $publicacionbt->autorid }}</span> </p>

                        <p>
                        {{ $publicacionbt->descripcion }}
                        </p>
                    </a>
                </div>
            </article>
            @endforeach
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>

            <div class="testimonial">
                <blockquote>
                    El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas mis expectativas.
                </blockquote>
                <p>- Jorge Alberto N.</p>
            </div>
        </section>
    </div>
@stop
