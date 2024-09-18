<?php

use App\Livewire\Manager\Dashboard;
use Illuminate\Support\Facades\Route;

Route::middleware([
  'auth',
  'verified',
  'role:manager'
])->prefix('manager')->name('manager.')->group(function () {
  Route::redirect('/', '/manager/dashboard');


// Route::get('/profile', ShowProfile::class)->name('profile');
// Route::put('/profile/{profile}/', [ShowProfile::class, 'updateExperience'])->name('profile.experience')->can('update', 'profile');

Route::view('/account', 'account.show')->name('account.show');

Route::get('/dashboard', Dashboard::class)->name('dashboard');
});