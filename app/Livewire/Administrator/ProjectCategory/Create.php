<?php

namespace App\Livewire\Administrator\ProjectCategory;

use App\Models\ProjectCategory;
use Livewire\Component;

class Create extends Component
{
    public $name, $description;

    // Validation rules
    protected $rules = [
        'name' => 'required',
        'description' => 'required',
    ];

    public function create()
    {
        $this->dispatch('modalOpened');
    }

    public function save()
    {
        // Validate form fields
        $this->validate();

        ProjectCategory::create([
            'name' => $this->name,
            'description' => $this->description
        ]);


        $this->dispatch('modalClosed');
        $this->dispatch('re-render-categories');

        $this->dispatch(
            'alert',
            type: "success",
            msg: "{$this->name}  saved successfully"
          );
    }
    
    public function render()
    {
        return view('_administrator.project-category.create');
    }
}

