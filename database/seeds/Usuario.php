<?php

use Illuminate\Database\Seeder;

use App\Models\User;

class Usuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create
        ([
            'nombre' => 'Danilo Alfonso',
            'apellido' => 'Cadena Cadena',
            'email' => 'daniloacc1991@gmail.com',
            'password' => bcrypt('123456'),
            'tipo_id' => 1,
            'estado' => 1
        ]);
    }
}
