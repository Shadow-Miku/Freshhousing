@extends('plantilla')
<?php $inicio = false ?>
@section('contenido')

    <main class="contenedor seccion">
        <h1>Contacto</h1>

        <picture>
            <source srcset="/img/destacada3.webp" type="image/webp">
            <source srcset="/img/destacada3.jpg" type="image/jpeg">
            <img loading="lazy" src="/img/destacada3.jpg" alt="Imagen Contacto">
        </picture>

        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-dark alert-dismissible fade show d-flex align-items-center" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                 </svg>
                <strong>{{$error}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endforeach
        @endif

        <h2>Llene el formulario de Contacto</h2>

        <form class="formulario" method="post" action="{{route('contacto.store')}}">
            @csrf
            <fieldset>
                <legend>Información Personal</legend>
                <div>
                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tu Nombre" name="nombre" value="{{old('nombre')}}">
                <p class="text-primary fst-italic"> {{ $errors->first('nombre') }} </p>
                </div>

                <div>
                <label for="email">E-mail</label>
                <input type="email" placeholder="Tu Email" name="email" value="{{old('email')}}">
                <p class="text-primary fst-italic"> {{ $errors->first('email') }} </p>
                </div>

                <div>
                <label for="telefono">Teléfono</label>
                <input type="tel" placeholder="Tu Teléfono" name="telefono" value="{{old('telefono')}}">
                <p class="text-primary fst-italic"> {{ $errors->first('telefono') }} </p>
                </div>

                <div>
                <label for="mensaje">Mensaje:</label>
                <textarea name="mensaje" value="{{old('mensaje')}}"></textarea>
                <p class="text-primary fst-italic"> {{ $errors->first('mensaje') }} </p>
                </div>
            </fieldset>
            <input type="submit" value="Enviar" class="boton-verde">
        </form>
    </main>
@stop