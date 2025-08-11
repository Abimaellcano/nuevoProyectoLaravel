<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create([
            'nombre' => 'Electrónica',
            'descripcion' => 'Dispositivos tecnológicos y gadgets'
        ]);

        Categoria::create([
            'nombre' => 'Ropa',
            'descripcion' => 'Prendas de vestir para todas las edades'
        ]);

        Categoria::create([
            'nombre' => 'Hogar',
            'descripcion' => 'Artículos para el hogar y cocina'
        ]);

    }
}