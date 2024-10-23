<?php

namespace App\Livewire\Administrator\Reports;

use App\Exports\BeneficiariesExport;
use App\Models\Beneficiary;
use App\Models\Language;
use App\Models\Nationality;
use App\Models\Relationship;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class BeneficiaryReports extends Component
{
    use WithPagination;

    public function getLanguageName($languageId)
    {
        return Language::firstWhere('id', $languageId)->name ?? 'Unknown';
    }

    public function export()
    {
        $currentDate = date('mdY');

        return Excel::download(new BeneficiariesExport, 'beneficiaries' . $currentDate . '.xlsx');
    }

    public function render()
    {
        $beneficiaries = Beneficiary::paginate(10);

        $totalBeneficiaries = Beneficiary::count();

        $totalBeneficiaryMale = Beneficiary::where('gender', 'male')->count();
        $totalBeneficiaryFemale = Beneficiary::where('gender', 'female')->count();

        return view(
            '_administrator.reports.beneficiary-reports',
            [
                'beneficiaries' => $beneficiaries,
                'totalBeneficiaries' => $totalBeneficiaries,
                'totalBeneficiaryMale' => $totalBeneficiaryMale,
                'totalBeneficiaryFemale' => $totalBeneficiaryFemale,
            ]
        );
    }
}
