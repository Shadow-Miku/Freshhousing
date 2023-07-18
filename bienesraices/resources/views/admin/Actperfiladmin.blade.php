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


    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ $error }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>
        @endforeach
    @endif

    <div class="contenedor seccion">
        <h1 class="display-2 text-center mb-5"> Actualizar Información </h1>
        <div class="card-body">
            <form class="formulario" method="post" action="{{route('base.updateadmin', $user = auth()->user()->id)}}" enctype="multipart/form-data">
                @csrf
                {!! method_field('PUT')!!}
                <fieldset style="background-color: #24272480;">
                    <legend>Información General</legend>

                        <label for="imagen">Imagen:</label>
                        <input class="form-control" type="file" id="imagen" accept="image/*" name="fileadmin" required>

                        <img  class="form-control" src="{{ auth()->user()->url }}" class="imagen-small" style="max-width: 200px;">

                        <label class="form-label">Nombre y apellidos:</label>
                        <input type="text" class="form-control" name="name" value="{{$user = auth()->user()->name}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('name') }} </p>

                        <label class="form-label">Usuario:</label>
                        <input type="text" class="form-control" name="username" value="{{$user = auth()->user()->username}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('username') }} </p>


                </fieldset>
                <br>
                <div class="d-flex justify-content-between">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary">Volver</a>
                    <input type="submit" value="Actualizar Información" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>

</div>

@stop
