<?php

namespace Database\Seeders;

use App\Models\SearchResult;
use Illuminate\Database\Seeder;

class SearchResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SearchResult::create([
            'business_type_id' => 1,
        ]);
        SearchResult::create([
            'business_type_id' => 2,
        ]);
        SearchResult::create([
            'business_type_id' => 3,
        ]);
        SearchResult::create([
            'business_type_id' => 4,
        ]);
        SearchResult::create([
            'business_type_id' => 5,
        ]);  
        SearchResult::create([
            'business_type_id' => 3,
        ]);
        SearchResult::create([
            'business_type_id' => 4,
        ]);
        SearchResult::create([
            'business_type_id' => 5,
        ]);       
    }
}
