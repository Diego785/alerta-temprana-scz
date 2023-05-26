<?php

namespace Database\Seeders;

use App\Models\Municipio;
use Illuminate\Database\Seeder;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Municipio::create([
            'municipio' =>'Cotoca',
            'provincia'=>'Andres Ibañez',
          

        ]);
        
        Municipio::create([
            'municipio' =>'El Torno',
            'provincia'=>'Andres Ibañez',
          

        ]);
        
        Municipio::create([
            'municipio' =>'La Guardia',
            'provincia'=>'Andres Ibañez',
          

        ]);
        
        Municipio::create([
            'municipio' =>'Porongo',
            'provincia'=>'Andres Ibañez',
          

        ]);
        
        Municipio::create([
            'municipio' =>'Santa Cruz de la Sierra',
            'provincia'=>'Andres Ibañez',
          

        ]);
        Municipio::create([
            'municipio' =>'',
            'provincia'=>'Angel Snadoval',
          

        ]);
        Municipio::create([
            'municipio' =>'',
            'provincia'=>'',
          

        ]);
    }
}
