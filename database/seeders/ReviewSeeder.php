<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        DB::table('reviews')->insert([
            'business_id' => '1',
            'user_id' => 3,
            'rating' => 5,
            'price_rating' => 2,
            'title' => 'Very excellent restaurant!',
            'content' => $faker->text(1500),
            'picture' => '/reviews/1.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('reviews')->insert([
            'business_id' => '1',
            'user_id' => 3,
            'rating' => 4.5,
            'price_rating' => 4,
            'title' => 'Very good restaurant!',
            'content' => $faker->text(1500),
            'picture' => '/reviews/2.jpg',            
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('reviews')->insert([
            'business_id' => '1',
            'user_id' => 3,
            'rating' => 3.5,
            'price_rating' => 3,
            'title' => 'Very bad restaurant!',
            'content' => $faker->text(1500),
            'picture' => '/reviews/3.jpg',            
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
