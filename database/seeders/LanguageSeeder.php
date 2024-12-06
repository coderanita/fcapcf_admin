<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Language::create(['name' => "English"]);
        Language::create(['name' => "French"]);
        Language::create(['name' => "German"]);
        Language::create(['name' => "Spanish"]);
        Language::create(['name' => "Chinese"]);
        Language::create(['name' => "Japanese"]);
        Language::create(['name' => "Russian"]);
        Language::create(['name' => "Portuguese"]);
        Language::create(['name' => "Arabic"]);
        Language::create(['name' => "Hindi"]);
        Language::create(['name' => "Italian"]);
        Language::create(['name' => "Korean"]);
        Language::create(['name' => "Dutch"]);
        Language::create(['name' => "Swedish"]);
        Language::create(['name' => "Norwegian"]);
        Language::create(['name' => "Danish"]);
        Language::create(['name' => "Greek"]);
        Language::create(['name' => "Turkish"]);
        Language::create(['name' => "Thai"]);
        Language::create(['name' => "Vietnamese"]);
        Language::create(['name' => "Polish"]);
        Language::create(['name' => "Czech"]);
        Language::create(['name' => "Hungarian"]);
        Language::create(['name' => "Finnish"]);
        Language::create(['name' => "Ukrainian"]);
        Language::create(['name' => "Hebrew"]);
        Language::create(['name' => "Swahili"]);
    }
}
