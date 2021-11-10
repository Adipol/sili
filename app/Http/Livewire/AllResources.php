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

    public $text;


    public function render()
    {
        $lists = Whole::all();

        return view('livewire.all-resources', compact('lists'));
    }

    public function save()
    {
        $this->validate(['text' => 'required']);

        $list = whole::first();
        if ($list) {
            Storage::delete($list->link_xlsx);
            Storage::delete($list->link_csv);
            Whole::where("id", 1)->update([
                'amount' => $this->text,
                'link_xlsx' => null,
                'link_csv' => null,
            ]);
        } else {
            Whole::create([
                'amount' => $this->text
            ]);
        }
    }
}
