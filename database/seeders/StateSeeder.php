<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        State::create([
            'country_id' => 1,
            'name' => "Lagos",
        ]);

        State::create([
            'country_id' => 1,
            'name' => "Abuja",
        ]);

        State::create([
            'country_id' => 1,
            'name' => "Kano",
        ]);
    }
}
