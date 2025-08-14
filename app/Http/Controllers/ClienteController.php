<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    //
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nombre' => 'required|string|max:200',
            'email' => 'required|email|max:200|unique:clientes,email',
            'telefono' => 'nullable|string|max:15',
        ]);

        //Crear un nuevo cliente
        Cliente::create($request->only('nombre', 'email', 'telefono'));

        return redirect()->route('clientes.index')->with('success', 'Cliente creado exitosamente.');

    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado exitosamente.');
    }

}