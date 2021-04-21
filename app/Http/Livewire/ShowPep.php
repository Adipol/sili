<?php

namespace App\Http\Livewire;

use App\Models\Control;
use Livewire\Component;

class ShowPep extends Component
{
    public $open = false;
    public $pep;

    protected $rules = [
        'pep.name_one' => 'required',
        'pep.name_two' => 'required',
        'pep.first_name_one' => 'required',
        'pep.first_name_two' => 'required'
    ];

    public function mount(Control $pep)
    {
        $this->pep = $pep;
    }

    public function render()
    {
        return view('livewire.show-pep');
    }
}
