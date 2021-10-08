<?php

namespace Database\Seeders;

use App\Models\Detail;
use Illuminate\Database\Seeder;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Detail::Create([
            'name' => 'Archivo XLSX',
        ]);

        Detail::Create([
            'name' => 'Archivo CSV',
        ]);
    }
}
