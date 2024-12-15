<?php

namespace App\Livewire\Administrator\Announcements;

use App\Models\Announcement;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Manage extends Component
{
    use WithPagination;

    public $sortField = 'created_at'; // Default sort field
    public $sortDirection = 'asc'; // Default sort direction

    #[On('re-render-announcement-sort')]
    public function sortBy($sortField)
    {
        // Toggle the sorting direction
        $this->sortField = $sortField;
        $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
    }

    #[On('re-render-announcement')]
    public function render()
    {
        // Apply sorting dynamically based on sortField and sortDirection
        $announcements = Announcement::orderBy($this->sortField ?? 'created_at', $this->sortDirection ?? 'asc')
            ->paginate(10);

        return view(
            '_administrator.announcements.manage',
            [
                'announcements' => $announcements
            ]
        );
    }
}
