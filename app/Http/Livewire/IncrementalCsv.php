<?php

namespace App\Http\Livewire;

use App\Models\whole;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class IncrementalCsv extends Component
{
    use WithFileUploads;
    public $list, $open1 = false, $file1, $identificador1;

    protected $rules = [
        'list.amount' => 'required',
    ];

    public function mount(whole $list)
    {
        $this->list = $list;
        $this->identificador1 = rand();
    }

    public function save_csv()
    {
        $this->validate();
        if ($this->file1) {
            Storage::delete($this->list->link_csv);
            $this->list->link_csv = $this->file1->store('resources');
        }
        $this->list->save();
        $this->reset(['open1', 'file1']);
        $this->identificador1 = rand();
        $this->emitTo('all-resources', 'render');
        $this->emit('alert', 'El registro se actualizó satisfactoriamente');
    }

    public function download_csv()
    {
        return response()->download(storage_path('app/public/' . $this->list->link_csv));
    }

    public function render()
    {
        return view('livewire.incremental-csv');
    }
}
