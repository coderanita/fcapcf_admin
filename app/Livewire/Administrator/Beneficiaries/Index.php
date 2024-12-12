<?php

namespace App\Livewire\Administrator\Beneficiaries;

use Livewire\Component;

class Index extends Component
{

    public $startDate;
    public $endDate;

    protected $listeners = ['updateDateRange'];

    public function updateDateRange($start, $end)
    {
        $this->startDate = $start;
        $this->endDate = $end;

        $this->dispatch(
            're-render-update-beneficiaries',
            startDate: $this->startDate,
            endDate: $this->endDate
        );
    }

    public function mount()
    {
        $this->startDate = now()->format('Y-m-d');
        $this->endDate = now()->format('Y-m-d');

        info($this->startDate);
    }

    public function render()
    {
        return view('_administrator.beneficiaries.index');
    }
}
