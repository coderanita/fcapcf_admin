<?php

namespace Database\Seeders;

use App\Models\Relationship;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RelationshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Relationship::create([
            'name' => "Father",
        ]);

        Relationship::create([
            'name' => "Mother",
        ]);

        Relationship::create([
            'name' => "Brother",
        ]);

        Relationship::create([
            'name' => "Sister",
        ]);

        Relationship::create([
            'name' => "Son",
        ]);

        Relationship::create([
            'name' => "Daughter",
        ]);
    }
}
