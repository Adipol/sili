<?php

namespace App\Http\Livewire;

use App\Models\HondurasWhole;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class AllResourcesHonduras extends Component
{
    use WithFileUploads;

    public $fecha_carga;

    public function render()
    {
        $lists = HondurasWhole::all();

        return view('livewire.all-resources-honduras', compact('lists'));
    }

    public function save()
    {
        $this->validate(['fecha_carga' => 'required']);

        $list = HondurasWhole::first();
        if ($list) {
            Storage::disk('s3')->delete($list->link_xlsx);
            Storage::disk('s3')->delete($list->link_csv);
            HondurasWhole::where("id", 1)->update([
                'date' => $this->fecha_carga,
                'link_xlsx' => null,
                'link_csv' => null,
            ]);
        } else {
            HondurasWhole::create([
                'date' => $this->fecha_carga
            ]);
        }
    }
}
