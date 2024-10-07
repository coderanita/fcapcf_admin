<?php

namespace App\Livewire\Administrator\Regions;

use App\Models\Region;
use App\Models\State;
use Livewire\Attributes\On;
use Livewire\Component;

class Manage extends Component
{
    public $region, $name, $description, $selectedStates = [];

    protected $rules = [
        'name' => 'required',
        'description' => 'required',
    ];

    public function updatedSelectedStates()
    {
        // This is optional but useful to make sure Livewire reacts properly
        $this->selectedStates = array_filter($this->selectedStates);
    }

    public function edit(Region $region)
    {
        $this->region = $region;
        $this->name = $region->name;
        $this->description = $region->description;

        $this->dispatch('modalOpenedEdit');
    }

    public function update()
    {
        $this->validate();

        $this->region->update(['name' => $this->name, 'description' => $this->description]);

        foreach ($this->selectedStates as $state) {
            State::where('id', $state)->update(['region_id' => $this->region->id]);
        }

        $this->dispatch('modalClosed');

        $this->dispatch(
            'alert',
            type: "success",
            msg: "{$this->name}  updated successfully"
        );
    }

    public function delete(Region $region)
    {
        $this->region = $region;
        $this->name = $region->name;
        $this->dispatch('modalOpenedDelete');
    }

    public function confirmDelete()
    {
        $this->region->delete();

        $this->dispatch('modalClosedDelete');

        $this->dispatch(
            'alert',
            msg: "{$this->name} deleted successfully!",
            type: 'success'
        );
    }

    #[On('re-render-region')]
    public function render()
    {
        $regions = Region::with('states')->get();
        $states = State::get();

        return view('_administrator.regions.manage', ['regions' => $regions, 'states' => $states]);
    }
}
