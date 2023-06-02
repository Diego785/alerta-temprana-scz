<?php

namespace Database\Seeders;

use App\Models\MunicipioAlerta;
use Illuminate\Database\Seeder;

class MunicipioAlertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MunicipioAlerta::create([
            'municipio_id' => 1,
            'alerta_envio_id' => 8,
        ]);
        MunicipioAlerta::create([
            'municipio_id' => 3,
            'alerta_envio_id' => 8,
        ]);
        MunicipioAlerta::create([
            'municipio_id' => 5,
            'alerta_envio_id' => 8,
        ]);


        MunicipioAlerta::create([
            'municipio_id' => 1,
            'alerta_envio_id' => 9,
        ]);
        MunicipioAlerta::create([
            'municipio_id' => 3,
            'alerta_envio_id' => 9,
        ]);
        MunicipioAlerta::create([
            'municipio_id' => 5,
            'alerta_envio_id' => 9,
        ]);


        MunicipioAlerta::create([
            'municipio_id' => 1,
            'alerta_envio_id' => 10,
        ]);
        MunicipioAlerta::create([
            'municipio_id' => 3,
            'alerta_envio_id' => 10,
        ]);
        MunicipioAlerta::create([
            'municipio_id' => 4,
            'alerta_envio_id' => 10,
        ]);
        MunicipioAlerta::create([
            'municipio_id' => 5,
            'alerta_envio_id' => 10,
        ]);


        MunicipioAlerta::create([
            'municipio_id' => 1,
            'alerta_envio_id' => 11,
        ]);
        MunicipioAlerta::create([
            'municipio_id' => 3,
            'alerta_envio_id' => 11,
        ]);
        MunicipioAlerta::create([
            'municipio_id' => 4,
            'alerta_envio_id' => 11,
        ]);
        MunicipioAlerta::create([
            'municipio_id' => 5,
            'alerta_envio_id' => 11,
        ]);



        MunicipioAlerta::create([
            'municipio_id' => 1,
            'alerta_envio_id' => 12,
        ]);
        MunicipioAlerta::create([
            'municipio_id' => 3,
            'alerta_envio_id' => 12,
        ]);
        MunicipioAlerta::create([
            'municipio_id' => 5,
            'alerta_envio_id' => 12,
        ]);

        MunicipioAlerta::create([
            'municipio_id' => 3,
            'alerta_envio_id' => 13,
        ]);
        MunicipioAlerta::create([
            'municipio_id' => 5,
            'alerta_envio_id' => 13,
        ]);


        MunicipioAlerta::create([
            'municipio_id' => 3,
            'alerta_envio_id' => 14,
        ]);
        MunicipioAlerta::create([
            'municipio_id' => 5,
            'alerta_envio_id' => 14,
        ]);

        MunicipioAlerta::create([
            'municipio_id' => 3,
            'alerta_envio_id' => 15,
        ]);
        MunicipioAlerta::create([
            'municipio_id' => 5,
            'alerta_envio_id' => 15,
        ]);

        MunicipioAlerta::create([
            'municipio_id' => 3,
            'alerta_envio_id' => 16,
        ]);
        MunicipioAlerta::create([
            'municipio_id' => 5,
            'alerta_envio_id' => 16,
        ]);


        MunicipioAlerta::create([
            'municipio_id' => 5,
            'alerta_envio_id' => 17,
        ]);
    }
}
