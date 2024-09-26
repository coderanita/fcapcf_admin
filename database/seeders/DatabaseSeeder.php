<?php

namespace Database\Seeders;

use App\Models\Permission;
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
    $this->call([
      RoleSeeder::class,
      PermissionSeeder::class
    ]);

    // User::factory(10)->create();

    $admin_role = Role::where('access_level', 'administrator')->first();
    $permissions =  Permission::pluck('id')->toArray();
    $admin_role->permissions()->sync($permissions);



    User::create([
      "role_id" => $admin_role->id,
      'fname' => "Demo",
      'lname' => "Admin",
      'email' =>  'admin@app.com',
      'password' => 'password'
    ]);



    // $users = ["administrator", "manager", "staff", "volunteer"];

    // foreach (getAccessLevels() as $access_level) {
    //   $created =  User::create([
    //     "role_id"=>Role::where('access_level', $access_level)->first()->id,
    //     'fname' => $access_level,
    //     'lname' => fake()->name(),
    //     'email' => $access_level . '@app.com',
    //     'password' => 'password'

    //   ]);
    //   
    // }


  }
}
