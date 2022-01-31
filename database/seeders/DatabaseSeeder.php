<?php

namespace Database\Seeders;

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
        $this->call(RegionesTableSeeder::class);
        $this->call(ProvinciaTableSeeder::class);
        $this->call(CiudadesTableSeeder::class);
        $this->call(CallesTableSeeder::class);
    }
}
