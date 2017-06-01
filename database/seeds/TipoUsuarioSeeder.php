<?php

use Illuminate\Database\Seeder;

use App\Models\UserType;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserType::create
        ([
            'nombre' => 'Estudiante'
        ]);

        UserType::create
        ([
            'nombre' => 'Profesor'
        ]);
    }
}
