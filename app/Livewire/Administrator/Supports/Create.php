<?php

namespace App\Livewire\Administrator\Supports;

use App\Models\Support;
use Livewire\Component;

class Create extends Component
{

    public $email, $subject, $message;

    protected $rules = [
        'email' => 'required',
        'subject' => 'required',
        'message' => 'required',
    ];

    public function save()
    {
        $this->authorize('create', Support::class);

        $this->validate();

        Support::create([
            'email' =>  $this->email,
            'subject' =>  $this->subject,
            'message' =>  $this->message,
            'status' =>  1,
        ]);

        $this->dispatch(
            'alert',
            msg: 'New Support Added!',
            type: 'success'
        );

        $this->reset();

        // return redirect()->route('administrator.supports');
    }

    public function saveAsDraft()
    {
        $this->authorize('create', Support::class);

        $this->validate();

        Support::create([
            'email' =>  $this->email,
            'subject' =>  $this->subject,
            'message' =>  $this->message,
            'status' =>  2,
        ]);

        $this->dispatch(
            'alert',
            msg: 'New Support Added to Draft!',
            type: 'success'
        );

        $this->reset();
    }


    public function render()
    {
        $count = Support::where('status', 1)->get();
        $countDraft = Support::where('status', 2)->get();
        return view('_administrator.supports.create', ['count' => $count, 'countDraft' => $countDraft]);
    }
}
