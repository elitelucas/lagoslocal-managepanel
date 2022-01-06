<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Feature;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feature::create([
            'name' => 'Delivery',
        ]);
        Feature::create([
            'name' => 'Takeout',
        ]);
        Feature::create([
            'name' => 'Pick up',
        ]);
    }
}
