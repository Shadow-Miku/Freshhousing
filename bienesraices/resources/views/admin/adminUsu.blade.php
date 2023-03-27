@extends('admin.plantillaAdmin')

@section('contenido')

@if (session()->has('actualizar'))
    {!!" <script> Swal.fire(
        'Siuuuuuuuu!',
        'Usuario actualizado',
        'success'
    ) </script>"!!}
@endif

@if (session()->has('elimina'))
    {!!" <script> Swal.fire(
        'F',
        'Usuario eliminado',
        'success'
    ) </script>"!!}
@endif

@if (session()->has('confirmacion'))
    {!!" <script> Swal.fire(
        'Siuuuuuuuu!',
        'Usuario registrado',
        'success'
    ) </script>"!!}
@endif

<div class="container">
<h1 class="display-4 text-center mt-4 mb-4">Usuarios registrados</h1>
<div class="row justify-content-center mb-4">
    <div class="col-lg-6">
        <form action="{{route('adminUsu.index')}}">
            <div class="input-group">
                <input type="search" placeholder="Buscar usuario..." name="filtrar" class="form-control">
                <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i> Buscar</button>
            </div>
        </form>
    </div>
</div>

    <div class="container my-5">
      <button class="boton boton-verde" onclick="location.href='{{ route('adminUsu.create') }}'">
        <i class="bi bi-plus"></i> Registrar otro usuario
      </button>

      <table class="propiedades">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Foto</th>
            <th>Email</th>
            <th>Usuario</th>
            <th>Rol</th>
            <th>Modificar</th>
            <th>Eliminar</th>
          </tr>
        </thead>

        <tbody style="background-color: #ffffff85;" class="text-primary">
          @foreach ($consultaUsu as $consulta)
            <tr>
              <th scope="row">{{ $consulta->id }}</th>
              <td>{{ $consulta->name }}</td>
              <td><img src="{{ $consulta->url }}" alt="Foto del usuario" width="100" class="imagen-tabla"></td>
              <td>{{ $consulta->email }}</td>
              <td>{{ $consulta->username }}</td>
              <td>{{ $consulta->roll }}</td>
              <td hidden>
                @if($consulta->roll == 'Admin')
                  Admin
                @elseif($consulta->roll == 'Empleado')
                  Empleado
                @else
                  Sin rol
                @endif
              </td>
              <td>
                <button class="boton-amarillo-block" onclick="location.href='{{ route('adminUsu.edit', $consulta->id) }}'">
                  <i class="bi bi-pen"></i> Actualizar datos del {{ $consulta->roll }}
                </button>
              </td>

              <td>
                @if ($consulta->roll == 'Empleado' )
                <button type="button" class="boton-rojo-block" onclick="location.href='{{ route('adminUsu.show', $consulta->id) }}'">
                  <i class="bi bi-trash2"></i> Dar de baja {{ $consulta->roll }}
                </button>
                @else
                <button type="button" class="boton-rojo-block" disabled>
                  <i class="bi bi-trash2"></i> Dar de baja {{ $consulta->roll }}
                </button>
                @endif
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>

    </div>
  </div>

@stop
