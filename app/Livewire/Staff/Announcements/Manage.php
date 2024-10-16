<?php

namespace App\Livewire\Staff\Announcements;

use App\Models\Announcement;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Manage extends Component
{
    use WithPagination;

    #[On('re-render-announcement')]
    public function render()
    {

        $announcements = Announcement::paginate(10);

        return view(
            '_staff.announcements.manage',
            [
                'announcements' => $announcements
            ]
        );
    }
}
