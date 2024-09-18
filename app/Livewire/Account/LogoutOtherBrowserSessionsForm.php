<?php

namespace App\Livewire\Account;

use Laravel\Jetstream\Http\Livewire\LogoutOtherBrowserSessionsForm as Component;


class LogoutOtherBrowserSessionsForm extends Component
{
    public function render()
    {
        return view('account.logout-other-browser-sessions-form');
    }
}
