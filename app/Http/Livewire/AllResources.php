<?php

namespace App\Http\Livewire;

use App\Models\Detail;
use App\Models\whole;
use Livewire\Component;
use Livewire\WithFileUploads;

class AllResources extends Component
{
    use WithFileUploads;
    public $whole, $file, $text, $select;

    public function mount(Whole $whole)
    {
        $this->whole = $whole;
    }

    public function render()
    {
        $details = Detail::all();
        $lists = Whole::all();

        return view('livewire.all-resources', compact('details', 'lists'));
    }

    public function save()
    {
        $this->validate(['text' => 'required', 'select' => 'required', 'file' => 'required']);
        $url = $this->file->store('resources');
        $lists = Whole::all();
        if (count($lists) === 2) {
            Whole::where("id_detail", $this->select)->update([
                'amount' => $this->text,
                'id_detail' => $this->select,
                'link' => $url
            ]);
        } else {
            Whole::create([
                'amount' => $this->text,
                'id_detail' => $this->select,
                'link' => $url
            ]);
        }
    }

    // public function store()
    // {
    //     $this->validate(['text' => 'required', 'select' => 'required']);
    // }
}
