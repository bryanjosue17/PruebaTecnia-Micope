<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DetalleReparacionController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\PiezaController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\TipoEquipoController;
use App\Http\Controllers\EstadoServicioController;
use App\Http\Controllers\HistorialEstadoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('clientes', ClienteController::class);
Route::resource('equipos', EquipoController::class);
Route::resource('servicios', ServicioController::class);
Route::resource('detalle_reparaciones', DetalleReparacionController::class);
Route::resource('marcas', MarcaController::class);
Route::resource('tipos_equipos', TipoEquipoController::class);
Route::resource('piezas', PiezaController::class);
Route::resource('proveedores', ProveedorController::class);
Route::resource('estado_servicios', EstadoServicioController::class);
Route::resource('historial_estados', HistorialEstadoController::class);
