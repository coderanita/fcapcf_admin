<?php

namespace App\Livewire\Administrator\Supports;

use App\Models\Support;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Manage extends Component
{
    use WithPagination;

    #[On('re-render-supports')]
    public function render()
    {

        $supports = Support::paginate(10);

        return view(
            '_administrator.supports.manage',
            [
                'supports' => $supports
            ]
        );
    }
}
