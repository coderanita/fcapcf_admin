<?php

use App\Http\Controllers\Administrator\StaffController;
use App\Livewire\Administrator\Announcements\Edit as AnnouncementEdit;
use App\Livewire\Administrator\Announcements\Create as AnnouncementsCreate;
use App\Livewire\Administrator\Announcements\View;
use App\Livewire\Administrator\AuditLogs\Index;
use App\Livewire\Administrator\Beneficiaries\Create;
use App\Livewire\Administrator\Beneficiaries\Edit;
use App\Livewire\Administrator\Countries\Manage as CountriesManage;
use App\Livewire\Administrator\Dashboard;
use App\Livewire\Administrator\ProjectCategory\Manage as ProjectCategoryManage;
use App\Livewire\Administrator\ProjectDocument\Manage as ProjectDocumentManage;
use App\Livewire\Administrator\Projects\Manage;
use App\Livewire\Administrator\Projects\View as ProjectsView;
use App\Livewire\Administrator\Regions\Manage as RegionManage;
use App\Livewire\Administrator\Reports\BeneficiaryReports;
use App\Livewire\Administrator\Reports\ProjectReports;
use App\Livewire\Administrator\Reports\UserReports;
use App\Livewire\Administrator\Roles\ShowRole;
use App\Livewire\Administrator\Staff\Create as StaffCreate;
use App\Livewire\Administrator\Staff\Edit as StaffEdit;
use App\Livewire\Administrator\States\Manage as StatesManage;
use App\Livewire\Administrator\Supports\Create as SupportsCreate;
use App\Livewire\Administrator\Supports\View as SupportView;
use Illuminate\Support\Facades\Route;
use App\Livewire\Administrator\Users\ShowUsers;
use App\Livewire\Administrator\Users\CreateUser;
use App\Livewire\Administrator\Users\ManageProfile;
use App\Livewire\Administrator\Users\ShowUser;
use App\Models\Permission;
use App\Models\Support;
use App\Models\User;

Route::middleware([
  'auth',
  'verified',
  'role:administrator'
])->prefix('administrator')->name('administrator.')->group(function () {
  Route::redirect('/', '/administrator/dashboard');
  Route::get('/dashboard', Dashboard::class)->name('dashboard');

  Route::view('/account', 'account.show')->name('account.show');
  Route::view('/users', '_administrator.users.index')->name('users');
  Route::get('/users/{user}/show', ShowUser::class)->name('users.show');
  // Route::get('/users/{user}/profile', ManageProfile::class)->name('users.profile');

  Route::get('/users/{user}/profile', StaffEdit::class)->name('users.profile');

  // Route::view('/users/profile', '_administrator.users.profile.index')->name('users.profile');

  Route::view('/roles', '_administrator.roles.index')->name('roles');
  Route::view('/roles/{roleName}/show', '_administrator.users.index')->name('roles.show');

  Route::view('/beneficiaries', '_administrator.beneficiaries.index')->name('beneficiaries');
  Route::get('/beneficiaries/create', Create::class)->name('beneficiaries.create');
  Route::get('/beneficiaries/edit/{beneficiaryId}', Edit::class)->name('beneficiaries.edit');

  Route::view('/announcements', '_administrator.announcements.index')->name('announcements');
  Route::get('/announcements/details/{announcement}', View::class)->name('announcements.details');

  Route::get('/audit-logs', Index::class)->name('audit.logs');

  Route::get('/projects', Manage::class)->name('projects');
  Route::get('/projects/details/{project}', ProjectsView::class)->name('project.details');

  Route::get('/project-caterogories', ProjectCategoryManage::class)->name('project.categories');

  Route::get('/regions', RegionManage::class)->name('regions');
  Route::get('/countries', CountriesManage::class)->name('countries');
  Route::get('/states', StatesManage::class)->name('states');

  Route::get('/staffs/create', StaffCreate::class)->name('staffs.create');
  Route::get('/staffs/edit/{user}', StaffEdit::class)->name('staffs.edit');

  Route::get('/supports', function () {
    $count = Support::where('status', 1)->get();
    $countDraft = Support::where('status', 2)->get();
    return view('_administrator.supports.index', compact('count', 'countDraft'));
  })->name('supports');

  Route::get('/supports/details/{support}', SupportView::class)->name('supports.details');
  Route::get('/supports/create', SupportsCreate::class)->name('support.create');

  Route::get('/file-managers', ProjectDocumentManage::class)->name('file-managers');

  Route::get('/project-reports', ProjectReports::class)->name('report.projects');
  Route::get('/user-reports', UserReports::class)->name('report.users');
  Route::get('/beneficiary-reports', BeneficiaryReports::class)->name('report.beneficiaries');
});
