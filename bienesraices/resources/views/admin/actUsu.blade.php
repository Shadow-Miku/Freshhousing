@extends('admin.plantillaAdmin')
<?php $inicio = false ?>
@section('contenido')

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
            <form class="formulario" method="post" action="{{route('adminUsu.update', $consultaId->id)}}">
                @csrf
                {!! method_field('PUT')!!}
                <fieldset style="background-color: #24272480;">
                    <legend>Información General</legend>

                        <label class="form-label">Nombre y apellidos:</label>
                        <input type="text" class="form-control" name="name" value="{{$consultaId->name}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('name') }} </p>

                        <label class="form-label">Correo Electronico:</label>
                        <input type="email" class="form-control"  name="email" value="{{$consultaId->email}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('email') }} </p>

                        <label class="form-label">Usuario:</label>
                        <input type="text" class="form-control" name="username" value="{{$consultaId->username}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('username') }} </p>

                        <label class="form-label">Contraseña:</label>
                        <input type="text" class="form-control" name="password" value="{{$consultaId->password}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('password') }} </p>

                        <label for="text" class="form-label">Roles:</label>
                        <select class="form-select" name="roll" value="{{old('roll')}}">
                            <option value="Admin" @if($consultaId->roll == 'Admin') selected @endif>Administrador</option>
                            <option value="Empleado" @if($consultaId->roll == 'Empleado') selected @endif>Empleado</option>
                        </select>
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
