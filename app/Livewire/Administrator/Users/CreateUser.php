<?php

namespace App\Livewire\Administrator\Users;

use App\Models\Role;
use App\Models\User;
use App\Rules\AlphaSpace;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Support\Str;

use App\Traits\HasModalElement;

class CreateUser extends Component
{
  use HasModalElement;
  #[Validate]


  public $fname, $lname, $email, $password, $role;

  public function create()
  {
    $this->openModal();
  }
  public function save()
  {
    $this->authorize('create', User::class);
    $this->validate();

    // DB::transaction(function () {
    $user = User::create([
      'fname' => $this->fname,
      'lname' => $this->lname,
      'email' => $this->email,
      'password' => $this->password,
      'role_id' => $this->role
    ]);
    // });



    $this->dispatch(
      'alert',
      type: "success",
      msg: "{$user->fullName()}  saved successfully"
    );

    return $this->redirect(route('administrator.users'));
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
      'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
      'password' => ['required', 'string',  'min:8'],
      'role' => ['required', 'exists:roles,id']
    ];
  }

  public function render()
  {
    return view('_administrator.users.create')->with(['roles' => Role::all()]);
  }
}
