<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorvistas;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InmueblesController;
use App\Http\Controllers\contactoController;
use App\Http\Controllers\BolsadtController;
use App\Http\Controllers\categoriabolsadtController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [HomeController::class, 'index'])->name('index');


//Route::get('/', [controladorvistas::class,'showIndex'])->name('index');

Route::get('entrada', [controladorvistas::class,'showEntrada'])->name('entrada');

Route::get('nosotros', [controladorvistas::class,'showNosotros'])->name('nosotros');

Route::get('anuncio', [controladorvistas::class,'showAnuncio'])->name('anuncio');

Route::get('anuncios', [controladorvistas::class,'showAnuncios'])->name('anuncios');

Route::get('base', [controladorvistas::class,'showBase'])->name('base');

Route::get('blog', [controladorvistas::class,'showBlog'])->name('blog');



Route::get('menu', [controladorvistas::class,'showMenu'])->name('menu');

Route::get('crear', [controladorvistas::class,'showCrear'])->name('crear');

Route::get('actualizar', [controladorvistas::class,'showActualizar'])->name('actualizar');

Route::get('login', [controladorvistas::class,'showLogin'])->name('login');




Route::get('welcome',[LoginController::class,'show']);
Route::post('welcome',[LoginController::class,'login']);

Route::get('base', [controladorvistas::class,'showBaseAdm'])->name('admin.base');

/*
|--------------------------------------------------------------------------
| CRUD USUARIOS JEFE
|--------------------------------------------------------------------------
*/

//index
Route::get('admin.adminUsu',[UserController::class,'index'])->name('adminUsu.index');

//Create
Route::get('admin.adminUsu/create', [UserController::class,'create'])->name('adminUsu.create');

//store
Route::post('admin.adminUsu', [UserController::class,'store'])->name('adminUsu.store');

//Edit
Route::get('admin.adminUsu/{id}/edit',[UserController::class,'edit'])->name('adminUsu.edit');

//Editempleado
Route::get('empleado.Actperfilempleado/{id}/edit',[UserController::class,'editempleado'])->name('base.editemp');

//Update
Route::put('admin.adminUsu/{id}',[UserController::class,'update'])->name('adminUsu.update');

//Updateempleado
Route::put('empleado.Actperfilempleado/{id}',[UserController::class,'updateempleado'])->name('base.updateempleado');

//Editadmin
Route::get('admin.Actperfiladmin/{id}/edit',[UserController::class,'editadmin'])->name('base.editadm');

//Updateadmin
Route::put('admin.Actperfiladmin/{id}',[UserController::class,'updateadmin'])->name('base.updateadmin');

//show
Route::get('admin.adminUsu/{id}/show',[UserController::class,'show'])->name('adminUsu.show');

//destroy
Route::delete('admin.adminUsu/{id}',[UserController::class,'destroy'])->name('adminUsu.destroy');


/*
|--------------------------------------------------------------------------
| CRUD Publicaciones empleados y mensajes
|--------------------------------------------------------------------------
*/

//index
Route::get('empleado.menu',[InmueblesController::class,'index'])->name('publicacion.index');

//Create
Route::get('empleado.menu/create', [InmueblesController::class,'create'])->name('publicacion.create');

//store
Route::post('empleado.menu', [InmueblesController::class,'store'])->name('publicacion.store');

//Edit
Route::get('empleado.menu/{id}/edit',[InmueblesController::class,'edit'])->name('publicacion.edit');

//Update
Route::put('empleado.menu/{id}',[InmueblesController::class,'update'])->name('publicacion.update');

//show
Route::get('empleado.menu/{id}/show',[InmueblesController::class,'show'])->name('publicacion.show');

//destroy
Route::delete('empleado.menu/{id}',[InmueblesController::class,'destroy'])->name('publicacion.destroy');


//Mensajes
Route::get('empleado.mensajes',[contactoController::class,'index'])->name('mensajes.index');


/*
|--------------------------------------------------------------------------
| Vistas de los clientes
|--------------------------------------------------------------------------
*/

//index
Route::get('anuncios',[InmueblesController::class,'indexanuncios'])->name('publicaciones.index');
//Create
Route::get('anuncios/create', [InmueblesController::class,'createanuncios'])->name('publi.create');
//show
Route::get('anuncio/{id}/paginaPublicacion',[InmueblesController::class,'paginaPublicacion'])->name('publi.show');
//index
Route::get('index',[InmueblesController::class,'indexsex'])->name('indexsex.index');

//Create
Route::get('contacto/create', [contactoController::class,'create'])->name('contacto.create');
//store
Route::post('contacto', [contactoController::class,'store'])->name('contacto.store');

Route::get('/offline', function(){
    return view('vendor.laravelpwa.offline');
});

/*
|--------------------------------------------------------------------------
| CRUD Publicacionesbolsadt Admin y empleados 
|--------------------------------------------------------------------------
*/

//index
Route::get('admin.adminbolsadet',[BolsadtController::class,'index'])->name('adminbolsadet.index');

//indexpaginablog
Route::get('blog',[BolsadtController::class,'indexpub'])->name('blog.indexpub');

//indexhomeblog
Route::get('index',[BolsadtController::class,'indexhomeblog'])->name('index');

//Create
Route::get('admin.adminbolsadet/createreg', [BolsadtController::class,'createreg'])->name('adminbolsadet.createreg');

//store
Route::post('admin.adminbolsadet/createreg', [BolsadtController::class, 'storereg'])->name('adminbolsadet.storereg');


//Edit
Route::get('admin.adminbolsadet/{id}/edit',[BolsadtController::class,'edit'])->name('adminbolsadet.edit');

//Update
Route::put('admin.adminbolsadet/{id}',[BolsadtController::class,'update'])->name('adminbolsadet.update');

//show
Route::get('admin.adminbolsadet/{id}/show',[BolsadtController::class,'show'])->name('adminbolsadet.show');

//destroy
Route::delete('admin.adminbolsadet/{id}',[BolsadtController::class,'destroy'])->name('adminbolsadet.destroy');

/*
|--------------------------------------------------------------------------
| Crear categoria
|--------------------------------------------------------------------------
*/

//store
Route::post('admin.adminbolsadet', [categoriabolsadtController::class,'store'])->name('categoria.store');
//Create
Route::get('admin.adminbolsadet/create', [categoriabolsadtController::class,'create'])->name('categoria.create');

/*
|--------------------------------------------------------------------------
| Blog
|--------------------------------------------------------------------------
*/
//show
Route::get('entrada/{id}/paginaPublicacionbdt',[BolsadtController::class,'paginaPublicacionbdt'])->name('publibdt.show');
