<?php

namespace App\Http\Livewire;

use App\Models\Control;
use Livewire\Component;

class Allegado extends Component
{
    public $pep;

    // public function mount(Control $pep)
    // {
    //     $this->pep = $pep;
    // }

    public function render()
    {
        $count = Control::where('id_pep', $this->pep->id_pep)->count();

        return view('livewire.allegado', compact('count'));
    }
}
