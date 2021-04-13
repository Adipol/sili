<?php

namespace Database\Seeders;

use App\Models\Month;
use Illuminate\Database\Seeder;

class MonthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Month::Create([
            'name' => 'Enero',
        ]);
        Month::Create([
            'name' => 'Febrero',
        ]);
        Month::Create([
            'name' => 'Marzo',
        ]);
        Month::Create([
            'name' => 'Abril',
        ]);
        Month::Create([
            'name' => 'Mayo',
        ]);
        Month::Create([
            'name' => 'Junio',
        ]);
        Month::Create([
            'name' => 'Julio',
        ]);
        Month::Create([
            'name' => 'Agosto',
        ]);
        Month::Create([
            'name' => 'Septiembre',
        ]);
        Month::Create([
            'name' => 'Octubre',
        ]);
        Month::Create([
            'name' => 'Noviembre',
        ]);
        Month::Create([
            'name' => 'Diciembre',
        ]);
    }
}
