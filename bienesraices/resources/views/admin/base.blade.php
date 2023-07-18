@extends('admin.plantillaAdmin')

<?php $inicio = false ?>
@section('contenido')

@if (session()->has('actualizar10'))
    {!!" <script> Swal.fire(
        'Exito',
        'Usuario actualizado',
        'success'
    ) </script>"!!}
@endif

<main class="contenedor seccion">
    <div class="row justify-content-center align-items-center mt-5">
        <div class="col-12 col-md-8 col-lg-6">
            <div class="bg-primary text-white rounded-lg p-4">
                <h4 class="font-weight-bold mb-4">¡Bienvenid@, {{ auth()->user()->name }}!</h4>
                <p class="lead">Estás en el panel de control de tu cuenta.
                    Aquí puedes levantar publicaciones y mantenerlas actualizadas.</p>
                <div class="mt-4">
                    <h5 class="font-weight-bold">Información de la cuenta:</h5>
                    <ul>
                        <li><strong>Nombre:</strong> {{ auth()->user()->name }}</li>
                        <li><strong>Email:</strong> {{ auth()->user()->email }}</li>
                        <li><strong>Roll:</strong> {{ auth()->user()->roll }}</li>
                    </ul>
                </div>
                <div class="mt-4">
                    <h5 class="font-weight-bold">Acciones disponibles:</h5>
                    <ul>
                        <li>Levantar publicaciones de bolsa de trabajo</li>
                        <li>Administrar Usuarios</li>
                        <li>Eliminar publicaciones</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
