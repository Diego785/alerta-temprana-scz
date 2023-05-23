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
            'color' => '#FF0000',
        ]);
        Estado::create([
            'nombre' => 'Muy alto',
            'color' => '#FF8000',
        ]);
        Estado::create([
            'nombre' => 'Moderado',
            'color' => '#FFFF00',
        ]);
        Estado::create([
            'nombre' => 'Normal',
            'color' => '#008000',
        ]);
    }
}
