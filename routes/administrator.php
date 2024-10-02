<?php

use App\Http\Controllers\Administrator\StaffController;
use App\Livewire\Administrator\Beneficiaries\Create;
use App\Livewire\Administrator\Dashboard;
use App\Livewire\Administrator\Roles\ShowRole;
use Illuminate\Support\Facades\Route;
use App\Livewire\Administrator\Users\ShowUsers;
use App\Livewire\Administrator\Users\CreateUser;
use App\Models\Permission;
use App\Models\User;

Route::middleware([
  'auth',
  'verified',
  'role:administrator'
])->prefix('administrator')->name('administrator.')->group(function () {
  Route::redirect('/', '/administrator/dashboard');
  Route::get('/dashboard', Dashboard::class)->name('dashboard');


  // Route::get('/profile', ShowProfile::class)->name('profile');


  Route::view('/account', 'account.show')->name('account.show');

  Route::get('/test', function () {
    dd(auth()->user()->hasPermissions('read:manage-volunteers'));
  //   $permissions_ids = Permission::select('id')->whereIn('code', ["manage-volunteers", "manage-projects"])->get()->pluck('id');

  //   $user = User::create([
  //     'fname' => fake()->firstName(),
  //     'lname' => fake()->lastName(),
  //     'email' => fake()->unique()->safeEmail(),
  //     'password' => "password",
  //     'role_id' => 1
  //   ]);

  //   $status =   $user->role->permissions()->attach($permissions_ids);
  $permissions_ids = Permission::pluck('id')->toArray();
    dd($permissions_ids);
  });


  Route::view('/users', '_administrator.users.index')->name('users');
  Route::view('/roles', '_administrator.roles.index')->name('roles');
  Route::view('/roles/{roleName}/show','_administrator.users.index')->name('roles.show');

  Route::view('/beneficiaries', '_administrator.beneficiaries.index')->name('beneficiaries');
  Route::get('/beneficiaries/create', Create::class)->name('beneficiaries.create');



});
