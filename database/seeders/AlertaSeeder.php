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
            'description' => 'Gran incendio estructural causado por imprudencia de los trabajadores del surtidor Moragrande II, donde hay 3 personas heridas con quemaduras de 1er. y 2do. grado',
            // 'foto' => json_encode(['imgs/incendio_estructural/1.jpg', 'imgs/incendio_estructural/2.jpg', 'imgs/incendio_estructural/3.jpg', 'imgs/incendio_estructural/4.jpg', 'imgs/incendio_estructural/5.jpg']),
            'geoX' => -10,
            'geoY' => -15,
            'fecha' => '2022-04-20',
            'hora' => '18:00:00',
            'evento_id' => 2,
            'estado_id' => 2,
        ]);
        Alerta::create([
            'nombre' => 'Alerta de posible inundación del río Piraí en las próximas horas',
            'description' => 'Prevención de inundación en el río Piraí, en horas de la tarde, llegando la lluvia de la zona sur',
            // 'foto' => json_encode(['imgs/inundaciones/1.jpg', 'imgs/inundaciones/2.jpg', 'imgs/inundaciones/3.jpg']),
            'geoX' => -15,
            'geoY' => -10,
            'fecha' => '2022-08-15',
            'hora' => '22:00:00',
            'evento_id' => 3,
            'estado_id' => 3
        ]);
        Alerta::create([
            'nombre' => 'Incendio forestal leve en la zona sur de la Chiquitanía',
            'description' => 'Gran incendio estructural causado por imprudencia de los trabajadores del surtidor Moragrande II, donde hay 3 personas heridas con quemaduras de 1er. y 2do. grado',
            // 'foto' => json_encode(['imgs/incendio_forestal/1.jpg', 'imgs/incendio_forestal/2.jpg']),
            'geoX' => -20,
            'geoY' => -25,
            'fecha' => '2021-03-10',
            'hora' => '20:00:00',
            'evento_id' => 1,
            'estado_id' => 3
        ]);
    }
}
