<?php

namespace App\Http\Livewire\Client;

use App\Models\Control;
use Livewire\Component;

class AllDownload extends Component
{
    public $download;

    public function render()
    {
        return view('livewire.client.all-download');
    }

    public function download_xlsx()
    {
        if ($this->download->link_xlsx) {
            return  response()->download(storage_path('app/public/' . $this->download->link_xlsx));
        } else {
        }
    }

    public function download_csv()
    {
        if ($this->download->link_csv) {
            return  response()->download(storage_path('app/public/' . $this->download->link_csv));
        } else {
        }
    }
}
