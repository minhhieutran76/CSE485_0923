<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Author;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
      DB::table('authors')->delete();
      
      $faker = Faker::create();

      for($i=0; $i<50; $i++){
        Author::create([
            'name' => $faker->name,
        ]);
      }
    }
}
