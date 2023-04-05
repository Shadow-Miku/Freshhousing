@extends('plantilla')
<?php $inicio = false ?>
@section('contenido')

    @if (session()->has('confirmacion'))
        {!!" <script> Swal.fire(
            'Muy bien!',
            'Usuario registrado',
            'success'
          ) </script>"!!}
    @endif

    <div class="container mt-5 col-md-6">

        <h1 class="display-2 text-center mb-5"> Registrar Usuarios </h1>

        <div class="card mb-5">

            <div class="card-body">

                <form class="formulario" method="post" action="{{route('adminUsu.store')}}" enctype="multipart/form-data">
                    @csrf
                    <!--Errores individuales y guardar los datos escritos-->
                    <fieldset style="background-color: #24272480;">
                    <div class="mb-3">
                        <label class="form-label">Nombre y apellidos:</label>
                        <input type="text" class="form-control" name="name" value="{{old('name')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('name') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Correo Electronico:</label>
                        <input type="email" class="form-control"  name="email" value="{{old('email')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('email') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Usuario:</label>
                        <input type="text" class="form-control" name="username" value="{{old('username')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('username') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Contraseña:</label>
                        <input type="text" class="form-control" name="password" value="{{old('password')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('password') }} </p>
                    </div>


                    <div class="mb-3">
                                <label for="text" class="form-label">Roles:</label>
                                <select class="form-select" name="roll" value="{{old('roll')}}" aria-label="Default select example">
                                    <option disabled selected> Seleccione el roll del usuario...</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Empleado">Empleado</option>
                                </select>
                            <p class="text-primary fst-italic" style="color: aqua">
                                {{ $errors->first('roll') }} </p>
                            </div>
                        <div class="mb-3">
                            <label class="form-label">Imagen de perfil</label>
                            <input class="form-control" type="file" name="file" accept="image/*" required>
                        </div>

            </fieldset>

            </div>

            <div class="card-footer">

                <button type="submit" class="boton boton-verde"> Registrar usuario </button>
                <a href="{{route('adminUsu.index')}}" class="btn btn-warning">No, hacer nada </a>
            </form>

            </div>
        </div>
    </div>


@stop
