<?php

namespace App\Livewire\Administrator\Supports;

use App\Models\Support;
use Livewire\Component;

class View extends Component
{
    public $support;

    public function mount(Support $support)
    {
        $this->support = $support;
    }

    public function delete(Support $support)
    {
        $support->delete();

        $this->dispatch('showAlert', [
            'msg' => 'Deleted successfully!',
            'type' => 'success',
        ]);

        return redirect()->route('administrator.supports');
        // return $this->redirect('/administrator/supports', navigate:true);
    }

    public function render()
    {
        $count = Support::get();
        return view('_administrator.supports.view', ['count' => $count]);
    }
}
