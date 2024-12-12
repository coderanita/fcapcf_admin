<?php

namespace App\Exports;

use App\Models\AuditLog;
use App\Models\User;
use App\Models\ReportTotalRenderedPerTicketAndStatus;
use App\Models\Timesheet;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

class AuditLogExport implements FromCollection, WithHeadings, WithColumnWidths, WithStyles, WithTitle
{
    public function collection()
    {
        $logs = AuditLog::get();

        $exportData = $logs->map(function ($log) {

            return [
                'module' => $log->module,
                'description' => $log->description,
            ];
        });

        return $exportData;
    }

    public function headings(): array
    {
        return [
            'NAME',
            'DESCRIPTION',
        ];
    }


    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A1:D1')->getFont()->setBold(true);
        $sheet->getStyle('A1:D' . $sheet->getHighestRow())->getAlignment()->setHorizontal(Alignment::HORIZONTAL_LEFT);
    }

    public function columnWidths(): array
    {
        return [
            'A' => 45,
            'B' => 20,
            'C' => 20,
            'D' => 20,
        ];
    }

    public function title(): string
    {
        return 'LOGS REPORT';
    }
}
