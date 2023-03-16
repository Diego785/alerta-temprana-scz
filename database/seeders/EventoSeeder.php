<?php

namespace Database\Seeders;

use App\Models\Evento;
use Illuminate\Database\Seeder;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Evento::create([
            'tipoEvento' => 'Incendios Forestales',
            'descripcionTipoEvento'=>'',
            'foto' => 'https://images.theconversation.com/files/283500/original/file-20190710-44466-ajoxln.jpg?ixlib=rb-1.1.0&rect=0%2C234%2C3008%2C1504&q=45&auto=format&w=1356&h=668&fit=crop',
        ]);
        Evento::create([
            'tipoEvento' => 'Incendios Estructurales',
            'descripcionTipoEvento'=>'',
            'foto' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8f/Fire_inside_an_abandoned_convent_in_Massueville%2C_Quebec%2C_Canada.jpg/1200px-Fire_inside_an_abandoned_convent_in_Massueville%2C_Quebec%2C_Canada.jpg',
        ]);
        Evento::create([
            'tipoEvento' => 'Inundaciones',
            'descripcionTipoEvento'=>'',
            'foto' =>   'https://ca-times.brightspotcdn.com/dims4/default/c4049ec/2147483647/strip/true/crop/6048x4024+0+0/resize/1200x798!/quality/80/?url=https%3A%2F%2Fcalifornia-times-brightspot.s3.amazonaws.com%2F93%2F3a%2F43e20e634809aa9712d28b3f3f39%2Fap23011087677767.jpg',
        ]);
        Evento::create([
            'tipoEvento' => 'Deslizamientos',
            'descripcionTipoEvento'=>'',
            'foto' => 'https://www.lavanguardia.com/files/og_thumbnail/uploads/2019/05/01/5fa5382d6cc97.jpeg',
        ]);
        Evento::create([
            'tipoEvento' => 'Heladas',
            'descripcionTipoEvento'=>'',
            'foto' =>   'https://services.meteored.com/img/article/las-heladas-caracteristicas-y-tipos-20372-3_1024.jpg',
        ]);
        Evento::create([
            'tipoEvento' => 'Sequías',
            'descripcionTipoEvento'=>'',
            'foto' => 'https://cdn.forbes.com.mx/2021/04/Foto3-1-e1628789080218.jpg',
        ]);
        Evento::create([
            'tipoEvento' => 'Sismos/Terremotos',
            'descripcionTipoEvento'=>'',
            'foto' => 'https://culturacientifica.utpl.edu.ec/wp-content/uploads/2019/08/TERREMOTO.jpg',
        ]);
        Evento::create([
            'tipoEvento' => 'Personas Desaparecidas',
            'descripcionTipoEvento'=>'',
            'foto' =>   'https://imagenes.elpais.com/resizer/3SDUoB-ivtbkNc4cjfCSikBT9GA=/1960x1470/filters:focal(440x346:450x356)/cloudfront-eu-central-1.images.arcpublishing.com/prisa/IMJZ42UCZAFDME77FTMJLBDODA.jpg',
        ]);
        Evento::create([
            'tipoEvento' => 'Conflictos Sociales',
            'descripcionTipoEvento'=>'',
            'foto' =>   'https://revistaturbulencias.com/wp-content/uploads/2021/09/Monitoreo-y-prevencion-gubernamental-conflictos.jpg',
        ]);
        
    }
}
