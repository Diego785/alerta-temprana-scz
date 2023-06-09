<?php

namespace Database\Seeders;

use App\Models\Municipio;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            EventoSeeder::class,
            EstadoSeeder::class,
            UnidadTecnicoCientificaSeeder::class,
            AlertaSeeder::class,
            AlertaEnvioSeeder::class,
            ConferenciaPrensaSeeder::class,
            MunicipioSeeder::class,
            MunicipioAlertaSeeder::class,
        ]);
    }
}
