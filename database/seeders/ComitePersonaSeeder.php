<?php

namespace Database\Seeders;

use App\Models\ComitePersona;
use Illuminate\Database\Seeder;

class ComitePersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ComitePersona::create([
            'nombres' =>'',
            'apellidos'=>'',
            'direccion'=>'',
            'id_estructuraComite'=>''

        ]);
    }
}
