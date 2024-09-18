<?php

namespace App\Livewire\Account;

use Laravel\Jetstream\Http\Livewire\UpdatePasswordForm as Component;

class UpdatePasswordForm extends Component
{
    public function render()
    {
        return view('account.update-password-form');
    }
}
