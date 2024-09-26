<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    Permission::upsert(
      [
        ["name" => "read:manage users", "code" => "read:manage-users"],
        ["name" => "write:manage users", "code" => "write:manage-users"],


        ["name" => "read:manage volunteers", "code" => "read:manage-volunteers"],
        ["name" => "write:manage volunteers", "code" => "write:manage-volunteers"],

        ["name" => "read:manage projects", "code" => "read:manage-projects"],
        ["name" => "write:manage projects", "code" => "write:manage-projects"],

        ["name" => "read:manage support", "code" => "read:manage-supports"],
        ["name" => "write:manage support", "code" => "write:manage-supports"],

        ["name" => "read:manage beneficiaries", "code" => "read:manage-beneficiaries"],
        ["name" => "write:manage beneficiaries ", "code" => "write:manage-beneficiaries"],

      ],
      ['code']
    );
  }
}
