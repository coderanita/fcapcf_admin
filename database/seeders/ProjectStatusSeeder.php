<?php

namespace Database\Seeders;

use App\Models\ProjectStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProjectStatus::create([
            'name' => "Pending",
        ]);

        ProjectStatus::create([
            'name' => "In-Progress",
        ]);

        ProjectStatus::create([
            'name' => "Suspended",
        ]);

        ProjectStatus::create([
            'name' => "Completed",
        ]);
    }
}
