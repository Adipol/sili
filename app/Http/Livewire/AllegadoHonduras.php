<?php

namespace App\Http\Livewire;

use App\Models\ControlHonduras;
use Livewire\Component;

class AllegadoHonduras extends Component
{
    public $pep;

    public function render()
    {
        $count = ControlHonduras::where('id_pep', $this->pep->id_pep)->count();

        return view('livewire.allegado-honduras', compact('count'));
    }
}
