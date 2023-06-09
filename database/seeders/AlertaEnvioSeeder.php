<?php

namespace Database\Seeders;

use App\Models\AlertaEnvio;
use App\Models\Imagen;
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
        // AlertaEnvio::create([
        //     'alerta_id' => 1,
        //     'estado_id' => 3,
        //     'fecha' => '2022-04-21',
        //     'hora' => '12:00:00',
        //     'puntoX' => -10,
        //     'puntoY' => -15,
        //     'url_mapa' => '',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pretium vulputate dui vitae sollicitudin. Vivamus pretium lacus magna, quis porttitor tellus euismod vitae. Mauris dignissim congue tortor id feugiat. Proin lobortis ipsum eu odio congue imperdiet. Cras eu nisi eget mauris rutrum fermentum. Proin augue dui, fringilla eu velit eget, laoreet semper leo. Nulla vel sapien lectus. Duis vulputate, lectus ac imperdiet hendrerit, libero lorem auctor ipsum, in dictum enim neque nec turpis. Nulla neque lacus, dapibus in dignissim sit amet, hendrerit in mauris. Donec eu mollis elit. Donec condimentum semper cursus. Ut ac ornare nibh. Integer viverra et mauris nec accumsan.',
        //     'img_cabecera' => '',
        //     'img_alerta' => '',
        //     'url_boletin' => '',
        //     'recomendacion' => '',
        // ]);
        // AlertaEnvio::create([
        //     'alerta_id' => 1,
        //     'estado_id' => 4,
        //     'fecha' => '2022-04-23',
        //     'hora' => '20:00:00',
        //     'puntoX' => -10,
        //     'puntoY' => -15,
        //     'url_mapa' => '',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pretium vulputate dui vitae sollicitudin. Vivamus pretium lacus magna, quis porttitor tellus euismod vitae. Mauris dignissim congue tortor id feugiat. Proin lobortis ipsum eu odio congue imperdiet. Cras eu nisi eget mauris rutrum fermentum. Proin augue dui, fringilla eu velit eget, laoreet semper leo. Nulla vel sapien lectus. Duis vulputate, lectus ac imperdiet hendrerit, libero lorem auctor ipsum, in dictum enim neque nec turpis. Nulla neque lacus, dapibus in dignissim sit amet, hendrerit in mauris. Donec eu mollis elit. Donec condimentum semper cursus. Ut ac ornare nibh. Integer viverra et mauris nec accumsan.',
        //     'img_cabecera' => '',
        //     'img_alerta' => '',
        //     'url_boletin' => '',
        //     'recomendacion' => '',
        // ]);

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

        // AlertaEnvio::create([
        //     'alerta_id' => 2,
        //     'estado_id' => 4,
        //     'fecha' => '2022-04-24',
        //     'hora' => '10:00:00',
        //     'puntoX' => -20,
        //     'puntoY' => -25,
        //     'url_mapa' => '',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pretium vulputate dui vitae sollicitudin. Vivamus pretium lacus magna, quis porttitor tellus euismod vitae. Mauris dignissim congue tortor id feugiat. Proin lobortis ipsum eu odio congue imperdiet. Cras eu nisi eget mauris rutrum fermentum. Proin augue dui, fringilla eu velit eget, laoreet semper leo. Nulla vel sapien lectus. Duis vulputate, lectus ac imperdiet hendrerit, libero lorem auctor ipsum, in dictum enim neque nec turpis. Nulla neque lacus, dapibus in dignissim sit amet, hendrerit in mauris. Donec eu mollis elit. Donec condimentum semper cursus. Ut ac ornare nibh. Integer viverra et mauris nec accumsan.',
        //     'img_cabecera' => '',
        //     'img_alerta' => '',
        //     'url_boletin' => '',
        //     'recomendacion' => '',
        // ]);

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


        //alerta seeder ejemplo completo
        AlertaEnvio::create([
            'alerta_id' => 6,
            'estado_id' => 3,
            'fecha' => '2023-03-21',
            'hora' => '21:36:00',
            'puntoX' => -0,
            'puntoY' => -0,
            'url_mapa' => '',
            'description' => 'La cuenca Alta del Río Piraí encontrándose en la estación de la Angostura  con un nivel  de agua  de 1.90 m . Se recomiendan tomar precaución ya que el río tiende a crecer si continúan las precipitaciones, atentos Municipios: Samaipata, Torno y La Guardia.
            Se recomienda a los Municipios que puedan ser afectados, difundir la Alerta a través de los medios de comunicación, redes sociales, radios, wasaps, teléfono y otros. 
            Estos fenómenos meteorológicos con capacidad de daño y riesgo de interrupción momentánea de actividades cotidianas.
            ',
            'img_cabecera' => '',
            'img_alerta' => '',
            'url_boletin' => '',
            'recomendacion' => 'Se recomienda  a los  COED de cada nivel territorial debe reunirse para evaluar los posibles efectos. Ministerios e instancias encargadas de ADE , los GAD Y GAM deben revisar  y activar los planes de contingencia de acuerdo a metodología  y protocolos  establecidos, según sus competencias.',
        ]);
        // AlertaEnvio::create([
        //     'alerta_id' => 6,
        //     'estado_id' => 3,
        //     'fecha' => '2023-03-22',
        //     'hora' => '8:19:00',
        //     'puntoX' => -0,
        //     'puntoY' => -0,
        //     'url_mapa' => '',
        //     'description' => 'La cuenca Alta del Río Piraí encontrándose en la estación de la Angostura  con un nivel  de agua  de 2.40 m . Se recomiendan tomar precaución ya que el río tiende a crecer si continúan las precipitaciones, atentos Municipios: Samaipata, Torno y La Guardia.
        //     Se recomienda a los Municipios que puedan ser afectados, difundir la Alerta a través de los medios de comunicación, redes sociales, radios, wasaps, teléfono y otros. 
        //     Estos fenómenos meteorológicos con capacidad de daño y riesgo de interrupción momentánea de actividades cotidianas.
        //     ',
        //     'img_cabecera' => '',
        //     'img_alerta' => '',
        //     'url_boletin' => '',
        //     'recomendacion' => 'Se recomienda  a los  COED de cada nivel territorial debe reunirse para evaluar los posibles efectos. Ministerios e instancias encargadas de ADE , los GAD Y GAM deben revisar  y activar los planes de contingencia de acuerdo a metodología  y protocolos  establecidos, según sus competencias.',
        // ]);

        AlertaEnvio::create([
            'alerta_id' => 6,
            'estado_id' => 3,
            'fecha' => '2023-03-22',
            'hora' => '8:19:00',
            'puntoX' => -0,
            'puntoY' => -0,
            'url_mapa' => '',
            'description' => 'La cuenca Alta del Río Piraí encontrándose en la estación de la Angostura  con un nivel  de agua  de 2.40 m . Se recomiendan tomar precaución ya que el río tiende a crecer si continúan las precipitaciones, atentos Municipios: Samaipata, Torno y La Guardia.
            Se recomienda a los Municipios que puedan ser afectados, difundir la Alerta a través de los medios de comunicación, redes sociales, radios, wasaps, teléfono y otros. 
            Estos fenómenos meteorológicos con capacidad de daño y riesgo de interrupción momentánea de actividades cotidianas.
            ',
            'img_cabecera' => '',
            'img_alerta' => '',
            'url_boletin' => '',
            'recomendacion' => 'Se recomienda  a los  COED de cada nivel territorial debe reunirse para evaluar los posibles efectos. Ministerios e instancias encargadas de ADE , los GAD Y GAM deben revisar  y activar los planes de contingencia de acuerdo a metodología  y protocolos  establecidos, según sus competencias.',
        ]);

        AlertaEnvio::create([
            'alerta_id' => 6,
            'estado_id' => 1,
            'fecha' => '2023-03-22',
            'hora' => '13:03:00',
            'puntoX' => -0,
            'puntoY' => -0,
            'video' => '/storage/eventos/inundaciones/videos/video3.mp4',
            'url_mapa' => '',
            'description' => 'La cuenca Alta del Río Piraí encontrándose en la estación de la Angostura  con un nivel  de agua  de 4.20.m Se recomiendan al Municipio actuar con su plan de contingencia 
            “El rojo quiere decir que hay un riesgo meteorológico e hidrológico, es extremo, es un fenómeno no habitual, de intensidad fuerte, excepcional y con un nivel de riesgo muy alto para la población”, 
            El río Piraí y sus afluentes secundarios ascensos con posibles desbordes en las poblaciones de y comunidades cercanas de los Municipios: Samaipata, Torno y la Guardia 
            ',
            'img_cabecera' => '',
            'img_alerta' => '',
            'url_boletin' => '',
            'recomendacion' => 'Se recomienda a los Municipios que puedan ser afectados, se deben activar los COE en los diferentes niveles y ejecutar  los planes de contingencia y recomendar a las  diferentes instancias  responsables  de las declatorias de desastres y/o emergencia  de la declaratoria de la emergencia.',
        ]);

        // AlertaEnvio::create([
        //     'alerta_id' => 6,
        //     'estado_id' => 1,
        //     'fecha' => '2023-03-22',
        //     'hora' => '13:03:00',
        //     'puntoX' => -0,
        //     'puntoY' => -0,
        //     'url_mapa' => '',
        //     'description' => 'La cuenca Alta del Río Piraí encontrándose en la estación de la Angostura  con un nivel  de agua  de 5.10 m. 
        //     “El rojo quiere decir que hay un riesgo meteorológico e hidrológico, es extremo, es un fenómeno no habitual, de intensidad fuerte, excepcional y con un nivel de riesgo muy alto para la población”, 
        //     El río Piraí y sus afluentes secundarios ascensos con posibles desbordes en las poblaciones de y comunidades cercanas de los Municipios: Samaipata, Torno y la Guardia 
        //     ',
        //     'img_cabecera' => '',
        //     'img_alerta' => '',
        //     'url_boletin' => '',
        //     'recomendacion' => 'Se recomienda a los Municipios que puedan ser afectados, se deben activar los COE en los diferentes niveles y ejecutar  los planes de contingencia y recomendar a las  diferentes instancias  responsables  de las declatorias de desastres y/o emergencia  de la declaratoria de la emergencia.',
        // ]);
        AlertaEnvio::create([
            'alerta_id' => 6,
            'estado_id' => 1,
            'fecha' => '2023-03-22',
            'hora' => '14:01:00',
            'puntoX' => -0,
            'puntoY' => -0,
            'video' => '/storage/eventos/inundaciones/videos/video2.mp4',
            'url_mapa' => '',
            'description' => 'La cuenca Alta del Río Piraí encontrándose en la estación de la Angostura  con un nivel  de agua  de 5.10 m. 
            “El rojo quiere decir que hay un riesgo meteorológico e hidrológico, es extremo, es un fenómeno no habitual, de intensidad fuerte, excepcional y con un nivel de riesgo muy alto para la población”, 
            El río Piraí y sus afluentes secundarios ascensos con posibles desbordes en las poblaciones de y comunidades cercanas de los Municipios: Samaipata, Torno y la Guardia 
            ',
            'img_cabecera' => '',
            'img_alerta' => '',
            'url_boletin' => '',
            'recomendacion' => 'Se recomienda a los Municipios que puedan ser afectados, se deben activar los COE en los diferentes niveles y ejecutar  los planes de contingencia y recomendar a las  diferentes instancias  responsables  de las declatorias de desastres y/o emergencia  de la declaratoria de la emergencia.',
        ]);
        AlertaEnvio::create([
            'alerta_id' => 6,
            'estado_id' => 2,
            'fecha' => '2023-03-23',
            'hora' => '07:05:00',
            'puntoX' => -0,
            'puntoY' => -0,
            'url_mapa' => '',
            'video' => '/storage/eventos/inundaciones/videos/video1.mp4',
            'description' => 'La cuenca Alta del Río Piraí encontrándose en la estación de la Angostura  con un nivel  de agua  de 2.66 m. 
            Existe un riesgo meteorológico importante (Fenómenos meteorológicos no habituales  y con cierto grado de peligro para las actividades usuales)
            Se preveé  que el evento adverso ocurra y su desarrollo pueda afectar  a la población, medos de vidas, sistemas productivos, accesibilidad  a servicios básicos  y otros.
            El río Piraí y sus afluentes secundarios ascensos con posibles desbordes en las poblaciones de y comunidades cercanas de los Municipios: Samaipata, Torno y la Guardia .
            ',
            'img_cabecera' => '',
            'img_alerta' => '',
            'url_boletin' => '',
            'recomendacion' => 'Se  recomienda  que  se deben activar mecanismos  de comunicación  y difusión  a la poblaciones  susceptibles de ser afectadas por los riesgos potenciales o latentes y protocolos  a seguir en caso  en caso de presentarse  situación de desastre y/o emergencia. Mienbros del COED en los diferentes niveles deberán operativizar de manera inicial y previsoria los recursos y personal ´previsto en su planificación  operativa anual y presupuesto institucional, necesarios para la atención de acuerdo a procedimiento  regulares.',
        ]);
        AlertaEnvio::create([
            'alerta_id' => 6,
            'estado_id' => 3,
            'fecha' => '2023-03-27',
            'hora' => '15:49:00',
            'puntoX' => -0,
            'puntoY' => -0,
            'url_mapa' => '',
            'description' => 'La cuenca Alta del Río Piraí encontrándose en la estación de la Angostura  con un nivel  de agua  de 1.33 m . Se recomiendan tomar precaución ya que continuamos con las precipitaciones  y los ríos se mantienen hasta esta hora , atentos Municipios: Samaipata, Torno y La Guardia.',
            'img_cabecera' => '',
            'img_alerta' => '',
            'url_boletin' => '',
            'recomendacion' => 'Se recomienda a los Municipios que puedan ser afectados, difundir la Alerta a estas horas de la mañana  a través de los medios de comunicación, redes sociales, radios, wasaps, teléfono y otros. ',
        ]);
        AlertaEnvio::create([
            'alerta_id' => 6,
            'estado_id' => 3,
            'fecha' => '2023-03-24',
            'hora' => '06:06:00',
            'puntoX' => -0,
            'puntoY' => -0,
            'url_mapa' => '',
            'description' => 'La cuenca Alta del Río Piraí encontrándose en la estación de la Angostura  con un nivel  de agua  de 2.27 m . Se recomiendan tomar precaución ya que el río tiende a crecer río si continúan las precipitaciones, atentos Municipios: Samaipata, Torno y La Guardia.
            Se recomienda a los Municipios que puedan ser afectados, difundir la Alerta a través de los medios de comunicación, redes sociales, radios, wasaps, teléfono y otros. 
            Estos fenómenos meteorológicos con capacidad de daño y riesgo de interrupción momentánea de actividades cotidianas.
            ',
            'img_cabecera' => '',
            'img_alerta' => '',
            'url_boletin' => '',
            'recomendacion' => 'Se recomienda  a los  COED de cada nivel territorial debe reunirse para evaluar los posibles efectos. Ministerios e instancias encargadas de ADE , los GAD Y GAM deben revisar  y activar los planes de contingencia de acuerdo a metodología  y protocolos  establecidos, según sus competencias',
        ]);
        // AlertaEnvio::create([
        //     'alerta_id' => 6,
        //     'estado_id' => 3,
        //     'fecha' => '2023-03-22',
        //     'hora' => '13:03:00',
        //     'puntoX' => -0,
        //     'puntoY' => -0,
        //     'url_mapa' => '',
        //     'description' => 'La cuenca Alta del Río Piraí encontrándose en la estación de la Angostura  con un nivel  de agua  de 1.33 m . Se recomiendan tomar precaución ya que continuamos con las precipitaciones  y los ríos se mantienen hasta esta hora , atentos Municipios: Samaipata, Torno y La Guardia.',
        //     'img_cabecera' => '',
        //     'img_alerta' => '',
        //     'url_boletin' => '',
        //     'recomendacion' => 'Se recomienda a los Municipios que puedan ser afectados, difundir la Alerta a estas horas de la mañana  a través de los medios de comunicación, redes sociales, radios, wasaps, teléfono y otros. ',
        // ]);
        AlertaEnvio::create([
            'alerta_id' => 6,
            'estado_id' => 3,
            'fecha' => '2023-03-28',
            'hora' => '08:23:00',
            'puntoX' => -0,
            'puntoY' => -0,
            'url_mapa' => '',
            'description' => 'La cuenca Alta del Río Piraí encontrándose en la estación de la Angostura  con un nivel  de agua  de 1.14 m . Se recomiendan tomar precaución ya que continuamos con las precipitaciones  y los ríos se mantienen hasta esta hora , atentos Municipios: Samaipata, Torno y La Guardia.',
            'img_cabecera' => '',
            'img_alerta' => '',
            'url_boletin' => '',
            'recomendacion' => 'Se recomienda a los Municipios que puedan ser afectados, difundir la Alerta a estas horas de la mañana  a través de los medios de comunicación, redes sociales, radios, wasaps, teléfono y otros. ',
        ]);

        AlertaEnvio::create([
            'alerta_id' => 6,
            'estado_id' => 3,
            'fecha' => '2023-03-29',
            'hora' => '08:53:00',
            'puntoX' => -0,
            'puntoY' => -0,
            'url_mapa' => '',
            'description' => 'La cuenca Alta del Río Piraí encontrándose en la estación de la Angostura  con un nivel  de agua  de 0.97m . Se recomiendan tomar precaución ya que continuamos con las precipitaciones  y los ríos se mantienen hasta esta hora , atentos Municipios: Samaipata, Torno y La Guardia.',
            'img_cabecera' => '',
            'img_alerta' => '',
            'url_boletin' => '',
            'recomendacion' => 'Se recomienda a los Municipios que puedan ser afectados, difundir la Alerta a estas horas de la mañana  a través de los medios de comunicación, redes sociales, radios, wasaps, teléfono y otros. ',
        ]);
        AlertaEnvio::create([
            'alerta_id' => 6,
            'estado_id' => 4,
            'fecha' => '2023-03-30',
            'hora' => '18:26:00',
            'puntoX' => -0,
            'puntoY' => -0,
            'url_mapa' => '',
            'description' => 'La cuenca Alta del Río Piraí encontrándose en la estación de la Angostura  con un nivel  de agua normal  de 0.84 m en la estación de la Angostura,  Municipios: Samaipata, Torno y La Guardia.

            No  existe ningún riesgo meteorológico ni hidrológico
            Vuelve  a la normalidad aún no ha ocurrido el evento adverso se considera una situación normalidad
            ',
            'img_cabecera' => '',
            'img_alerta' => '',
            'url_boletin' => '',
            'recomendacion' => 'Se recomienda instancia encargada de ADE, los GAD y GAM cumplen actividades de mantenimiento, reparación de infraestructura y equipos; capacitación permanente al personal, campaña  de concientización e información  a la población',
        ]);


        Imagen::create([
            'path' => '/storage/eventos/inundaciones/imgs/1/critico/1.jpg',
            'description' => 'Aquí vendrá su descripción de prueba.',
            'alerta_envio_id' => 11
        ]);

        Imagen::create([
            'path' => '/storage/eventos/inundaciones/imgs/1/critico/2.jpg',
            'description' => 'Aquí vendrá su descripción de prueba.',
            'alerta_envio_id' => 11
        ]);

        Imagen::create([
            'path' => '/storage/eventos/inundaciones/imgs/1/critico/3.jpg',
            'description' => 'Aquí vendrá su descripción de prueba.',
            'alerta_envio_id' => 11
        ]);
        Imagen::create([
            'path' => '/storage/eventos/inundaciones/imgs/1/critico/4.jpg',
            'description' => 'Aquí vendrá su descripción de prueba.',
            'alerta_envio_id' => 11
        ]);
        // Imagen::create([
        //     'path' => '/storage/eventos/inundaciones/imgs/1/critico/5.jpg',
        //     'description' => 'Aquí vendrá su descripción de prueba.',
        //     'alerta_envio_id' => 12
        // ]);
        Imagen::create([
            'path' => '/storage/eventos/inundaciones/imgs/1/critico/6.jpg',
            'description' => 'Aquí vendrá su descripción de prueba.',
            'alerta_envio_id' => 15
        ]);
        Imagen::create([
            'path' => '/storage/eventos/inundaciones/imgs/1/muy alto/7.jpg',
            'description' => 'Aquí vendrá su descripción de prueba.',
            'alerta_envio_id' => 12
        ]);

        Imagen::create([
            'path' => '/storage/eventos/inundaciones/imgs/1/critico/8.jpg',
            'description' => 'Aquí vendrá su descripción de prueba.',
            'alerta_envio_id' => 10
        ]);

        Imagen::create([
            'path' => '/storage/eventos/inundaciones/imgs/1/critico/9.jpg',
            'description' => 'Aquí vendrá su descripción de prueba.',
            'alerta_envio_id' => 10
        ]);
        Imagen::create([
            'path' => '/storage/eventos/inundaciones/imgs/1/critico/10.jpg',
            'description' => 'Aquí vendrá su descripción de prueba.',
            'alerta_envio_id' => 10
        ]);
        Imagen::create([
            'path' => '/storage/eventos/inundaciones/imgs/1/critico/11.jpg',
            'description' => 'Aquí vendrá su descripción de prueba.',
            'alerta_envio_id' => 10
        ]);
        Imagen::create([
            'path' => '/storage/eventos/inundaciones/imgs/1/critico/12.jpg',
            'description' => 'Aquí vendrá su descripción de prueba.',
            'alerta_envio_id' => 10
        ]);
        Imagen::create([
            'path' => '/storage/eventos/inundaciones/imgs/1/critico/13.jpg',
            'description' => 'Aquí vendrá su descripción de prueba.',
            'alerta_envio_id' => 10
        ]);

        // Imagen::create([
        //     'path' => '/storage/eventos/inundaciones/imgs/1/critico/14.jpg',
        //     'description' => 'Aquí vendrá su descripción de prueba.',
        //     'alerta_envio_id' => 12
        // ]);

        // Imagen::create([
        //     'path' => '/storage/eventos/inundaciones/imgs/1/critico/15.jpg',
        //     'description' => 'Aquí vendrá su descripción de prueba.',
        //     'alerta_envio_id' => 12
        // ]);
        // Imagen::create([
        //     'path' => '/storage/eventos/inundaciones/imgs/1/critico/16.jpg',
        //     'description' => 'Aquí vendrá su descripción de prueba.',
        //     'alerta_envio_id' => 12
        // ]);
        // Imagen::create([
        //     'path' => '/storage/eventos/inundaciones/imgs/1/critico/17.jpg',
        //     'description' => 'Aquí vendrá su descripción de prueba.',
        //     'alerta_envio_id' => 12
        // ]);
        Imagen::create([
            'path' => '/storage/eventos/inundaciones/imgs/1/critico/18.jpg',
            'description' => 'Aquí vendrá su descripción de prueba.',
            'alerta_envio_id' => 11
        ]);
        Imagen::create([
            'path' => '/storage/eventos/inundaciones/imgs/1/critico/19.jpg',
            'description' => 'Aquí vendrá su descripción de prueba.',
            'alerta_envio_id' => 11
        ]);
        Imagen::create([
            'path' => '/storage/eventos/inundaciones/imgs/1/normal/20.png',
            'description' => 'Aquí vendrá su descripción de prueba.',
            'alerta_envio_id' => 17
        ]);
        Imagen::create([
            'path' => '/storage/eventos/inundaciones/imgs/1/moderado/21.jfif',
            'description' => 'Aquí vendrá su descripción de prueba.',
            'alerta_envio_id' => 16
        ]);
        Imagen::create([
            'path' => '/storage/eventos/inundaciones/imgs/1/normal/22.png',
            'description' => 'Aquí vendrá su descripción de prueba.',
            'alerta_envio_id' => 17
        ]);
        Imagen::create([
            'path' => '/storage/eventos/inundaciones/imgs/1/moderado/23.png',
            'description' => 'Medidor',
            'alerta_envio_id' => 16
        ]);
        Imagen::create([
            'path' => '/storage/eventos/inundaciones/imgs/1/normal/24.png',
            'description' => 'Entrega de  bolsas Big Bag rellena de tierra de 1 tonelada para realizar el trabajo con los comunarios y así poder reforzar los defensivos',
            'alerta_envio_id' => 17
        ]);
        Imagen::create([
            'path' => '/storage/eventos/inundaciones/imgs/1/normal/25.png',
            'description' => 'Realiza  el mantenimiento de las estaciones hidrometeorológicas ubicadas en el sector de la Angostura en el municipio de ElTorno y en el sector de Bermejo en el Municipio de Samaipata.
            Con estas estaciones se recolecta y recepciona datos como ser, nivel del río y registro de precipitación en la cuenca alta del río Piraí y así poder dar una alerta temprana ante una crecida.',
            'alerta_envio_id' => 17
        ]);
        Imagen::create([
            'path' => '/storage/eventos/inundaciones/imgs/1/normal/26.png',
            'description' => 'Capacitación en temas de Niveles de Alerta a los técnicos de la UGR',
            'alerta_envio_id' => 17
        ]);
    }
}
