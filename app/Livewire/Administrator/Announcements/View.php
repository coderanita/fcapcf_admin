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

    public function delete()
    {
        $this->dispatch('modalOpenedDelete');
    }

    public function confirmDelete()
    {
        $this->announcement->delete();

        $this->dispatch(
            'alert',
            msg: 'Deleted Successfully!',
            type: 'success'
        );

        return redirect()->route('administrator.announcements');
    }

    public function render()
    {
        return view('_administrator.announcements.view');
    }
}
