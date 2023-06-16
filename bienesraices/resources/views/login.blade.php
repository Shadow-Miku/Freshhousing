@extends('plantilla')
<?php $inicio = false ?>
@section('contenido')

<main class="contenedor seccion contenido-centrado">
    <h1>Iniciar Sesión</h1>

    <form method="POST" class="formulario" action="welcome">
        @csrf
        <fieldset>
            <legend>Email y Password</legend>

            <label for="email">E-mail</label>
            <input type="text" name="email" class="form-controll" id="exampleInputEmail1" aria-describeby="emailHelp" value="{{old('username')}}" required>

            <label for="password">Password</label>
            <input type="password" name="password" class="form-controll" id="exampleInputPassword1" value="{{old('password')}}" required>
        </fieldset>

        <a href=" {{ route('adminUsu.index') }} ">Pruebas</a>
        <button type="submit" class="btn btn-success bi bi-arrow-right"  class="boton boton-verde">Iniciar Sesión</button>
    </form>
</main>

@stop
