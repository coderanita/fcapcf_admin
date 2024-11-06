<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Country::create([
            'region_id' => '1',
            'name' => "Nigeria",
            'code' => "+234",
        ]);

        Country::create([
            'region_id' => '2',
            'name' => "Brazil",
            'code' => "+55",
        ]);

        Country::create([
            'region_id' => '1',
            'name' => "Ghana",
            'code' => "+233",
        ]);
    }
}
