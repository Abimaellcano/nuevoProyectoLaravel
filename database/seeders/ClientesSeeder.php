<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::create([
            'nombre' => 'Juan Pérez',
            'email' => 'juanp@test.com',
            'telefono' => '1234567890'

        ]);
        Cliente::create([
            'nombre' => 'Mateo Gómez',
            'email' => 'mgomez@test.com',
            'telefono' => '56432136545'

        ]);
        Cliente::create([
            'nombre' => 'María López',
            'email' => 'mlopez@test.com',
            'telefono' => '544658236'

        ]);
    }
}