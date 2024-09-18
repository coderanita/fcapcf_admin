<?php

namespace App\Livewire\Account;

use Laravel\Jetstream\Http\Livewire\DeleteUserForm as Component;


class DeleteUserForm extends Component
{
  public function render()
  {
    return view('account.delete-user-form');
  }
}
