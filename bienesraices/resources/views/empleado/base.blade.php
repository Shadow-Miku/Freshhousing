@extends('plantilla')

<?php $inicio = false ?>
@section('contenido')
<main class="contenedor seccion">
<h1 class="titulo-principal">Panel de Control</h1>
<div class="row justify-content-center align-items-center mt-5">
<div class="col-12 col-md-8 col-lg-6">
<div class="card bg-light border-0 shadow-lg rounded-lg">
<div class="card-header bg-primary text-white py-3">
<h4 class="font-weight-bold mb-0">¡Bienvenido, {{ auth()->user()->name }}!</h4>
</div>
<div class="card-body">
<p class="card-text lead mb-4">Estás en el panel de control de tu cuenta. Aquí puedes levantar tus publicaciones y mantener tu perfil actualizado.</p>
<a href="{{route('publicacion.index')}}" class="btn btn-primary px-5 py-3 rounded-pill">Levantar publicaciones</a>
</div>
</div>
</div>
</div>
</main>
@stop