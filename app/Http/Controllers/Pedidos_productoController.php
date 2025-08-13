<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido_producto;

class Pedidos_productoController extends Controller
{
    //
    public function index()
    {
       $pedidos_producto = Pedido_producto::with(['pedido.cliente', 'producto'])->get();

        return view('pedidos_producto.index', compact('pedidos_producto'));
    }
}
