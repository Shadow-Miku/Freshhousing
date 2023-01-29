@extends('plantilla')
<?php $inicio = false ?>
@section('contenido')

<h1 class="display-1 mt-4 mb-4 text-center"> Anuncios publicados </h1>
    
    

      <main class="contenedor seccion">
        <h1>Administrador de Bienes Raices</h1>

        <form action="#">
            <input type="search" placeholder="Buscar anuncio..." name="filtrar" class="form-control">
              <button type="submit" class="btn btn-primary">
                <i class="bi bi-pen"></i> Buscar publicaciones </button>
        </form>

        <a href="{{ route('crear') }}" class="boton boton-verde">Nueva Propiedad</a>


        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody> <!-- Mostrar los Resultados -->
               
                <tr>
                    <td> 1 </td>
                    <td> Casa en el lago </td>
                    <td> <img src="/img/destacada.jpg" class="imagen-tabla"> </td>
                    <td>$ 3,000,00</td>
                    <td>
                        <form method="POST" class="w-100">

                            <input type="hidden" name="id" value="">

                            <input type="submit" class="boton-rojo-block" value="Eliminar"> <!-- Mostrar los Resultados -->
                        </form>
                        
                        <a href="{{ route('actualizar') }}" class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>

@stop