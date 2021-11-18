<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('businesses')->insert([
            'name' => 'Roberto Restaurant',
            'description' => 'The best Italian restaurant in Lagos',
            'business_type_id' => 1,
            'call' => '+1 234 567 890',
            'website' => 'https://best.restaurant',
            'owner_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
