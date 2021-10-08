<?php

namespace App\Http\Livewire;

use App\Models\Import_all;
use Livewire\Component;

class AllResources extends Component
{
    public $lesson;

    public function mount(Import_all $all)
    {
        $this->all = $all;
    }

    public function render()
    {
        return view('livewire.all-resources');
    }
}
