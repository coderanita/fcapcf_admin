<?php

namespace App\Livewire\Administrator\Countries;

use App\Models\Country;
use App\Models\Region;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Manage extends Component
{

    use WithPagination;
    
    public $country;
    public $name, $code, $selectedRegion = "";

    protected $rules = [
        'name' => 'required',
        'code' => 'required',
        'selectedRegion' => 'required',
    ];

    public function edit(Country $country)
    {
        $this->country = $country;
        $this->name = $country->name;
        $this->code = $country->code;
        $this->selectedRegion = $country->region_id;

        $this->dispatch('modalOpenedEdit');
    }

    public function update()
    {
        $this->validate();

        $this->country->update([
            'name' => $this->name,
            'code' => $this->code,
            'region_id' => $this->selectedRegion
        ]);

        $this->dispatch('modalClosed');

        $this->dispatch(
            'alert',
            type: "success",
            msg: "{$this->name}  updated successfully"
        );
    }

    public function delete(Country $country)
    {
        $this->country = $country;
        $this->name = $country->name;
        $this->dispatch('modalOpenedDelete');
    }

    public function confirmDelete()
    {
        $this->country->delete();

        $this->dispatch('modalClosedDelete');

        $this->dispatch(
            'alert',
            msg: "{$this->name} deleted successfully!",
            type: 'success'
        );
    }

    #[On('re-render-country')]
    public function render()
    {
        $countries = Country::paginate(10);
        $regions = Region::get();
        return view('_administrator.countries.manage', ['countries' => $countries, 'regions' => $regions]);
    }
}
