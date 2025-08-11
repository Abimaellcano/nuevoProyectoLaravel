<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;

class PedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $cliente = Cliente::where('nombre', 'Juan Pérez')->first();$cliente->pedidos()->create(['fecha_pedido'=> NOW(),'total' => 200.00,]);
    }
}