<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pedido_producto;
use App\Models\Cliente;
use App\Models\Producto2;

class Pedidos_productoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $pedido = Cliente::where('nombre', 'Juan Pérez')->first()->pedidos()->first();
        
        $producto = Producto2::where('nombre', 'Producto A')->first();
        $productoDos = Producto2::where('nombre', 'Producto B')->first();

        Pedido_producto::create(['cantidad' => 2, 'total' => $producto->precio * 2, 'pedido_id' => $pedido->id, 'producto_id' => $producto->id]);

        Pedido_producto::create(['cantidad' => 3, 'total' => $productoDos->precio * 3, 'pedido_id' => $pedido->id, 'producto_id' => $productoDos->id]);
    }
    }