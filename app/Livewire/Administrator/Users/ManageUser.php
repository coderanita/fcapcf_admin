<?php

namespace App\Livewire\Administrator\Users;

use App\Models\Role;
use App\Models\User;
use App\Rules\AlphaSpace;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Support\Str;

use App\Traits\HasModalElement;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class ManageUser extends Component
{
  use WithPagination, HasModalElement;
  #[Validate]
  public $fname, $lname, $email, $password, $role, $userId, $counter, $roleName;
  public $startDate = '2024-01-01';
  public $endDate = '2025-01-01';

  public function mount(?string $roleName = null)
  {
    $this->roleName = $roleName;
  }

  public function setUser(User $user, string $modal)
  {
    // dd($user);
    $this->userId  = $user->id;
    $this->fname = $user->fname;
    $this->lname = $user->lname;
    $this->email = $user->email;
    $this->role = $user->role->id;
    $this->openModal($modal);
  }


  public function loginAs(User $user)
  {
    if ($user->id == auth()->id()) {
      $this->dispatch(
        'alert',
        type: "warning",
        msg: "You Already Logged in"
      );
      return;
    }

    Auth::logout();
    // Auth::loginUsingId($user->id);
    Auth::login($user);
    $this->dispatch(
      'alert',
      type: "success",
      msg: "Logged in as : {$user->name}"
    );
    return $user->role ? to_route($user->role->name . '.dashboard') : abort(404);
  }






  public function update(User $user)
  {
    $this->authorize('update', $user);
    $this->validate();

    $user->update([
      'fname' => $this->fname,
      'lname' => $this->lname,
      'email' => $this->email,
      'role_id' => $this->role
    ]);

    if (!empty($this->password)) {
      $user->password = $this->password;
      $user->save();
    }


    $this->closeModal(modalName: 'updateUser');
    $this->dispatch(
      'alert',
      type: "success",
      msg: "{$user->fullName()} updated successfully"
    );
  }


  public function randomPassword()
  {
    $this->password = Str::password(16, true, true, false, false);
  }
  public function rules(): array
  {
    return [
      'fname' => ['required', 'string', 'max:100', new AlphaSpace],
      'lname' => ['required', 'string', 'max:100', new AlphaSpace],
      'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $this->userId],
      'password' => ['nullable', 'string',  'min:8'],
      'role' => ['required', 'exists:roles,id']
    ];
  }


  public function toggleActive(User $user)
  {
    $this->authorize('update', $user);
    $user->update([
      'active' => !$user->active
    ]);
    $this->dispatch(
      'alert',
      type: "success",
      msg: "{$user->fullName()}  updated successfully"
    );
  }




  public function delete(User $user)
  {
    $this->authorize('delete', $user);
    $user->delete();

    $this->dispatch(
      'alert',
      type: "success",
      msg: "User deleted successfully"
    );
    $this->closeModal(modalName: 'deleteUser');
  }

  #[On('re-render-update-user')]
  public function updateUserTable($startDate, $endDate)
  {
    $this->startDate = $startDate;
    $this->endDate = $endDate;
  }

  public $search = '';

  public function render()
  {
    $this->authorize('viewany', User::class);

    $this->resetExceptModal(['roleName']);


    $users = User::with(['role']);

    if ($this->search) {
      $users->where(function ($query) {
        $query->where('fname', 'like', '%' . $this->search . '%')
          ->orWhere('email', 'like', '%' . $this->search . '%')
          ->orWhere('lname', 'like', '%' . $this->search . '%');
      });
    }

    if ($this->roleName) {
      $users->whereRelation('role', 'name', $this->roleName);
    }

    $users->whereBetween('created_at', [$this->startDate, $this->endDate]);


    return view('_administrator.users.manage')->with([
      'roles' => Role::all(),
      'users' => $users->whereNot('id', auth()->id())->get()
    ]);
  }
}
