<?php

namespace Database\Seeders;

use App\Models\UnidadTecnicoCientifica;
use Illuminate\Database\Seeder;

class UnidadTecnicoCientificaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UnidadTecnicoCientifica::Create([
            'nombre'=>'Servicio de Encauzamiento de Aguas y Regularización del Río Piraí ',
            'sigla'=>'SEARPI',
            'telefono'=>'12345678',
            'description'=>'Searpi contará con una plataforma que le permitirá tener mayor precisión respecto a la alerta temprana de emergencia por riadas o sequías',
            'url_web'=>'https://santacruz.gob.bo/nota/searpi-se-tecnifica-con-nueva-plataforma-de-alerta-temprana-para-emergencias',
            'responsable'=>'juan ',
            'clasificacion'=>'',
            'tipo'=>'',
            'direccion'=>'Av. Cuarto Anillo entre Av. Alemania y Av. 2 de Agosto, Santa Cruz de la Sierra, Bolivia',
            'puntoX'=>-10,
            'puntoY'=>15,        

        ]  );
        UnidadTecnicoCientifica::Create([
            'nombre'=>'Servicio nacional de meteorologia e hidrologia ',
            'sigla'=>'SENAMI',
            'telefono'=>'87654321',
            'description'=>' la climatologia y meteororlogia con enfoque al desarrollo productivo del estado plurinacional de bolivia',
            'url_web'=>'https://www.facebook.com/senamhi/',
            'responsable'=>'abel',           
            'direccion'=>'Calle Reyes Ortiz #41 ',
            'puntoX'=>-10,
            'puntoY'=>25,        

        ]);
        UnidadTecnicoCientifica::Create([
            'nombre'=>'Sistema de Alerta Temprana de Incendios Forestales ',
            'sigla'=>'SATIF',
            'telefono'=>'12344321',
            'description'=>'Encargada de los incendios forestales',
            'url_web'=>'https://satif-ppy.hub.arcgis.com/',
            'responsable'=>'romero',           
            'direccion'=>'avenida bush',
            'puntoX'=>40,
            'puntoY'=>56,        

        ],);
   
    }
}
