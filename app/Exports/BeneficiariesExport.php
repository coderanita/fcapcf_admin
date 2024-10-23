<?php

namespace App\Exports;

use App\Models\Beneficiary;
use App\Models\Language;
use App\Models\ReportTotalRenderedPerTicketAndStatus;
use App\Models\Timesheet;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

class BeneficiariesExport implements FromCollection, WithHeadings, WithColumnWidths, WithStyles, WithTitle
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $beneficiaries = Beneficiary::get();

        $exportData = $beneficiaries->map(function ($beneficiary) {

            return [
                'name' =>  $beneficiary->first_name . ' ' .  $beneficiary->last_name,
                'gender' => $beneficiary->gender === 'female' ? 'F' : 'M',
                'marital_status' => $beneficiary->marital_status,
                'age' => $beneficiary->age,
                'contact' => $beneficiary->age,
                'disability' => $beneficiary->disability_status === 'no' ? 'N/A' : $beneficiary->type_of_disability,
                'education' => $beneficiary->socialEconomic->education_level,
                'primary_language' => $this->getLanguageName($beneficiary->language_id),
                'occupation' => $beneficiary->socialEconomic->occupation,
                'income' => $beneficiary->socialEconomic->income,
                'household' => $beneficiary->socialEconomic->household_size,
                'registered' => dateToWord($beneficiary->created_at),
                'emergency' => $beneficiary->emergencyContact->full_name . ' / ' . $beneficiary->emergencyContact->telephone,
            ];
        });

        return $exportData;
    }

    public function headings(): array
    {
        return [
            'NAME',
            'GENDER',
            'MARITAL STATUS',
            'AGE',
            'CONTACT',
            'DISABILITY',
            'EDUCATION',
            'PRIMARY LANGUAGE',
            'OCCUPATION',
            'INCOME',
            'HOUSEHOLD',
            'REGISTERED',
            'EMERGENCY',
        ];
    }


    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A1:M1')->getFont()->setBold(true);
        $sheet->getStyle('A1:M' . $sheet->getHighestRow())->getAlignment()->setHorizontal(Alignment::HORIZONTAL_LEFT);
    }

    public function columnWidths(): array
    {
        return [
            'A' => 45,
            'B' => 15,
            'C' => 20,
            'D' => 15,
            'E' => 15,
            'F' => 25,
            'G' => 25,
            'H' => 25,
            'I' => 25,
            'J' => 25,
            'K' => 25,
            'L' => 25,
            'M' => 25,
        ];
    }

    public function title(): string
    {
        return 'BENEFICIARY REPORT';
    }

    public function getLeadName($teamMembers)
    {
        $lead = collect($teamMembers)->firstWhere('is_lead', true);

        if ($lead) {
            $user = User::find($lead['id']);
            return $user ? $user->fname . ' ' . $user->lname : null;
        }

        return null;
    }

    public function getLanguageName($languageId)
    {
        return Language::firstWhere('id', $languageId)->name ?? 'Unknown';
    }
}
