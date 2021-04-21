<?php

namespace App\Http\Livewire;

use App\Models\Control;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ShowConsult extends Component
{
    public $search;

    public function render()
    {
        $peps = Control::Where(DB::raw('CONCAT_WS(" ",name_one, name_two, last_name_one, last_name_two)'), 'like', '%' . $this->search . '%')->get();

        return view('livewire.show-consult', compact('peps'));
    }
}
