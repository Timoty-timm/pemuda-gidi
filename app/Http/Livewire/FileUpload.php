<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\File;

class FileUpload extends Component
{
    use WithFileUploads;
    public $file, $title;

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submit()
    {
        $validatedData = $this->validate([
            'title' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $validatedData['name'] = $this->file->store('files', 'public');

        File::create($validatedData);

        session()->flash('message', 'Image successfully Uploaded.');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */

    public function render()
    {
        return view('livewire.file-upload');
    }
}
