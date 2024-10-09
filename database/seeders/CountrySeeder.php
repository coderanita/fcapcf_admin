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
            'name' => "Nigeria",
            'code' => "+234",
        ]);

        Country::create([
            'name' => "Brazil",
            'code' => "+55",
        ]);

        Country::create([
            'name' => "Ghana",
            'code' => "+233",
        ]);
    }
}
