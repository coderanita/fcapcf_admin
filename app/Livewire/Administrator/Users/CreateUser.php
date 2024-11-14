<?php

namespace App\Livewire\Administrator\Users;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use App\Rules\AlphaSpace;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Support\Str;

use App\Traits\HasModalElement;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class CreateUser extends Component
{
  use HasModalElement;

  #[Validate]
  public $fname, $lname, $email, $password, $role;

  // public $permission = [];

  public function create()
  {
    $this->openModal();
  }
  public function save()
  {
    // dd($this->all());
    // dd(array_keys($this->permission),$this->role);
    // dd( $permissions_ids,array_keys($this->permission));
    $this->authorize('create', User::class);
    $this->validate();
    // DB::transaction(function () {

    // $permissions_ids = Permission::select('id')->whereIn('code', array_keys($this->permission))->get()->pluck('id');

    $user = User::create([
      'fname' => $this->fname,
      'lname' => $this->lname,
      'email' => $this->email,
      'password' => $this->password,
      'role_id' => $this->role
    ]);

    // $status =   $user->role->permissions()->attach($permissions_ids);

    // dd( $user->role);
    // if ($status) {
    $this->dispatch(
      'alert',
      type: "success",
      msg: "{$user->fullName()}  saved successfully"
    );
    // $this->closeModal();
    // } else {
    //   $this->dispatch(
    //     'alert',
    //     type: "error",
    //     msg: "{$user->fullName()}  erorr"
    //   );
    // }

    // });



    // $user->role->permissions()->attach() ;


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
      'role' => ['required', 'exists:roles,id'],
      // 'permission' => ['required', 'array'],
      // 'permission.*' => ['exists:permissions,code']

    ];
  }

  public function render()
  {
    return view('_administrator.users.create')->with([
      'roles' => Role::all(),
      // 'permissions' => Permission::all()
    ]);
  }
}
