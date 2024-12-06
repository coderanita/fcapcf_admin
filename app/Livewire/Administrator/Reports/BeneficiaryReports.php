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

    public $sortField = 'created_at'; // Default sort field
    public $sortDirection = 'asc'; // Default sort direction

    // Function to handle the sorting
    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }
    }

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
        $beneficiaries = Beneficiary::orderBy($this->sortField, $this->sortDirection)
            ->paginate(10);

        $totalBeneficiaries = Beneficiary::count();

        $totalBeneficiaryMale = Beneficiary::where('gender', 'male')->count();
        $totalBeneficiaryFemale = Beneficiary::where('gender', 'female')->count();
        $totalBeneficiaryCountry = Beneficiary::select('country_id')
            ->groupBy('country_id')
            ->get()
            ->count();


        return view(
            '_administrator.reports.beneficiary-reports',
            [
                'beneficiaries' => $beneficiaries,
                'totalBeneficiaries' => $totalBeneficiaries,
                'totalBeneficiaryMale' => $totalBeneficiaryMale,
                'totalBeneficiaryFemale' => $totalBeneficiaryFemale,
                'totalBeneficiaryCountry' => $totalBeneficiaryCountry,
            ]
        );
    }
}
