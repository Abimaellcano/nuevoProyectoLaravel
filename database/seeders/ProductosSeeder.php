<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Producto::create([
            'nombre' => 'Producto A',
            'precio' => 150.00,
            'stock' => 30,
        ]);

        Producto::create([
            'nombre' => 'Producto B',
            'precio' => 250.00,
            'stock' => 20,
        ]);

        Producto::create([
            'nombre' => 'Producto C',
            'precio' => 350.00,
            'stock' => 40,
        ]);


    }
}