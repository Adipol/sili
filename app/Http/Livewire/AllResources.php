<?php

namespace App\Http\Livewire;

use App\Models\Detail;
use App\Models\Import_all;
use Livewire\Component;
use Livewire\WithFileUploads;

class AllResources extends Component
{
    use WithFileUploads;
    public $import_all, $file, $text, $select;

    public function mount(Import_all $import_all)
    {
        $this->import_all = $import_all;
    }

    public function render()
    {
        $details = Detail::all();

        return view('livewire.all-resources', compact('details'));
    }

    public function save()
    {
        $this->validate(['text' => 'required', 'select' => 'required', 'file' => 'required']);
        $url = $this->file->store('resources');
        Import_all::create([
            'amount' => $this->text,
            'id_detail' => $this->select,
            'link' => $url
        ]);
    }

    // public function store()
    // {
    //     $this->validate(['text' => 'required', 'select' => 'required']);
    // }
}
