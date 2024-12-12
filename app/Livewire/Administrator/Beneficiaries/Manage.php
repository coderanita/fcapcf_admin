<?php

namespace App\Livewire\Administrator\Beneficiaries;

use App\Models\Beneficiary;
use Carbon\Carbon;
use Livewire\Attributes\On;
use Livewire\Component;

class Manage extends Component
{

    public $beneficiary;
    public $name;

    public $startDate = '2024-01-01';
    public $endDate = '2025-01-01';

    #[On('re-render-update-beneficiaries')]
    public function updateUserTable($startDate, $endDate)
    {
        $this->startDate = Carbon::parse($startDate)->startOfDay();
        $this->endDate = Carbon::parse($endDate)->endOfDay();

        info($this->startDate);
    }


    public function deleteBeneficiary($beneficiaryId)
    {
        $this->beneficiary = Beneficiary::findOrFail($beneficiaryId);
        $this->name = $this->beneficiary->first_name;
        $this->dispatch('modalOpenedDelete');
    }

    public function confirmDelete()
    {
        $this->authorize('delete', $this->beneficiary);
        $this->beneficiary->delete();

        $this->dispatch('modalClosedDelete');

        $this->dispatch(
            'alert',
            msg: 'Beneficiary deleted successfully!',
            type: 'success'
        );
    }

    public function render()
    {
        $this->authorize('viewany', Beneficiary::class);

        $beneficiaries = Beneficiary::with('emergencyContact', 'assistance', 'socialEconomic')
            ->whereBetween('created_at', [$this->startDate, $this->endDate])->get();

        return view('_administrator.beneficiaries.manage', [
            'beneficiaries' => $beneficiaries,
        ]);
    }
}
