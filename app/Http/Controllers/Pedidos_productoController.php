<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pedidos_productoController extends Controller
{
    //
    public function index()
    {
        // Logic to retrieve and display a list of pedidos productos
        return view('pedidos_productos.index');
    }
}