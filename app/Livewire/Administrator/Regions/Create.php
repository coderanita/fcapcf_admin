<?php

namespace App\Livewire\Administrator\Regions;

use App\Models\Country;
use App\Models\Region;
use App\Models\State;
use Livewire\Component;

class Create extends Component
{
    public $name, $description, $selectedStates = [];

    protected $rules = [
        'name' => 'required',
        'description' => 'required',
    ];

    public function updatedSelectedStates()
    {
        // This is optional but useful to make sure Livewire reacts properly
        $this->selectedStates = array_filter($this->selectedStates);
    }

    public function create()
    {
        $this->dispatch('modalOpenedRegion');
    }

    public function save()
    {
        // Validate form fields
        $this->validate();

        $region = Region::create([
            'name' => $this->name,
            'description' => $this->description
        ]);

        // foreach ($this->selectedStates as $state) {
        //     Country::where('id', $state)->update(['region_id' => $region->id]);
        // }

        $this->dispatch('modalClosedRegion');
        $this->dispatch('re-render-region');
        $this->reset();
        $this->dispatch(
            'alert',
            type: "success",
            msg: "{$this->name}  saved successfully"
        );
    }

    public function render()
    {
        $states = Country::get();
        return view('_administrator.regions.create', ['states' => $states]);
    }
}
