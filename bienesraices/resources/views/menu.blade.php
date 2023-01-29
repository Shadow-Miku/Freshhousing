@extends('plantilla')
<?php $inicio = false ?>
@section('contenido')

<h1 class="display-1 mt-4 mb-4 text-center"> Anuncios publicados </h1>
    
    <form action="#">
        <input type="search" placeholder="Buscar anuncio..." name="filtrar" class="form-control">
          <button type="submit" class="btn btn-primary">
            <i class="bi bi-pen"></i> Buscar publicaciones </button>
      </form>

        <div class="container mb-5 mt-5  gap-2">
            <a href="{{ route('crear') }}" class="boton boton-verde">Publicar anuncio</a>
        </button> 
    
    <table class="propiedades">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titulo</th>
                <th scope="col">Imagen</th>
                <th scope="col">Precio</th>
                <th scope="col">Actualizar anuncio</th>
                <th scope="col">Eliminar anuncio</th>
                </tr>
        </thead>
            <tbody>
                <tr>
                    <th scope="row"> 1</th>
                    <td>aaaaaa</td>
                    <td>aaaaaaaaaaaaaa</td>
                    <td></td>         
                    <td>aaaaaaaaaaaa</td>   
                    <td><button class="boton-amarillo-block" onclick="">
                    <i class="bi bi-pen"></i> Actualizar datos del anuncio
                    </button></td>
                    <td><button class="boton-rojo-block" onclick="">
                    <i class="bi bi-trash2"></i>  Dar de baja el anuncio
                    </button></td>
                </tr>
              </tbody> 
        </table>
        </div>
    </div>

@stop