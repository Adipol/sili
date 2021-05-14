<?php

namespace App\Http\Livewire;

use App\Models\Control;
use Livewire\Component;

class ShowAll extends Component
{
    public $open = false;
    public $pep;

    protected $rules = [
        'pep.full_name' => 'required',
        'pep.name_one' => 'required',
        'pep.name_two' => 'required',
    ];

    public function mount(Control $pep)
    {
        $this->pep = $pep;
    }

    public function render()
    {
        $alls = Control::where('id_pep', $this->pep->id_pep)->get();

        return view('livewire.show-all', compact('alls'));
    }
}
