<?php

namespace Database\Seeders;

use App\Models\Alerta;
use Illuminate\Database\Seeder;

class AlertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alerta::create([
            'nombre' => 'Incendio Estructural de gran magnitud en surtidor Moragrande II',
            'fecha' => '2023-04-20',
            'hora' => '18:00:00',
            'description' => 'Gran incendio estructural causado por imprudencia de los trabajadores del surtidor Moragrande II, donde hay 3 personas heridas con quemaduras de 1er. y 2do. grado',
            // 'foto' => json_encode(['imgs/incendio_estructural/1.jpg', 'imgs/incendio_estructural/2.jpg', 'imgs/incendio_estructural/3.jpg', 'imgs/incendio_estructural/4.jpg', 'imgs/incendio_estructural/5.jpg']),
            'geoX' => -10,
            'geoY' => -15,
            'url_mapa' => '',
            'evento_id' => 2,
            'unidad_id' => 3,
        ]);
        // Alerta::create([
        //     'nombre' => 'Alerta de posible inundación del río Piraí en las próximas horas',
        //     'fecha' => '2022-08-15',
        //     'hora' => '22:00:00',
        //     'description' => 'Prevención de inundación en el río Piraí, en horas de la tarde, llegando la lluvia de la zona sur',
        //     // 'foto' => json_encode(['imgs/incendio_estructural/1.jpg', 'imgs/incendio_estructural/2.jpg', 'imgs/incendio_estructural/3.jpg', 'imgs/incendio_estructural/4.jpg', 'imgs/incendio_estructural/5.jpg']),
        //     'geoX' => -10,
        //     'geoY' => -15,
        //     'url_mapa'=>'' ,          
        //     'evento_id' => 3,
        //     'unidad_id' => 1,
        // ]);

        Alerta::create([
            'nombre' => 'Incendio forestal leve en la zona sur de la Chiquitanía',
            'fecha' => '2023-03-10',
            'hora' => '20:00:00',
            'description' => 'Incendio forestal leve controlado, donde se encuentra ya la zona fuera de peligro y actualmente quedan solo cenizas.',
            // 'foto' => json_encode(['imgs/incendio_forestal/1.jpg', 'imgs/incendio_forestal/2.jpg']),
            'geoX' => -20,
            'geoY' => -25,
            'url_mapa' => '',
            'evento_id' => 1,
            'unidad_id' => 3,
        ]);
        Alerta::create([
            'nombre' => 'Alerta de posible inundación del río Piraí en las próximas horas',
            'fecha' => '2023-03-10',
            'hora' => '20:00:00',
            'description' => 'Prevención de inundación en el río Piraí, en horas de la tarde, llegando la lluvia de la zona sur',
            // 'foto' => json_encode(['imgs/incendio_forestal/1.jpg', 'imgs/incendio_forestal/2.jpg']),
            'geoX' => -30,
            'geoY' => -45,
            'url_mapa' => '',
            'evento_id' => 3,
            'unidad_id' => 2,
        ]);
        Alerta::create([
            'nombre' => 'Conflicto social grave entre gente afines al Más',
            'fecha' => '2023-01-10',
            'hora' => '10:00:00',
            'description' => "Una pelea campal entre personas que son afines al partido del Más, está dejando muchas personas heridas, la cual solo ha incrementado la gravedad las últimas horas.",
            // 'foto' => json_encode(['imgs/incendio_forestal/1.jpg', 'imgs/incendio_forestal/2.jpg']),
            'geoX' => -15,
            'geoY' => -80,
            'url_mapa' => '',
            'evento_id' => 9,
            'unidad_id' => 2,
        ]);
        Alerta::create([
            'nombre' => 'Desbordamiento del rio pirai',
            'fecha' => '2023-02-10',
            'hora' => '20:00:00',
            'description' => 'En las horas de la mañana se registro la crecida del rio pirai afectando a las zona cercanas, donde ya hay una docena de familias afectadas, 3 personas muertas y 20 personas heridas, con altas posibilidades de que siga incrementando.',
            // 'foto' => json_encode(['imgs/incendio_forestal/1.jpg', 'imgs/incendio_forestal/2.jpg']),
            'geoX' => -40,
            'geoY' => -52,
            'url_mapa' => '',
            'evento_id' => 3,
            'unidad_id' => 1,
        ]);       
        
        // EJEMPLO REAL 
        Alerta::create([
            'nombre' => 'Desborde de ríos',
            'fecha' => '2023-03-10',
            'hora' => '21:36:00',
            'description' => 'El Gobierno Autónomo Departamental de Santa Cruz y  la  Secretaria Departamental  de Seguridad Ciudadana  través  de su Brazo Operativo  de la Dirección de Gestión de Riesgos  con su Unidad  de Alerta Temprana,  de acuerdo al monitoreo que se realiza y se socializa los boletines de alerta y recomendaciones de prevención  , podemos  describir el  procesos de la alerta. El evento inicia día  21 de marzo de  2023 a hrs:21:36 en el Río Piraí (Cuenca Alta), con una CRECIDA PEQUEÑA (color amarillo), en la estación Angostura con un nivel de agua  de 1,90 m , el 22 manteniéndose la crecida pequeña, 22 a hrs: 13:03 con una CRECIDA EXTRAORDINARIA ( color rojo)  con un nivel de agua 4.20 m, a hrs: 14: 01 pm del mismo día manteniéndose la crecida  con un nivel  de 5.10 m , el mismo día  a hrs: 20:15 se mantiene la crecida extraordinaria  con un nivel 4.05 m y en fecha 23 a hrs: 7:05 am  con GRANDE CRECIDA color naranja  con un nivel  de 2.66 m , de fecha 24  a 27 ,28.29, a hrs. 6:06 crecida pequeña con un nivel 2.27 m, y de fecha 30 a hrs: 18:26 con un nivel de estado normal . Teniendo una fuente: SEARPI- AT-DGR-SDSC.',
            // 'foto' => json_encode(['imgs/incendio_forestal/1.jpg', 'imgs/incendio_forestal/2.jpg']),
            'geoX' => -40,
            'geoY' => -52,
            'url_mapa' => '',
            'evento_id' => 3,
            'unidad_id' => 1,
        ]);     

       
    }
}