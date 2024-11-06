<?php

namespace App\Livewire\Administrator\States;

use App\Models\Country;
use App\Models\State;
use Livewire\Component;

class Create extends Component
{

    public $name, $selectedCountry = "";

    protected $rules = [
        'name' => 'required',
        'selectedCountry' => 'required',
    ];

    public function create()
    {
        $this->dispatch('modalOpenedState');
    }

    public function save()
    {
        // Validate form fields
        $this->validate();

        $state = State::create([
            'name' => $this->name,
            'country_id' => $this->selectedCountry
        ]);

        $this->dispatch('modalClosedState');
        $this->dispatch('re-render-state');
        $this->reset();
        $this->dispatch(
            'alert',
            type: "success",
            msg: "{$this->name}  saved successfully"
        );
    }

    public function render()
    {
        $countries = Country::get();
        return view('_administrator.states.create', ['countries' => $countries]);
    }
}
