<?php

namespace Database\Seeders;

use App\Models\Cuisine;
use Illuminate\Database\Seeder;

class CuisineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cuisine::create([
            'name' => 'American',
        ]);
        Cuisine::create([
            'name' => 'Chinese',
        ]);
        Cuisine::create([
            'name' => 'European',
        ]);
        Cuisine::create([
            'name' => 'Japanese',
        ]);
        Cuisine::create([
            'name' => 'Nigerian',
        ]);
    }
}
