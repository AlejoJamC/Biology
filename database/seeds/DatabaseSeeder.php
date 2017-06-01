<?php

use Illuminate\Database\Seeder;

use App\Models\UserType;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        UserType::truncate();
        USer::truncate();

        $this->call('TipoUsuarioSeeder');
        $this->call('Usuario');
    }
}
