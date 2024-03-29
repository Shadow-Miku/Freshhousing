<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorvistas extends Controller
{   /*Funciones para cada vista de la pagina*/
    /*Funciones para INDEX*/
    public function showIndex(){
        return view('index');
    }
     /*Funciones para ENTRADA*/
    public function showEntrada(){
        return view('entrada');
    }
     /*Funciones para NOSOTROS*/
    public function showNosotros(){
        return view('nosotros');
    }
    /*Funciones para ANUNCIO*/
    public function showAnuncio(){
        return view('anuncio');
    }
     /*Funciones para ANUNCIOS*/
    public function showAnuncios(){
        return view('anuncios');
    }
     /*Funciones para BASE*/
    public function showBase(){
        return view('base');
    }
     /*Funciones para BLOG*/
    public function showBlog(){
        return view('blog');
    }
     /*Funciones para CONTACTO*/
    public function showContacto(){
        return view('contacto');
    }
    /*Funciones para MENÚ ANUNCIO*/
    public function showMenu(){
    return view('empleado.menu');
    }
    /*Funciones para Crear*/
    public function showCrear(){
        return view('empleado.crear');
        }
    /*Funciones para Login*/
    public function showLogin(){
        return view('login');
        }
    /*Funciones para Login*/
    public function showActualizar(){
        return view('empleado.actualizar');
        }
    public function showBaseAdm(){
        return view('admin.base');        }

    public function showBaseEmp(){
        return view('empleado.base');        }
}
