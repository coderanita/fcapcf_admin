<?php

namespace App\Livewire\Administrator\Cities;

use App\Models\City;
use App\Models\State;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $city;
    public $name, $selectedState = "";

    protected $rules = [
        'name' => 'required',
        'selectedState' => 'required',
    ];

    public function edit(City $city)
    {
        $this->city = $city;
        $this->name = $city->name;
        $this->selectedState = $city->state_id;

        $this->dispatch('modalOpenedEdit');
    }

    public function update()
    {
        $this->validate();

        $this->city->update([
            'name' => $this->name,
            'state_id' => $this->selectedState
        ]);

        $this->dispatch('modalClosed');

        $this->dispatch(
            'alert',
            type: "success",
            msg: "{$this->name}  updated successfully"
        );
    }

    public function delete(City $city)
    {
        $this->city = $city;
        $this->name = $city->name;
        $this->dispatch('modalOpenedDelete');
    }

    public function confirmDelete()
    {
        $this->city->delete();

        $this->dispatch('modalClosedDelete');

        $this->dispatch(
            'alert',
            msg: "{$this->name} deleted successfully!",
            type: 'success'
        );
    }


    #[On('re-render-cities')]
    public function render()
    {
        $states = State::get();
        $cities = City::get();
        return view('_administrator.cities.index', ['cities' => $cities, 'states' => $states]);
    }
}
