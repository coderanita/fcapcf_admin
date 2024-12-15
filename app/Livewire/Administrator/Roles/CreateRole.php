<?php

namespace App\Livewire\Administrator\Roles;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use App\Rules\AlphaSpace;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Support\Str;

use App\Traits\HasModalElement;
use Illuminate\Support\Facades\DB;

class CreateRole extends Component
{
  use HasModalElement;

  #[Validate]
  public $name, $access_level, $desc, $password, $role, $permission = [];


  public function create()
  {
    $this->openModal();
  }

  public function updatedAccessLevel($value)
  {
    $role = Role::where('access_level', $value)->first();

    if ($role) {
      $existingPermissions = DB::table('permission_role')
        ->where('role_id', $role->id)
        ->pluck('permission_id')
        ->toArray();

      // Update the permission array with existing permissions
      $this->permission = array_fill_keys(
        Permission::whereIn('id', $existingPermissions)->pluck('code')->toArray(),
        true
      );
    } else {
      $this->permission = [];
    }
  }


  public function save()
  {
    $this->authorize('create', Role::class);

    //get only array of selected permission
    $this->permission = array_keys(array_filter($this->permission));
    $this->validate();

    try {

      $permissions_ids = Permission::select('id')->whereIn('code', $this->permission)->get()->pluck('id');
      $role = Role::create([
        'name' => strtolower($this->name),
        'access_level' => $this->access_level,
        'desc' => $this->desc
      ]);

      $role->permissions()->sync($permissions_ids);

      $this->dispatch(
        'alert',
        type: "success",
        msg: "{$this->name}  saved successfully"
      );
      $this->closeModal();

      return redirect()->to(route('administrator.roles'));
    } catch (\Throwable $th) {

      $this->dispatch(
        'alert',
        type: "error",
        msg: "Sorry, Unkown error while creating role and permission"
      );
    }
  }




  public function rules(): array
  {

    return [
      'name' => ['required', 'string',  'max:255', 'unique:roles,name'],
      'access_level' => ['required', 'string', 'in:' . implode(',', getAccessLevels())],
      'desc' => ['required', 'string'],

    ];
  }

  public function render()
  {
    return view('_administrator.roles.create')->with([
      'permissions' => Permission::all()
    ]);
  }
}
