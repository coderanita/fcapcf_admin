<?php

namespace App\Livewire\Administrator\Supports;

use App\Models\Support;
use Livewire\Component;

class Edit extends Component
{
    public $support;
    public $email, $subject, $message;

    protected $rules = [
        'email' => 'required',
        'subject' => 'required',
        'message' => 'required',
    ];

    public function mount(Support $support)
    {
        $this->support = $support;
        $this->email = $support->email;
        $this->subject = $support->subject;
        $this->message = $support->message;
    }

    public function save()
    {
        $this->authorize('update', $this->support);

        $this->validate();

        $this->support->update([
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
        $this->authorize('update', $this->support);

        $this->validate();

        $this->support->update([
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
        return view('_administrator.supports.edit', ['count' => $count, 'countDraft' => $countDraft]);
    }
}
