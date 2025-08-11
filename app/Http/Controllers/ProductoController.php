<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto2;

class ProductoController extends Controller
{
    //
    public function index()
    {
        $productos = Producto2::all();
        return view('productos.index', compact('productos'));
    }
}
