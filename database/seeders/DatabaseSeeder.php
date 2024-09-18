<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    $this->call(RoleSeeder::class);
    // User::factory(10)->create();


    $users = ["administrator", "manager", "staff", "volunteer"];

    foreach ($users as $user) {
      $created =  User::create([
        "role_id"=>Role::where('name', $user)->first()->id,
        'fname' => $user,
        'lname' => "",
        'email' => $user . '@example.com',
        'password' => 'password'

      ]);
      // $created->roles()->attach(Role::where('name', $user)->first()->id);
    }
  }
}
