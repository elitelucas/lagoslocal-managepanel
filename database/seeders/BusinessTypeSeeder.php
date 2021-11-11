<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('business_types')->insert([
            'name' => 'Restaurant',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('business_types')->insert([
            'name' => 'Delivery',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('business_types')->insert([
            'name' => 'Plumber',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('business_types')->insert([
            'name' => 'HomeService',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
