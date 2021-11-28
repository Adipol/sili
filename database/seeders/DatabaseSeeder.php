<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Department;
use App\Models\Detail;
use App\Models\Entity;
use App\Models\Month;
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
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        Country::factory(10)->create();
        Department::factory(10)->create();
        Entity::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(DetailSeeder::class);
    }
}
