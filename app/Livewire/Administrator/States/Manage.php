<?php

namespace App\Livewire\Administrator\States;

use App\Models\Country;
use App\Models\State;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Manage extends Component
{
    use WithPagination;
    
    public $state;
    public $name, $selectedCountry = "";

    protected $rules = [
        'name' => 'required',
        'selectedCountry' => 'required',
    ];

    public function edit(State $state)
    {
        $this->state = $state;
        $this->name = $state->name;
        $this->selectedCountry = $state->country_id;

        $this->dispatch('modalOpenedEdit');
    }

    public function update()
    {
        $this->validate();

        $this->state->update([
            'name' => $this->name,
            'country_id' => $this->selectedCountry
        ]);

        $this->dispatch('modalClosed');

        $this->dispatch(
            'alert',
            type: "success",
            msg: "{$this->name}  updated successfully"
        );
    }

    public function delete(State $state)
    {
        $this->state = $state;
        $this->name = $state->name;
        $this->dispatch('modalOpenedDelete');
    }

    public function confirmDelete()
    {
        $this->state->delete();

        $this->dispatch('modalClosedDelete');

        $this->dispatch(
            'alert',
            msg: "{$this->name} deleted successfully!",
            type: 'success'
        );
    }

    #[On('re-render-state')]
    public function render()
    {
        $states = State::paginate(10);
        $countries = Country::get();
        return view('_administrator.states.manage', ['countries' => $countries, 'states' => $states]);
    }
}
