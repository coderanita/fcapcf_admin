<?php

namespace App\Livewire\Account;

use Laravel\Jetstream\Http\Livewire\UpdateProfileInformationForm as Component;

class UpdateProfileInformationForm extends Component
{
    public function render()
    {
        return view('account.update-profile-information-form');
    }
}
