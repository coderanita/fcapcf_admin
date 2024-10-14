<?php

namespace App\Livewire\Administrator\ProjectDocument;

use App\Models\ProjectDocument;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class Manage extends Component
{
    use WithFileUploads;

    public $file;

    public $documents = [];

    public function mount()
    {
        $this->documents = ProjectDocument::get();
    }

    public function create()
    {
        $this->dispatch('modalOpened');
    }

    public function updatedFile()
    {
        // Validate the file
        $this->validate([
            // 'file' => 'required|mimes:jpg,jpeg,png,pdf,doc,docx,xls,xlsx,ppt,pptx|max:10240',
            'file' => 'required'
        ]);

        // Store the file in a public directory (or any directory you prefer)
        $path = $this->file->store('project-documents', 'public');
        $file_name = $this->file->getClientOriginalName();

        $mimeType = $this->file->getMimeType();

        if (str_starts_with($mimeType, 'image/')) {
            $fileType = 'Image';
        } elseif (str_starts_with($mimeType, 'video/')) {
            $fileType = 'Video';
        } elseif (in_array($mimeType, ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.ms-excel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'])) {
            $fileType = 'Document';
        } else {
            $fileType = 'Other';
        }

        ProjectDocument::create(
            [
                'user_id' => Auth::user()->id,
                'file_name' => $file_name,
                'file_path' => $path,
                'file_size' => number_format($this->file->getSize() / 1048576, 2),
                'file_type' => $fileType,
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

    public function fileType($fileType)
    {
        $this->documents = ProjectDocument::where('file_type', $fileType)->get();
    }


    public function render()
    {
        return view('_administrator.project-document.manage');
    }
}
