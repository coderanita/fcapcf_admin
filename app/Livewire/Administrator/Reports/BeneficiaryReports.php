<?php

namespace App\Livewire\Administrator\Reports;

use App\Models\Beneficiary;
use App\Models\Language;
use App\Models\Nationality;
use App\Models\Relationship;
use Livewire\Component;
use Livewire\WithPagination;

class BeneficiaryReports extends Component
{
    use WithPagination;

    public function getLanguageName($languageId)
    {
        return Language::firstWhere('id', $languageId)->name ?? 'Unknown';
    }

    public function render()
    {
        $beneficiaries = Beneficiary::paginate(10);

        return view(
            '_administrator.reports.beneficiary-reports',
            [
                'beneficiaries' => $beneficiaries
            ]
        );
    }
}
