<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\Admin\NoticiaController as AdminNoticiaController;



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

Route::get('/',[InicioController::class, "index"]);
Route::get('/contacto',[InicioController::class, "contacto"]);  
Route::get('/noticias',[NoticiaController::class, "lista"])->name("noticias");
Route::get('/noticias/{noticia}',[NoticiaController::class, "detalles"])->name("noticias.detalles");

//Recurso
//-Crear *Create
//-Almacenar *Store
//-Listar *Index
//-Mostrar detalles *Show
//Editar *Edit
//Actualizar *update
//Eliminar *delete/destroy

Route::get("/admin/noticias", [AdminNoticiaController::class,"index"])->name("admin.noticias.index");
Route::get("/admin/noticias/create", [AdminNoticiaController::class, "create"])->name("admin.noticias.create");