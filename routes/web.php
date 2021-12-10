<?php

use App\Http\Controllers\Dash\CategoriaControll;
use App\Http\Controllers\Dash\FileController;
use App\Http\Controllers\Dash\HomeController;
use App\Http\Controllers\User\HomeController as UserHomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/user', [HomeController::class, 'index'])->name('home');
/* RUTA DE CREAR */
Route::get('crear', [FileController::class, 'create'])->name('dash.crear');
/* METODO PARA AGREGAR */
Route::post('nuevo', [FileController::class, 'store'])->name('dash.store');
/* RUTA MOSTRAR ARCHIVOS */
Route::get('show', [FileController::class, 'show'])->name('dash.show');
Route::get('ver', [FileController::class, 'mostrar'])->name('dash.mostrar');
/* RUTA EDITAR */
Route::get('editar/{file}/editar', [FileController::class, 'edit'])->name('dash.edit');

Route::put('editar/{file}', [FileController::class, 'update'])->name('dash.update');


Route::get('/dowload{$file}', [FileController::class, 'descarga'])->name('dash.descarga');


/* METODO PARA ACTUALIZAR */
Route::put('show/{file}', [FileController::class, 'update'])->name('dash.update');
/* ELIMINAR */
Route::delete('borrar/{file}', [FileController::class, 'destroy'])->name('dash.destroy');

/* _____________________________________________ */
Route::get('home', [UserHomeController::class, 'home'])->name('user.home');
Route::get('documentos', [UserHomeController::class, 'documentos'])->name('user.documentos');
Route::get('imagen', [FileController::class, 'imagenes'])->name('user.imagenes');
Route::get('videos', [UserHomeController::class, 'videos'])->name('user.videos');
