<?php

namespace App\Livewire\Administrator\ProjectCategory;

use App\Models\ProjectCategory;
use Livewire\Attributes\On;
use Livewire\Component;

class Manage extends Component
{

    public $category, $name, $description;

    public function edit(ProjectCategory $projectCategory)
    {
        $this->category = $projectCategory;
        $this->name = $projectCategory->name;
        $this->description = $projectCategory->description;

        $this->dispatch('modalOpenedEdit');
    }

    public function update()
    {
        $this->category->update(['name' => $this->name, 'description' => $this->description]);
        $this->dispatch('modalClosed');

        $this->dispatch(
            'alert',
            type: "success",
            msg: "{$this->name}  updated successfully"
          );
    }

    public function delete(ProjectCategory $projectCategory)
    {
        $this->category = $projectCategory;
        $this->name = $projectCategory->name;
        $this->dispatch('modalOpenedDelete');
    }

    public function confirmDelete()
    {
        $this->category->delete();

        $this->dispatch('modalClosedDelete');

        $this->dispatch(
            'alert',
            msg: "{$this->name} deleted successfully!",
            type: 'success'
        );
    }

    #[On('re-render-categories')]
    public function render()
    {
        $categories = ProjectCategory::get();

        return view('_administrator.project-category.manage', ['categories' => $categories]);
    }
}
