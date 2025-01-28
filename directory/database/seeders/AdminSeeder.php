<?php

namespace Database\Seeders;

use App\Models\Admin;
use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {
        $demoUser = Admin::create([
            'name'              => $faker->name,
            'email'             => 'admin@email.com',
            'password'          => Hash::make('12345678'),
        ]);

        $demoUser2 = Admin::create([
            'name'              => $faker->name,
            'email'             => 'admin@gmail.com',
            'password'          => Hash::make('12345678'),
        ]);
    }
}
