<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $operadorRole = Role::firstOrCreate(['name' => 'operador', 'guard_name' => 'web']);
        $administradorRole = Role::firstOrCreate(['name' => 'administrador', 'guard_name' => 'web']);
        $superadministradorRole = Role::firstOrCreate(['name' => 'Superadministrador', 'guard_name' => 'web']);

        User::create([
            'name' => 'Diego Hurtado Vargas',
            'email' => 'Diego@gmail.com',
            'password' => bcrypt('12345678'),
        ])->assignRole($administradorRole);

        User::create([
            'name' => 'Melanie Daisy Yupanqui Larico',
            'email' => 'Melanie@gmail.com',
            'password' => bcrypt('12345678'),
        ])->assignRole($administradorRole);

        User::create([
            'name' => 'operadortest',
            'email' => 'operadortest@gmail.com',
            'password' => bcrypt('12345678'),
        ])->assignRole($operadorRole);

        User::create([
            'name' => 'Super admin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('12345678'),
        ])->assignRole($superadministradorRole);
    }
}
