<?php

namespace App\Livewire\Administrator\Beneficiaries;

use App\Models\Beneficiary;
use Livewire\Component;

class Manage extends Component
{

    public function deleteBeneficiary($beneficiaryId)
    {
        $beneficiary = Beneficiary::findOrFail($beneficiaryId);
        $beneficiary->delete();

        $this->dispatch('alert', [
            'msg' => 'Beneficiary deleted successfully!',
            'type' => 'success'
        ]);
    }

    public function render()
    {
        $beneficiaries = Beneficiary::with('emergencyContact', 'assistance', 'socialEconomic')->get();

        return view('_administrator.beneficiaries.manage', [
            'beneficiaries' => $beneficiaries,
        ]);
    }
}
