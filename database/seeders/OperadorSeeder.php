<?php

namespace Database\Seeders;

use App\Models\Operador;
use Illuminate\Database\Seeder;

class OperadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Operador::create([
            'nombresApellidos' =>'',
            'celular'=>'',
                   ]);
    }
}
