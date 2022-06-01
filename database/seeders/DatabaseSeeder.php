<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Paciente;
use App\Models\Proceso;
use App\Models\Direccione;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(20)->create();
        //Paciente::factory(20)->create();

    }
}
