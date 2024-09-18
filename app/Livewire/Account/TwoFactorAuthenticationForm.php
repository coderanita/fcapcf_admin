<?php

namespace App\Livewire\Account;

use Laravel\Jetstream\Http\Livewire\TwoFactorAuthenticationForm as Component;

class TwoFactorAuthenticationForm extends Component
{
    public function render()
    {
        return view('account.two-factor-authentication-form');
    }
}
