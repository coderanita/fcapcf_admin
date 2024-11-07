<?php

namespace App\Livewire\Administrator\Supports;

use App\Models\Support;
use Livewire\Component;

class View extends Component
{
    public $support;
    public $name;

    public function mount(Support $support)
    {
        $this->support = $support;
    }

    public function delete()
    {
        $this->dispatch('modalOpenedDelete');
    }

    public function confirmDelete()
    {
        $this->authorize('delete', $this->support);

        $this->support->delete();

        $this->dispatch(
            'alert',
            msg: 'Deleted Successfully!',
            type: 'success'
        );

        return redirect()->route('administrator.supports');
        // return $this->redirect('/administrator/supports', navigate:true);
    }

    public function render()
    {
        $this->authorize('view', $this->support);

        $count = Support::where('status', 1)->get();
        $countDraft = Support::where('status', 2)->get();
        return view('_administrator.supports.view', ['count' => $count, 'countDraft' => $countDraft]);
    }
}
