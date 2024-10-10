<?php

namespace App\Livewire\Administrator\AuditLogs;

use App\Models\AuditLog;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        $logs = AuditLog::with('user')->orderBy('id', 'desc')->paginate(10);
        return view('_administrator.audit-logs.index', ['logs' => $logs]);
    }
}
