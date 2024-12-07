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

        $this->authorize('viewany', Support::class);

        $status = request()->query('status');

        $supports = Support::when($status, function ($query, $status) {
            return $query->where('status', $status);
        })->paginate(10);

        $statusName = 'All';
        if ($status == 1) {
            $statusName = 'Sent';
        } elseif ($status == 2) {
            $statusName = 'Draft';
        }


        return view(
            '_administrator.supports.manage',
            [
                'supports' => $supports,
                'status' => $statusName
            ]
        );
    }
}
