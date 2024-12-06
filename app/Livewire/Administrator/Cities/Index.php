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
        $cities = City::skip(30000)->take(5000)->get();
        return view('_administrator.cities.index', ['cities' => $cities, 'states' => $states]);
    }
}
