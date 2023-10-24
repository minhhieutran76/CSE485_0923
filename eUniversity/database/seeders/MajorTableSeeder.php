<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Major;

class MajorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for($i=0; $i<30; $i++){
            Major::create([
                'name' => $faker->name,
                'description' => $faker->sentence(2, true),
                'duration' => $faker->randomNumber(1),
            ]);
          }
    }
}
