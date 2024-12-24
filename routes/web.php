<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
// Route::middleware(['auth', 'verified'])->group(function () {
//   Route::get('/user/profile', function () {
//     if (hasRole('admin')) {
//       return redirect()->route('admin.account.show');
//     }
//     if (hasRole('employee')) {
//       return redirect()->route('employee.account.show');
//     }
//     abort(404);
//   })->name('profile.show');
// });


Route::get('/', HomeController::class);

Route::middleware(['auth', 'verified'])->group(function () {
  Route::get('/user/profile', function () {
    return  auth()->user()->role ? to_route(strtolower(auth()->user()->role->name) . '.account.show') : abort(404);
  })->name('profile.show');
});


// Route::middleware([
//   'auth',
//   'verified',
//   'role:employee'
// ])->prefix('employee')->name('employee.')->group(function () {
//   Route::redirect('/', '/employee/dashboard');


// Route::get('/profile', ShowProfile::class)->name('profile');
// Route::put('/profile/{profile}/', [ShowProfile::class, 'updateExperience'])->name('profile.experience')->can('update', 'profile');

// Route::view('/account', 'account.show')->name('account.show');

// Route::get('/dashboard', Dashboard::class)->name('dashboard');


// Route::get('/training/{category_slug}/{slug}', TrainingArticle::class)->name('training.article.show');

// Route::get('/training/', TrainingCategory::class)->name('training');
// Route::get('/training/{category_slug}', [TrainingCategory::class, 'show'])->name('training.category.show');


// Route::get('/legal-and-authorisations/', Legal::class)->name('legal');

// Route::get('/payroll/', EmployeePayroll::class)->name('payroll');
// });

Route::get('/storage-link', function () {
  try {
    Artisan::call('storage:link');
    return 'The storage link has been created successfully.';
  } catch (\Exception $e) {
    return 'Error: ' . $e->getMessage();
  }
});

Route::get('/link', function () {
  $target = '/var/www/fastuser/data/www/console.fcapcf.org/storage/app/public';
  $shortcut = '/var/www/fastuser/data/www/console.fcapcf.org/public/storage';
  symlink($target, $shortcut);
});

require_once __DIR__ . "/administrator.php";
require_once __DIR__ . "/manager.php";
require_once __DIR__ . "/staff.php";
require_once __DIR__ . "/volunteer.php";
