<?php

namespace App\Livewire\Administrator\Announcements;

use App\Models\Announcement;
use Livewire\Component;

class View extends Component
{
    public $announcement;

    public function mount(Announcement $announcement)
    {
        $this->announcement = $announcement;
    }

    public function render()
    {
        return view('_administrator.announcements.view');
    }
}
