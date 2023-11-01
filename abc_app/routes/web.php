<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HabitacionController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\UsuariosController;
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
Route::get('/app', function () {
    return view('layouts/app');
});
Route::get('/servicios', [ServiciosController::class, 'index'])->name('servicios.index');
Route::get('/servicios/crear', [ServiciosController::class, 'create'])->name('servicios.crear');
Route::post('/servicios', [ServiciosController::class, 'store'])->name('servicios.store');
Route::get('/servicios/{servicio}', [ServiciosController::class, 'show'])->name('servicios.mostrar');
Route::get('/servicios/{servicio}/editar', [ServiciosController::class, 'edit'])->name('servicios.editar');
Route::put('/servicios/{servicio}', [ServiciosController::class, 'update'])->name('servicios.update');
Route::delete('/servicios/{servicio}', [ServiciosController::class, 'destroy'])->name('servicios.destroy');
//rutas habitacion
Route::get('/habitacion', [HabitacionController::class, 'index'])->name('habitacion.index');
Route::get('/habitacion/crear', [HabitacionController::class, 'create'])->name('habitacion.crear');
Route::post('/habitacion', [HabitacionController::class, 'store'])->name('habitacion.store');
Route::get('/habitacion/{habitacion}', [HabitacionController::class, 'show'])->name('habitacion.mostrar');
Route::get('/habitacion/{habitacion}/editar', [HabitacionController::class, 'edit'])->name('habitacion.editar');
Route::put('/habitacion/{habitacion}', [HabitacionController::class, 'update'])->name('habitacion.update');
Route::delete('/habitacion/{habitacion}', [HabitacionController::class, 'destroy'])->name('habitacion.destroy');
//rutas usuarios
Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/crear', [UsuariosController::class, 'create'])->name('usuarios.crear');
Route::post('/usuarios', [UsuariosController::class, 'store'])->name('usuarios.store');
Route::get('/usuarios/{usuario}', [UsuariosController::class, 'show'])->name('usuarios.mostrar');
Route::get('/usuarios/{usuario}/editar', [UsuariosController::class, 'edit'])->name('usuarios.editar');
Route::put('/usuarios/{usuario}', [UsuariosController::class, 'update'])->name('usuarios.update');
Route::delete('/usuarios/{usuario}', [UsuariosController::class, 'destroy'])->name('usuarios.destroy');