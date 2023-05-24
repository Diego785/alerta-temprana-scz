<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=> 'Diego Hurtado Vargas',
            'email'=> 'Diego@gmail.com',
            'password'=> bcrypt('12345678'),
        ]);
        User::create([
            'name'=> 'Melanie Daisy Yupanqui Larico',
            'email'=> 'Melanie@gmail.com',
            'password'=> bcrypt('12345678'),
        ]);
    }
}
