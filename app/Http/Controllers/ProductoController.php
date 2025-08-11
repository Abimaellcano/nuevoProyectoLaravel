<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //
    public function index()
    {
        // Logic to retrieve and display a list of productos
        return view('productos.index');
    } 
}