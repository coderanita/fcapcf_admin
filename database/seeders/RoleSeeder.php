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
        ["name" => "Administrator", "access_level" => "administrator", "desc" => "full access to website"],
        ["name" => "Manager", "access_level" => "manager", "desc" => "limited access to website"],
        ["name" => "Staff", "access_level" => "staff", "desc" => "limited access to website"],
        ["name" => "Volunteer", "access_level" => "volunteer", "desc" => "limited access to website"],
      ],
      ['name']
    );
  }
}
