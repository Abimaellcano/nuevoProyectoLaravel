<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PedidoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes', [ClienteController::class, 'index']);
Route::get('/productos', [ProductoController::class, 'index']);
Route::get('/pedidos', [PedidoController::class, 'index']);