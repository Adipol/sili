<?php

namespace App\Http\Livewire;

use App\Models\whole;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class IncrementalXlsx extends Component
{
    use WithFileUploads;
    public $list, $open = false, $file, $identificador;


    public function mount(whole $list)
    {
        $this->list = $list;
        $this->identificador = rand();
    }

    public function save_xlsx()
    {

        if ($this->file) {
            Storage::disk('s3')->delete($this->list->link_xlsx);
            $this->list->link_xlsx = $this->file->store('resources', 's3');
        }
        $this->list->save();
        $this->reset(['open', 'file']);
        $this->identificador = rand();
        $this->emitTo('all-resources', 'render');
        $this->emit('alert', 'El registro se actualizó satisfactoriamente');
    }

    public function download_xlsx()
    {
        return Storage::disk('s3')->download($this->list->link_xlsx);
        //return response()->download(storage_path('app/public/' . $this->list->link_xlsx));
    }

    public function render()
    {
        return view('livewire.incremental-xlsx');
    }
}
