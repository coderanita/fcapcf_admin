<?php

namespace App\Livewire\Administrator\Announcements;

use App\Models\Announcement;
use Livewire\Component;
use App\Traits\HasModalElement;
use Livewire\Attributes\On;

class Create extends Component
{
    use HasModalElement;

    public $to;
    public $title;
    public $description;
    public $date;
    public $time;

    public function save()
    {
        Announcement::create([
            'to' =>  $this->to,
            'title' =>  $this->title,
            'description' =>  $this->description,
            'date' =>  $this->date,
            'time' =>  $this->time,
        ]);

        $this->dispatch(
            'alert',
            msg: 'New Announcement Added!',
            type: 'success'
        );

        $this->dispatch('modalClosed');
        $this->dispatch('re-render-announcement');

        $this->reset();
    }


    public function render()
    {
        return view('_administrator.announcements.create');
    }
}
