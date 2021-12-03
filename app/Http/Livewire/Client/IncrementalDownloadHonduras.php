<?php

namespace App\Http\Livewire\Client;

use App\Models\HondurasImport;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class IncrementalDownloadHonduras extends Component
{
    public $link_xlsx, $link_csv;

    public function mount(HondurasImport $download)
    {
        $this->download = $download;
    }

    public function render()
    {
        $imports = HondurasImport::orderBy('id', 'desc')->get();

        return view('livewire.client.incremental-download-honduras', compact('imports'));
    }

    public function download_xlsx($id)
    {
        $import = HondurasImport::find($id);
        $this->import = $import;
        if ($this->import->link_xlsx) {
            return Storage::disk('s3')->download($this->import->link_xlsx);
            //return  response()->download(storage_path('app/public/' . $this->import->link_xlsx));
        } else {
        }
    }

    public function download_csv($id)
    {

        $import = HondurasImport::find($id);
        $this->import = $import;
        if ($this->import->link_csv) {
            return Storage::disk('s3')->download($this->import->link_csv);
            //return  response()->download(storage_path('app/public/' . $this->import->link_csv));
        } else {
        }
    }
}
