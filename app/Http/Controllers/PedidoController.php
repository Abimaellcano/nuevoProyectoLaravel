<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidoController extends Controller
{
    //
    public function index()
    {
        // Logic to retrieve and display a list of pedidos
        return view('pedidos.index');
    }
}