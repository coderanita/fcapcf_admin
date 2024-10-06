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
            'icon' => "fa fa-clock-o",
            'target' => "pending",
        ]);

        ProjectStatus::create([
            'name' => "In-Progress",
            'icon' => "fa fa-product-hunt",
            'target' => "in_progress",
        ]);

        ProjectStatus::create([
            'name' => "Suspended",
            'icon' => "fa fa-ban",
            'target' => "suspended",
        ]);

        ProjectStatus::create([
            'name' => "Completed",
            'icon' => "fa fa-check-circle",
            'target' => "completed",
        ]);
    }
}
