<?php

namespace App\Livewire\Administrator\Countries;

use App\Models\Country;
use App\Models\Region;
use Livewire\Component;

class Create extends Component
{

    public $name, $code, $phonecode, $selectedRegion = "";

    protected $rules = [
        'name' => 'required',
        'code' => 'required',
        'phonecode' => 'required',
    ];

    public function create()
    {
        $this->dispatch('modalOpenedCountry');
    }

    public function save()
    {
        // Validate form fields
        $this->validate();

        $country = Country::create([
            'name' => $this->name,
            'code' => $this->code,
            'phonecode' => $this->phonecode,
        ]);

        $this->dispatch('modalClosedCountry');
        $this->dispatch('re-render-country');
        $this->reset();
        $this->dispatch(
            'alert',
            type: "success",
            msg: "{$this->name}  saved successfully"
        );
    }

    public function render()
    {
        $regions = Region::get();
        return view('_administrator.countries.create', ['regions' => $regions]);
    }
}
