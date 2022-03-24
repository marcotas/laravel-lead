<?php

namespace Database\Seeders;

use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        UserFactory::new()->withPersonalTeam()->create([
            'name' => 'Marco Avila',
            'email' => 'marco@mail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
