<?php

namespace Database\Seeders;

use App\Models\Estado;
use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estado::create([
            'nombre' => 'Crítico',
            'color' => 'rojo',
            'grado' => 1,
        ]);
        Estado::create([
            'nombre' => 'Muy alto',
            'color' => 'naranja',
            'grado' => 1,
        ]);
        Estado::create([
            'nombre' => 'Moderado',
            'color' => 'amarillo',
            'grado' => 1,
        ]);
        Estado::create([
            'nombre' => 'Bajo',
            'color' => 'verde',
            'grado' => 1,
        ]);
    }
}
