<?php

namespace App\Http\Livewire;

use App\Models\Detail;
use App\Models\whole;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class AllResources extends Component
{
    use WithFileUploads;

    public $fecha_carga;


    public function render()
    {
        $lists = Whole::all();

        return view('livewire.all-resources', compact('lists'));
    }

    public function save()
    {
        $this->validate(['fecha_carga' => 'required']);

        $list = whole::first();
        if ($list) {
            Storage::delete($list->link_xlsx);
            Storage::delete($list->link_csv);
            Whole::where("id", 1)->update([
                'date' => $this->fecha_carga,
                'link_xlsx' => null,
                'link_csv' => null,
            ]);
        } else {
            Whole::create([
                'date' => $this->fecha_carga
            ]);
        }
    }
}
