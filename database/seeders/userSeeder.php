<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $faker = Factory::create();

        foreach (range(10, 60) as $i) {
            User::create([
                'name' => $faker->firstName,
                'email' => $faker->email,
                'email_verified_at' => '2022-04-' . $i,
                'password' => 'admin123'
            ]);
        }
    }
}
