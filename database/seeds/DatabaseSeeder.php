<?php

use Illuminate\Database\Seeder;

use App\Models\UserType;

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

        $this->call('TipoUsuarioSeeder');
    }
}
