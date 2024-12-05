<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartamentoController;

Route::get('/', function () {
    return view('layout');
});

// Rutas para el CRUD de Departamentos
Route::resource('departamentos', App\Http\Controllers\DepartamentoController::class);
Route::resource('empleados', App\Http\Controllers\EmpleadoController::class);
Route::resource('puestos', App\Http\Controllers\PuestoController::class);
Route::resource('capacitaciones', App\Http\Controllers\CapacitacionController::class);

Route::delete('/departamentos/{departamentos}', [DepartamentoController::class, 'destroy'])->name('departamentos.destroy');
