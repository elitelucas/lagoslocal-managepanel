<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Visit;

class VisitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Visit::create([
            'user_id' => 2,
            'business_id' => 1,
            'frequency' => 1,
        ]);
        Visit::create([
            'user_id' => 2,
            'business_id' => 2,
            'frequency' => 1,
        ]);
        Visit::create([
            'user_id' => 2,
            'business_id' => 3,
            'frequency' => 1,
        ]);
        Visit::create([
            'user_id' => 2,
            'business_id' => 4,
            'frequency' => 1,
        ]);
        Visit::create([
            'user_id' => 2,
            'business_id' => 5,
            'frequency' => 1,
        ]);
        Visit::create([
            'user_id' => 2,
            'business_id' => 6,
            'frequency' => 1,
        ]);
        
    }
}
