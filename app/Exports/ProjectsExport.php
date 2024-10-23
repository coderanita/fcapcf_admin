<?php

namespace App\Exports;

use App\Models\Project;
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

class ProjectsExport implements FromCollection, WithHeadings, WithColumnWidths, WithStyles, WithTitle
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $projects = Project::get();

        $exportData = $projects->map(function ($project) {

            $project->lead_name = $this->getLeadName($project->invited_teams);

            return [
                'project' => $project->project_name,
                'region' => $project->region->name,
                'amount' => formatMoney($project->project_cost),
                'supervisor' => $project->lead_name ?? 'No Lead Assigned',
                'start' => dateToWord($project->start_date),
                'end' => dateToWord($project->end_date),
                'status' => $project->projectStatus->name,
            ];
        });

        return $exportData;
    }

    public function headings(): array
    {
        return [
            'PROJECT',
            'REGION',
            'AMOUNT',
            'SUPERVISOR',
            'START',
            'END',
            'STATUS',
        ];
    }


    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A1:G1')->getFont()->setBold(true);
        $sheet->getStyle('A1:G' . $sheet->getHighestRow())->getAlignment()->setHorizontal(Alignment::HORIZONTAL_LEFT);
    }

    public function columnWidths(): array
    {
        return [
            'A' => 45,
            'B' => 20,
            'C' => 20,
            'D' => 20,
            'E' => 20,
            'F' => 20,
            'G' => 20,
        ];
    }

    public function title(): string
    {
        return 'PROJECTS REPORT';
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
}
