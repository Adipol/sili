<?php

namespace App\Http\Livewire;

use App\Models\Control;
use Livewire\Component;

class ShowConsult extends Component
{
    public function render()
    {
        $peps = Control::all();

        return view('livewire.show-consult', compact('peps'));
    }
}
