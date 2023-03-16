<?php

namespace Database\Seeders;

use App\Models\EstructuraComite;
use Illuminate\Database\Seeder;

class EstructuraComiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EstructuraComite::create([
            'cargoComite' =>'',
            'descripcion'=>'',
                    ]);
    }
}
