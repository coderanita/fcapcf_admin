<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      Role::upsert(
        [
          ["name" => "administrator"],
          ["name" => "manager"],
          ["name" => "staff"],
          ["name" => "volunteer"],
        ],
        ['name']
      );
    }
}





