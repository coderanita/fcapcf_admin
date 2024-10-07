<?php

namespace App\Livewire\Administrator\Regions;

use App\Models\Region;
use Livewire\Component;

class Create extends Component
{
    public $name, $description;

    protected $rules = [
        'name' => 'required',
        'description' => 'required',
    ];

    public function create()
    {
        $this->dispatch('modalOpenedRegion');
    }

    public function save()
    {
        // Validate form fields
        $this->validate();

        Region::create([
            'name' => $this->name,
            'description' => $this->description
        ]);


        $this->dispatch('modalClosedRegion');
        $this->dispatch('re-render-region');

        $this->dispatch(
            'alert',
            type: "success",
            msg: "{$this->name}  saved successfully"
        );
    }

    public function render()
    {
        return view('_administrator.regions.create');
    }
}
