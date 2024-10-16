<?php

namespace App\Livewire\Staff\Announcements;

use App\Models\Announcement;
use Livewire\Component;

class View extends Component
{
    public $announcement;
    public $name;

    public function mount(Announcement $announcement)
    {
        $this->name = $announcement->title;
        $this->announcement = $announcement;
    }

    public function render()
    {
        return view('_staff.announcements.view');
    }
}
