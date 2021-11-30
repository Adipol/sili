<?php

namespace App\Http\Livewire;

use App\Models\HondurasWhole;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class IncrementalXlsxHonduras extends Component
{
    use WithFileUploads;
    public $list, $open = false, $file, $identificador;

    public function mount(HondurasWhole $list)
    {
        $this->list = $list;
        $this->identificador = rand();
    }

    public function save_xlsx()
    {
        if ($this->file) {
            Storage::delete($this->list->link_xlsx);
            $this->list->link_xlsx = $this->file->store('resources');
        }
        $this->list->save();
        $this->reset(['open', 'file']);
        $this->identificador = rand();
        $this->emitTo('AllResourcesHonduras', 'render');
        $this->emit('alert', 'El registro se actualizó satisfactoriamente');
    }

    public function download_xlsx()
    {
        return response()->download(storage_path('app/public/' . $this->list->link_xlsx));
    }

    public function render()
    {
        return view('livewire.incremental-xlsx-honduras');
    }
}
