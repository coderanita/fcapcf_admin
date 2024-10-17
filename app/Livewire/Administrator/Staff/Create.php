<?php

namespace App\Livewire\Administrator\Staff;

use Livewire\Component;

class Create extends Component
{
    public $first_name, $last_name, $gender, $phone_number, $email, $marital_status, $countryCode;
    public $nationality_id, $id_type;

    public function render()
    {
        return view('_administrator.staff.create');
    }
}
