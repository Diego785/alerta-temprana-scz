<?php

namespace Database\Seeders;

use App\Models\ConferenciaPrensa;
use Illuminate\Database\Seeder;

class ConferenciaPrensaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Alerta 1
        ConferenciaPrensa::create([
            'fecha' => '2022-04-20',
            'hora' => '20:00:00',
            'portavoz' => 'José Perez Rojas',
            'img1' => '',
            'img2' => '',
            'img3' => '',
            'img4' => '',
            'img5' => '',
            'video' => '',
            'descripcion' => 'Se desarrolló una conferencia de prensa con normalidad y de duración de 20 minutos.',
            'institucion' => 'Unitel',
            'alerta_envio_id' => 1,
        ]);
        // ConferenciaPrensa::create([
        //     'fecha' => '2022-04-23',
        //     'hora' => '21:00:00',
        //     'portavoz' => 'José Perez Rojas',
        //     'img1' => '',
        //     'img2' => '',
        //     'img3' => '',
        //     'img4' => '',
        //     'img5' => '',
        //     'video' => '',
        //     'descripcion' => 'Se desarrolló una conferencia de prensa con normalidad y de duración de 30 minutos.',
        //     'institucion' => 'El deber',
        //     'alerta_envio_id' => 3,
        // ]);
        //Alerta 2
        ConferenciaPrensa::create([
            'fecha' => '2022-04-23',
            'hora' => '21:00:00',
            'portavoz' => 'Miguel Hurtado Ramirez',
            'img1' => '',
            'img2' => '',
            'img3' => '',
            'img4' => '',
            'img5' => '',
            'video' => '',
            'descripcion' => 'Se desarrolló una conferencia de prensa con normalidad y de duración de 10 minutos.',
            'institucion' => 'Red Uno',
            'alerta_envio_id' => 2,
        ]);
        // ConferenciaPrensa::create([
        //     'fecha' => '2022-04-24',
        //     'hora' => '12:00:00',
        //     'portavoz' => 'Miguel Hurtado Ramirez',
        //     'img1' => '',
        //     'img2' => '',
        //     'img3' => '',
        //     'img4' => '',
        //     'img5' => '',
        //     'video' => '',
        //     'descripcion' => 'Se desarrolló una conferencia de prensa con normalidad y de duración de 15 minutos.',
        //     'institucion' => 'Bolivisión',
        //     'alerta_envio_id' => 5,
        // ]);
        //Alerta 3
        ConferenciaPrensa::create([
            'fecha' => '2021-03-10',
            'hora' => '20:30:00',
            'portavoz' => 'Luis Mamani Torrico',
            'img1' => '',
            'img2' => '',
            'img3' => '',
            'img4' => '',
            'img5' => '',
            'video' => '',
            'descripcion' => 'Se desarrolló una conferencia de prensa con normalidad y de duración de 5 minutos.',
            'institucion' => 'Bolivia TV',
            'alerta_envio_id' => 3,
        ]);

        //Alerta 4
        ConferenciaPrensa::create([
            'fecha' => '2022-01-10',
            'hora' => '11:00:00',
            'portavoz' => 'Josefina Yupanqui Mercado',
            'img1' => '',
            'img2' => '',
            'img3' => '',
            'img4' => '',
            'img5' => '',
            'video' => '',
            'descripcion' => 'Se desarrolló una conferencia de prensa con normalidad y de duración de 25 minutos.',
            'institucion' => 'Unitel',
            'alerta_envio_id' => 4,
        ]);
        ConferenciaPrensa::create([
            'fecha' => '2022-01-10',
            'hora' => '15:00:00',
            'portavoz' => 'Josefina Yupanqui Mercado',
            'img1' => '',
            'img2' => '',
            'img3' => '',
            'img4' => '',
            'img5' => '',
            'video' => '',
            'descripcion' => 'Se desarrolló una conferencia de prensa con normalidad y de duración de 15 minutos.',
            'institucion' => 'Bolivisión',
            'alerta_envio_id' => 6,
        ]);

        //Alerta 5
        ConferenciaPrensa::create([
            'fecha' => '2021-08-10',
            'hora' => '20:45:00',
            'portavoz' => 'Martin Mendoza Soliz',
            'img1' => '',
            'img2' => '',
            'img3' => '',
            'img4' => '',
            'img5' => '',
            'video' => '',
            'descripcion' => 'Se desarrolló una conferencia de prensa con normalidad y de duración de 10 minutos.',
            'institucion' => 'El deber',
            'alerta_envio_id' => 7,
        ]);
        // ConferenciaPrensa::create([
        //     'fecha' => '2021-08-10',
        //     'hora' => '23:30:00',
        //     'portavoz' => 'Martin Mendoza Soliz',
        //     'img1' => '',
        //     'img2' => '',
        //     'img3' => '',
        //     'img4' => '',
        //     'img5' => '',
        //     'video' => '',
        //     'descripcion' => 'Se desarrolló una conferencia de prensa con normalidad y de duración de 15 minutos.',
        //     'institucion' => 'Unitel',
        //     'alerta_envio_id' => 11,
        // ]);
        // ConferenciaPrensa::create([
        //     'fecha' => '2021-08-11',
        //     'hora' => '08:00:00',
        //     'portavoz' => 'Martin Mendoza Soliz',
        //     'img1' => '',
        //     'img2' => '',
        //     'img3' => '',
        //     'img4' => '',
        //     'img5' => '',
        //     'video' => '',
        //     'descripcion' => 'Se desarrolló una conferencia de prensa con normalidad y de duración de 5 minutos.',
        //     'institucion' => 'Unitel',
        //     'alerta_envio_id' => 12,
        // ]);
        // ConferenciaPrensa::create([
        //     'fecha' => '2021-08-11',
        //     'hora' => '12:15:00',
        //     'portavoz' => 'Martin Mendoza Soliz',
        //     'img1' => '',
        //     'img2' => '',
        //     'img3' => '',
        //     'img4' => '',
        //     'img5' => '',
        //     'video' => '',
        //     'descripcion' => 'Se desarrolló una conferencia de prensa con normalidad y de duración de 25 minutos.',
        //     'institucion' => 'Red Uno',
        //     'alerta_envio_id' => 13,
        // ]);
    }
}
