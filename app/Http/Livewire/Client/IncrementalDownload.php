<?php

namespace App\Http\Livewire\Client;

use App\Models\Import;
use Livewire\Component;

class IncrementalDownload extends Component
{
    public $link_xlsx, $link_csv;

    public function mount(Import $download)
    {
        $this->download = $download;
    }

    public function render()
    {
        $imports = Import::orderBy('id', 'desc')->get();

        return view('livewire.client.incremental-download', compact('imports'));
    }

    public function download_xlsx($id)
    {
        $import = Import::find($id);
        $this->import = $import;
        if ($this->import->link_xlsx) {
            return  response()->download(storage_path('app/public/' . $this->import->link_xlsx));
        } else {
        }
    }

    public function download_csv($id)
    {

        $import = Import::find($id);
        $this->import = $import;
        if ($this->import->link_csv) {
            return  response()->download(storage_path('app/public/' . $this->import->link_csv));
        } else {
        }
    }
}
