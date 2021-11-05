<?php

namespace App\Http\Livewire\Client;

use App\Models\Import;
use Livewire\Component;

class IncrementalDownload extends Component
{
    public $download;

    public function mount(Import $download)
    {
        $this->download = $download;
    }

    public function render()
    {
        return view('livewire.client.incremental-download');
    }

    public function download()
    {
        return  response()->download(storage_path('app/public/' . $this->download->link));
    }
}
