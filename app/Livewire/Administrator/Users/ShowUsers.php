<?php

namespace App\Livewire\Administrator\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ShowUsers extends Component
{
 use WithPagination;
  public function render()
  {
    return view('_administrator.users.index')->with(['users'=>User::with(['role'])->paginate(2)]);
  }
}
