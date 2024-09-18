<?php

use App\Livewire\Administrator\Dashboard;
use Illuminate\Support\Facades\Route;
use App\Livewire\Administrator\Users\ShowUsers;
use App\Livewire\Administrator\Users\CreateUser;
Route::middleware([
  'auth',
  'verified',
  'role:administrator'
])->prefix('administrator')->name('administrator.')->group(function () {
  Route::redirect('/', '/administrator/dashboard');
  Route::get('/dashboard', Dashboard::class)->name('dashboard');


// Route::get('/profile', ShowProfile::class)->name('profile');


Route::view('/account', 'account.show')->name('account.show');





Route::get('/users', ShowUsers::class)->name('users');
// Route::get('/users/create', CreateUser::class)->name('users.create');


});