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


    #[On('re-render-cities')]
    public function render()
    {
        $states = State::get();
        $cities = City::paginate(10);
        return view('_administrator.cities.index', ['cities' => $cities, 'states' => $states]);
    }
}
