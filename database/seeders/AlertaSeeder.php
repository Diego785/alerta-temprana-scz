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
            'fecha' => '2022-04-20',
            'hora' => '18:00:00',
            'description' => 'Gran incendio estructural causado por imprudencia de los trabajadores del surtidor Moragrande II, donde hay 3 personas heridas con quemaduras de 1er. y 2do. grado',
            // 'foto' => json_encode(['imgs/incendio_estructural/1.jpg', 'imgs/incendio_estructural/2.jpg', 'imgs/incendio_estructural/3.jpg', 'imgs/incendio_estructural/4.jpg', 'imgs/incendio_estructural/5.jpg']),
            'geoX' => -10,
            'geoY' => -15,
            'url_mapa'=>'' ,          
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
            'fecha' => '2021-03-10',
            'hora' => '20:00:00',
            'description' => 'Incendio forestal leve controlado, donde se encuentra ya la zona fuera de peligro y actualmente quedan solo cenizas.',
            // 'foto' => json_encode(['imgs/incendio_forestal/1.jpg', 'imgs/incendio_forestal/2.jpg']),
            'geoX' => -20,
            'geoY' => -25,
            'url_mapa'=>'' ,          
            'evento_id' => 1,
            'unidad_id' => 3,
        ]);
        Alerta::create([
            'nombre' => 'Alerta de posible inundación del río Piraí en las próximas horas',
            'fecha' => '2021-03-10',
            'hora' => '20:00:00',
            'description' => 'Prevención de inundación en el río Piraí, en horas de la tarde, llegando la lluvia de la zona sur',
            // 'foto' => json_encode(['imgs/incendio_forestal/1.jpg', 'imgs/incendio_forestal/2.jpg']),
            'geoX' => -30,
            'geoY' => -45,
            'url_mapa'=>'' ,          
            'evento_id' => 3,
            'unidad_id' => 2,
        ]);
        Alerta::create([
            'nombre' => 'Conflicto social grave entre gente afines al Más',
            'fecha' => '2022-01-10',
            'hora' => '10:00:00',
            'description' => "Una pelea campal entre personas que son afines al partido del Más, está dejando muchas personas heridas, la cual solo ha incrementado la gravedad las últimas horas.",
            // 'foto' => json_encode(['imgs/incendio_forestal/1.jpg', 'imgs/incendio_forestal/2.jpg']),
            'geoX' => -15,
            'geoY' => -80,
            'url_mapa'=>'' ,          
            'evento_id' => 9,
            'unidad_id' => 2,
        ]);
        Alerta::create([
            'nombre' => 'Desbordamiento del rio pirai',
            'fecha' => '2021-08-10',
            'hora' => '20:00:00',
            'description' => 'En las horas de la mañana se registro la crecida del rio pirai afectando a las zona cercanas, donde ya hay una docena de familias afectadas, 3 personas muertas y 20 personas heridas, con altas posibilidades de que siga incrementando.',
            // 'foto' => json_encode(['imgs/incendio_forestal/1.jpg', 'imgs/incendio_forestal/2.jpg']),
            'geoX' => -40,
            'geoY' => -52,
            'url_mapa'=>'' ,          
            'evento_id' => 3,
            'unidad_id' => 1,
        ]);
        Alerta::create([
            'nombre' => 'Desbordamiento del rio pirai',
            'fecha' => '2021-08-10',
            'hora' => '20:00:00',
            'description' => 'En las horas de la mañana se registro la crecida del rio pirai afectando a las zona cercanas, donde ya hay una docena de familias afectadas, 3 personas muertas y 20 personas heridas, con altas posibilidades de que siga incrementando.',
            // 'foto' => json_encode(['imgs/incendio_forestal/1.jpg', 'imgs/incendio_forestal/2.jpg']),
            'geoX' => -40,
            'geoY' => -52,
            'url_mapa'=>'' ,          
            'evento_id' => 6,
            'unidad_id' => 1,
        ]);
    }
}
