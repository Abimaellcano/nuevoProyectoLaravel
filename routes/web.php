<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\Pedidos_productoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::post('/clientes',[ClienteController::class, 'store'])->name('clientes.store');
Route::delete('./clientes', [ClienteController::class, 'destroy'])->name('clientes.destroy');

Route::get('/productos', [ProductoController::class, 'index']);
Route::get('/pedidos', [PedidoController::class, 'index']);
Route::get('/pedidosProductos', [Pedidos_productoController::class, 'index']);
