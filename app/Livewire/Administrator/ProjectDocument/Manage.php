<?php

namespace App\Livewire\Administrator\ProjectDocument;

use App\Models\ProjectDocument;
use Livewire\Component;
use Livewire\WithFileUploads;

class Manage extends Component
{
    use WithFileUploads;

    public $file;

    public function create()
    {
        $this->dispatch('modalOpened');
    }

    public function updatedFile()
    {
        // Validate the file
        $this->validate([
            'file' => 'required|mimes:jpg,jpeg,png,pdf|max:10240', // 10MB Max
        ]);

        // Store the file in a public directory (or any directory you prefer)
        $path = $this->file->store('project-documents', 'public');
        $file_name = $this->file->getClientOriginalName();

        ProjectDocument::create(
            [
                'file_name' => $file_name,
                'file_path' => $path
            ]
        );

        $this->dispatch('modalClosed');

        $this->dispatch(
            'alert',
            type: "success",
            msg: "{$file_name}  uploaded successfully"
          );

          $this->reset();

    }

    public function render()
    {
        return view('_administrator.project-document.manage');
    }
}
