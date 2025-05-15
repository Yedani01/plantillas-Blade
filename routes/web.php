<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\UsuarioController;






Route::middleware('auth')->group(function () {
    Route::get('/peliculas', [CatalogoController::class, 'listado'])->name('listado');
    Route::get('/peliculas/agregar', [CatalogoController::class, 'agregar'])->name('agregar');
    Route::post('/peliculas/guardar', [CatalogoController::class, 'guardar'])->name('guardar');
    Route::get('/peliculas/editar/{id}', [CatalogoController::class, 'editar'])->name('editar');
    Route::post('/peliculas/actualizar/{id}', [CatalogoController::class, 'actualizar'])->name('actualizar');
    Route::delete('/peliculas/eliminar/{id}', [CatalogoController::class, 'eliminar'])->name('eliminar');
Route::get('/', [CatalogoController::class, 'inicio'])->name('inicio');
Route::get('/inicio', [CatalogoController::class, 'inicio'])->name('home');

    Route::post('/logout', function () {
        Auth::logout();
        return redirect('/login'); 
    })->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::view('/login', 'login')->name('login');
    Route::get('/registro', [UsuarioController::class, 'mostrarFormulario'])->name('registro');
    Route::post('/registro', [UsuarioController::class, 'guardar'])->name('registro.guardar');
    Route::post('/login', [UsuarioController::class, 'procesarLogin'])->name('login.usuario');
    
});
