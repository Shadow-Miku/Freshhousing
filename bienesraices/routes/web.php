<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorvistas;

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