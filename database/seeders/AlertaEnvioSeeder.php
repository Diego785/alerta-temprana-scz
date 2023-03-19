<?php

namespace Database\Seeders;

use App\Models\AlertaEnvio;
use Illuminate\Database\Seeder;

class AlertaEnvioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Alerta 1
        AlertaEnvio::create([
            'alerta_id' => 1,
            'estado_id' => 2,
            'fecha' => '2022-04-20',
            'hora' => '18:00:00',
            'puntoX' => -10,
            'puntoY' => -15,
            'url_mapa' => '',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pretium vulputate dui vitae sollicitudin. Vivamus pretium lacus magna, quis porttitor tellus euismod vitae. Mauris dignissim congue tortor id feugiat. Proin lobortis ipsum eu odio congue imperdiet. Cras eu nisi eget mauris rutrum fermentum. Proin augue dui, fringilla eu velit eget, laoreet semper leo. Nulla vel sapien lectus. Duis vulputate, lectus ac imperdiet hendrerit, libero lorem auctor ipsum, in dictum enim neque nec turpis. Nulla neque lacus, dapibus in dignissim sit amet, hendrerit in mauris. Donec eu mollis elit. Donec condimentum semper cursus. Ut ac ornare nibh. Integer viverra et mauris nec accumsan.',
            'img_cabecera' => '',
            'img_alerta' => '',
            'url_boletin' => '',
            'recomendacion' => '',
        ]);
        AlertaEnvio::create([
            'alerta_id' => 1,
            'estado_id' => 3,
            'fecha' => '2022-04-21',
            'hora' => '12:00:00',
            'puntoX' => -10,
            'puntoY' => -15,
            'url_mapa' => '',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pretium vulputate dui vitae sollicitudin. Vivamus pretium lacus magna, quis porttitor tellus euismod vitae. Mauris dignissim congue tortor id feugiat. Proin lobortis ipsum eu odio congue imperdiet. Cras eu nisi eget mauris rutrum fermentum. Proin augue dui, fringilla eu velit eget, laoreet semper leo. Nulla vel sapien lectus. Duis vulputate, lectus ac imperdiet hendrerit, libero lorem auctor ipsum, in dictum enim neque nec turpis. Nulla neque lacus, dapibus in dignissim sit amet, hendrerit in mauris. Donec eu mollis elit. Donec condimentum semper cursus. Ut ac ornare nibh. Integer viverra et mauris nec accumsan.',
            'img_cabecera' => '',
            'img_alerta' => '',
            'url_boletin' => '',
            'recomendacion' => '',
        ]);
        AlertaEnvio::create([
            'alerta_id' => 1,
            'estado_id' => 4,
            'fecha' => '2022-04-23',
            'hora' => '20:00:00',
            'puntoX' => -10,
            'puntoY' => -15,
            'url_mapa' => '',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pretium vulputate dui vitae sollicitudin. Vivamus pretium lacus magna, quis porttitor tellus euismod vitae. Mauris dignissim congue tortor id feugiat. Proin lobortis ipsum eu odio congue imperdiet. Cras eu nisi eget mauris rutrum fermentum. Proin augue dui, fringilla eu velit eget, laoreet semper leo. Nulla vel sapien lectus. Duis vulputate, lectus ac imperdiet hendrerit, libero lorem auctor ipsum, in dictum enim neque nec turpis. Nulla neque lacus, dapibus in dignissim sit amet, hendrerit in mauris. Donec eu mollis elit. Donec condimentum semper cursus. Ut ac ornare nibh. Integer viverra et mauris nec accumsan.',
            'img_cabecera' => '',
            'img_alerta' => '',
            'url_boletin' => '',
            'recomendacion' => '',
        ]);

        //Alerta 2
        AlertaEnvio::create([
            'alerta_id' => 2,
            'estado_id' => 3,
            'fecha' => '2022-04-23',
            'hora' => '20:00:00',
            'puntoX' => -20,
            'puntoY' => -25,
            'url_mapa' => '',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pretium vulputate dui vitae sollicitudin. Vivamus pretium lacus magna, quis porttitor tellus euismod vitae. Mauris dignissim congue tortor id feugiat. Proin lobortis ipsum eu odio congue imperdiet. Cras eu nisi eget mauris rutrum fermentum. Proin augue dui, fringilla eu velit eget, laoreet semper leo. Nulla vel sapien lectus. Duis vulputate, lectus ac imperdiet hendrerit, libero lorem auctor ipsum, in dictum enim neque nec turpis. Nulla neque lacus, dapibus in dignissim sit amet, hendrerit in mauris. Donec eu mollis elit. Donec condimentum semper cursus. Ut ac ornare nibh. Integer viverra et mauris nec accumsan.',
            'img_cabecera' => '',
            'img_alerta' => '',
            'url_boletin' => '',
            'recomendacion' => '',
        ]);

        AlertaEnvio::create([
            'alerta_id' => 2,
            'estado_id' => 4,
            'fecha' => '2022-04-24',
            'hora' => '10:00:00',
            'puntoX' => -20,
            'puntoY' => -25,
            'url_mapa' => '',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pretium vulputate dui vitae sollicitudin. Vivamus pretium lacus magna, quis porttitor tellus euismod vitae. Mauris dignissim congue tortor id feugiat. Proin lobortis ipsum eu odio congue imperdiet. Cras eu nisi eget mauris rutrum fermentum. Proin augue dui, fringilla eu velit eget, laoreet semper leo. Nulla vel sapien lectus. Duis vulputate, lectus ac imperdiet hendrerit, libero lorem auctor ipsum, in dictum enim neque nec turpis. Nulla neque lacus, dapibus in dignissim sit amet, hendrerit in mauris. Donec eu mollis elit. Donec condimentum semper cursus. Ut ac ornare nibh. Integer viverra et mauris nec accumsan.',
            'img_cabecera' => '',
            'img_alerta' => '',
            'url_boletin' => '',
            'recomendacion' => '',
        ]);

        //Alerta 3
        AlertaEnvio::create([
            'alerta_id' => 3,
            'estado_id' => 4,
            'fecha' => '2021-03-10',
            'hora' => '20:00:00',
            'puntoX' => -30,
            'puntoY' => -45,
            'url_mapa' => '',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pretium vulputate dui vitae sollicitudin. Vivamus pretium lacus magna, quis porttitor tellus euismod vitae. Mauris dignissim congue tortor id feugiat. Proin lobortis ipsum eu odio congue imperdiet. Cras eu nisi eget mauris rutrum fermentum. Proin augue dui, fringilla eu velit eget, laoreet semper leo. Nulla vel sapien lectus. Duis vulputate, lectus ac imperdiet hendrerit, libero lorem auctor ipsum, in dictum enim neque nec turpis. Nulla neque lacus, dapibus in dignissim sit amet, hendrerit in mauris. Donec eu mollis elit. Donec condimentum semper cursus. Ut ac ornare nibh. Integer viverra et mauris nec accumsan.',
            'img_cabecera' => '',
            'img_alerta' => '',
            'url_boletin' => '',
            'recomendacion' => '',
        ]);

        //Alerta 4
        AlertaEnvio::create([
            'alerta_id' => 4,
            'estado_id' => 2,
            'fecha' => '2022-01-10',
            'hora' => '10:00:00',
            'puntoX' => -15,
            'puntoY' => -80,
            'url_mapa' => '',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pretium vulputate dui vitae sollicitudin. Vivamus pretium lacus magna, quis porttitor tellus euismod vitae. Mauris dignissim congue tortor id feugiat. Proin lobortis ipsum eu odio congue imperdiet. Cras eu nisi eget mauris rutrum fermentum. Proin augue dui, fringilla eu velit eget, laoreet semper leo. Nulla vel sapien lectus. Duis vulputate, lectus ac imperdiet hendrerit, libero lorem auctor ipsum, in dictum enim neque nec turpis. Nulla neque lacus, dapibus in dignissim sit amet, hendrerit in mauris. Donec eu mollis elit. Donec condimentum semper cursus. Ut ac ornare nibh. Integer viverra et mauris nec accumsan.',
            'img_cabecera' => '',
            'img_alerta' => '',
            'url_boletin' => '',
            'recomendacion' => '',
        ]);
        AlertaEnvio::create([
            'alerta_id' => 4,
            'estado_id' => 3,
            'fecha' => '2022-01-10',
            'hora' => '12:00:00',
            'puntoX' => -15,
            'puntoY' => -80,
            'url_mapa' => '',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pretium vulputate dui vitae sollicitudin. Vivamus pretium lacus magna, quis porttitor tellus euismod vitae. Mauris dignissim congue tortor id feugiat. Proin lobortis ipsum eu odio congue imperdiet. Cras eu nisi eget mauris rutrum fermentum. Proin augue dui, fringilla eu velit eget, laoreet semper leo. Nulla vel sapien lectus. Duis vulputate, lectus ac imperdiet hendrerit, libero lorem auctor ipsum, in dictum enim neque nec turpis. Nulla neque lacus, dapibus in dignissim sit amet, hendrerit in mauris. Donec eu mollis elit. Donec condimentum semper cursus. Ut ac ornare nibh. Integer viverra et mauris nec accumsan.',
            'img_cabecera' => '',
            'img_alerta' => '',
            'url_boletin' => '',
            'recomendacion' => '',
        ]);
        AlertaEnvio::create([
            'alerta_id' => 4,
            'estado_id' => 4,
            'fecha' => '2022-01-10',
            'hora' => '15:00:00',
            'puntoX' => -15,
            'puntoY' => -80,
            'url_mapa' => '',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pretium vulputate dui vitae sollicitudin. Vivamus pretium lacus magna, quis porttitor tellus euismod vitae. Mauris dignissim congue tortor id feugiat. Proin lobortis ipsum eu odio congue imperdiet. Cras eu nisi eget mauris rutrum fermentum. Proin augue dui, fringilla eu velit eget, laoreet semper leo. Nulla vel sapien lectus. Duis vulputate, lectus ac imperdiet hendrerit, libero lorem auctor ipsum, in dictum enim neque nec turpis. Nulla neque lacus, dapibus in dignissim sit amet, hendrerit in mauris. Donec eu mollis elit. Donec condimentum semper cursus. Ut ac ornare nibh. Integer viverra et mauris nec accumsan.',
            'img_cabecera' => '',
            'img_alerta' => '',
            'url_boletin' => '',
            'recomendacion' => '',
        ]);

        //Alerta 5
        AlertaEnvio::create([
            'alerta_id' => 5,
            'estado_id' => 1,
            'fecha' => '2021-08-10',
            'hora' => '20:00:00',
            'puntoX' => -40,
            'puntoY' => -52,
            'url_mapa' => '',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pretium vulputate dui vitae sollicitudin. Vivamus pretium lacus magna, quis porttitor tellus euismod vitae. Mauris dignissim congue tortor id feugiat. Proin lobortis ipsum eu odio congue imperdiet. Cras eu nisi eget mauris rutrum fermentum. Proin augue dui, fringilla eu velit eget, laoreet semper leo. Nulla vel sapien lectus. Duis vulputate, lectus ac imperdiet hendrerit, libero lorem auctor ipsum, in dictum enim neque nec turpis. Nulla neque lacus, dapibus in dignissim sit amet, hendrerit in mauris. Donec eu mollis elit. Donec condimentum semper cursus. Ut ac ornare nibh. Integer viverra et mauris nec accumsan.',
            'img_cabecera' => '',
            'img_alerta' => '',
            'url_boletin' => '',
            'recomendacion' => '',
        ]);
        AlertaEnvio::create([
            'alerta_id' => 5,
            'estado_id' => 2,
            'fecha' => '2021-08-10',
            'hora' => '23:00:00',
            'puntoX' => -40,
            'puntoY' => -52,
            'url_mapa' => '',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pretium vulputate dui vitae sollicitudin. Vivamus pretium lacus magna, quis porttitor tellus euismod vitae. Mauris dignissim congue tortor id feugiat. Proin lobortis ipsum eu odio congue imperdiet. Cras eu nisi eget mauris rutrum fermentum. Proin augue dui, fringilla eu velit eget, laoreet semper leo. Nulla vel sapien lectus. Duis vulputate, lectus ac imperdiet hendrerit, libero lorem auctor ipsum, in dictum enim neque nec turpis. Nulla neque lacus, dapibus in dignissim sit amet, hendrerit in mauris. Donec eu mollis elit. Donec condimentum semper cursus. Ut ac ornare nibh. Integer viverra et mauris nec accumsan.',
            'img_cabecera' => '',
            'img_alerta' => '',
            'url_boletin' => '',
            'recomendacion' => '',
        ]);
        AlertaEnvio::create([
            'alerta_id' => 5,
            'estado_id' => 3,
            'fecha' => '2021-08-11',
            'hora' => '08:00:00',
            'puntoX' => -40,
            'puntoY' => -52,
            'url_mapa' => '',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pretium vulputate dui vitae sollicitudin. Vivamus pretium lacus magna, quis porttitor tellus euismod vitae. Mauris dignissim congue tortor id feugiat. Proin lobortis ipsum eu odio congue imperdiet. Cras eu nisi eget mauris rutrum fermentum. Proin augue dui, fringilla eu velit eget, laoreet semper leo. Nulla vel sapien lectus. Duis vulputate, lectus ac imperdiet hendrerit, libero lorem auctor ipsum, in dictum enim neque nec turpis. Nulla neque lacus, dapibus in dignissim sit amet, hendrerit in mauris. Donec eu mollis elit. Donec condimentum semper cursus. Ut ac ornare nibh. Integer viverra et mauris nec accumsan.',
            'img_cabecera' => '',
            'img_alerta' => '',
            'url_boletin' => '',
            'recomendacion' => '',
        ]);
        AlertaEnvio::create([
            'alerta_id' => 5,
            'estado_id' => 4,
            'fecha' => '2021-08-11',
            'hora' => '12:00:00',
            'puntoX' => -40,
            'puntoY' => -52,
            'url_mapa' => '',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pretium vulputate dui vitae sollicitudin. Vivamus pretium lacus magna, quis porttitor tellus euismod vitae. Mauris dignissim congue tortor id feugiat. Proin lobortis ipsum eu odio congue imperdiet. Cras eu nisi eget mauris rutrum fermentum. Proin augue dui, fringilla eu velit eget, laoreet semper leo. Nulla vel sapien lectus. Duis vulputate, lectus ac imperdiet hendrerit, libero lorem auctor ipsum, in dictum enim neque nec turpis. Nulla neque lacus, dapibus in dignissim sit amet, hendrerit in mauris. Donec eu mollis elit. Donec condimentum semper cursus. Ut ac ornare nibh. Integer viverra et mauris nec accumsan.',
            'img_cabecera' => '',
            'img_alerta' => '',
            'url_boletin' => '',
            'recomendacion' => '',
        ]);
    }
}