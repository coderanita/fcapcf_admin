<?php

namespace App\Livewire\Administrator\Roles;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Traits\HasModalElement;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class ManageRole extends Component
{
  use WithPagination, HasModalElement;
  #[Validate]
  public $name, $access_level, $desc, $password, $roleId, $permission = [];

  // public $roles;

  public function setRole(Role $role, string $modal)
  {
    // dd($user);
    $this->roleId  = $role->id;
    $this->name = $role->name;
    $this->access_level = $role->access_level;
    $this->desc = $role->desc;
    // $permission=>true array
    $this->permission = array_combine($role->permissions->pluck('code')->toArray(), array_map(function () {
      return true;
    }, $role->permissions->pluck('code')->toArray()));

    $this->openModal($modal);
  }







  public function update(Role $role)
  {

    $this->authorize('update', Role::class);

    //get only array of selected permission
    $this->permission = array_keys(array_filter($this->permission));
    $this->validate();

    try {

      $permissions_ids = Permission::select('id')->whereIn('code', $this->permission)->get()->pluck('id');
      $role->update([
        'name' => strtolower($this->name),
        'access_level' => $this->access_level,
        'desc' => $this->desc
      ]);

      $role->permissions()->sync($permissions_ids);

      $this->dispatch(
        'alert',
        type: "success",
        msg: "{$this->name}  updated successfully"
      );
      $this->closeModal(modalName: 'updateRole');

      // return $this->redirect(route('administrator.roles'));
    } catch (\Throwable $th) {

      $this->dispatch(
        'alert',
        type: "error",
        msg: "Sorry, Unkown error while updating role and permission"
      );
    }
  }



  public function rules(): array
  {

    return [
      'name' => ['required', 'string',  'max:255', 'unique:roles,name,' . $this->roleId],
      'access_level' => ['required', 'string', 'in:' . implode(',', getAccessLevels())],
      'desc' => ['required', 'string'],
      'permission' => ['required', 'array'],
      'permission.*' => ['exists:permissions,code']

    ];
  }





  public function delete(Role $role)
  {
    $this->authorize('delete', $role);
    if ($role->users()->count()) {
      $this->dispatch(
        'alert',
        type: "danger",
        msg: "Sorry we can't delete this {$role->name} because there are some users linked to it."
      );
    } else {
      $role->delete();
      $this->dispatch(
        'alert',
        type: "success",
        msg: "Role deleted successfully"
      );
    }
    $this->closeModal(modalName: 'deleteRole');
  }


  public function render()
  {
    $this->authorize('viewany', Role::class);


    return view('_administrator.roles.manage')->with([
      "roles" => Role::withCount('users')->with(['permissions:name'])->paginate(),
      'permissions' => Permission::all()
    ]);
  }
}
