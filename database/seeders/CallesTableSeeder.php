<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\calles;

class CallesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $calles = [
            ['Calle falsa 123',1],
            ['Guerra de los nomos',2],
            ['Avenida los platanos',3],
            ['Los Carrera',4],
            ['Alameda',5],
        ];

        $calles = array_map(function ($calle) {
            return [
                'cal_nombre' => $calle[0],
                'ciu_id' => $calle[1],
            ];
        }, $calles);

        calles::insert($calles);
    }
}
