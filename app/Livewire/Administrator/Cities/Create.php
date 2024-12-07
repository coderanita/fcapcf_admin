<?php

namespace App\Livewire\Administrator\Cities;

use App\Models\City;
use App\Models\State;
use Livewire\Component;

class Create extends Component
{

    public $name, $selectedState = "";

    protected $rules = [
        'name' => 'required',
        'selectedState' => 'required',
    ];

    public function create()
    {
        $this->dispatch('modalOpenedCity');
    }

    public function save()
    {
        // Validate form fields
        $this->validate();

        $city = City::create([
            'name' => $this->name,
            'state_id' => $this->selectedState
        ]);

        $this->dispatch('modalClosedCity');
        $this->dispatch('re-render-city');
        $this->reset();
        $this->dispatch(
            'alert',
            type: "success",
            msg: "{$this->name}  saved successfully"
        );
    }

    public function render()
    {
        $states = State::get();
        return view('_administrator.cities.create', ['states' => $states]);
    }
}
