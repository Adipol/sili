<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::Create([
            'name' => 'siri',
            'email' => 'siri@email.com',
            'password' => bcrypt('siri123456'),
            'entity_id' => '1'
        ]);

        $user->assignRole('Admin');

        User::factory(15)->create();
    }
}
