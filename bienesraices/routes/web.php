<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorvistas;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InmueblesController;

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

Route::get('/', [controladorvistas::class,'showIndex'])->name('index');

Route::get('entrada', [controladorvistas::class,'showEntrada'])->name('entrada');

Route::get('nosotros', [controladorvistas::class,'showNosotros'])->name('nosotros');

Route::get('anuncio', [controladorvistas::class,'showAnuncio'])->name('anuncio');

Route::get('anuncios', [controladorvistas::class,'showAnuncios'])->name('anuncios');

Route::get('base', [controladorvistas::class,'showBase'])->name('base');

Route::get('blog', [controladorvistas::class,'showBlog'])->name('blog');

Route::get('contacto', [controladorvistas::class,'showContacto'])->name('contacto');

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

//Update
Route::put('admin.adminUsu/{id}',[UserController::class,'update'])->name('adminUsu.update');

//show
Route::get('admin.adminUsu/{id}/show',[UserController::class,'show'])->name('adminUsu.show');

//destroy
Route::delete('admin.adminUsu/{id}',[UserController::class,'destroy'])->name('adminUsu.destroy');


/*
|--------------------------------------------------------------------------
| CRUD Publicaciones empleados
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
