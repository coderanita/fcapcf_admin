<?php

namespace App\Livewire\Administrator\Beneficiaries;

use App\Models\Beneficiary;
use Livewire\Component;

class Manage extends Component
{

    public $beneficiary;
    public $name;

    public function deleteBeneficiary($beneficiaryId)
    {
        $this->beneficiary = Beneficiary::findOrFail($beneficiaryId);
        $this->name = $this->beneficiary->first_name;
        $this->dispatch('modalOpenedDelete');
    }

    public function confirmDelete()
    {
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
        $beneficiaries = Beneficiary::with('emergencyContact', 'assistance', 'socialEconomic')->get();

        return view('_administrator.beneficiaries.manage', [
            'beneficiaries' => $beneficiaries,
        ]);
    }
}
