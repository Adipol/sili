<?php

namespace App\Http\Livewire;

use App\Models\Control;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ShowConsult extends Component
{
    public $search;
    public $sort = 'name_one';
    public $direction = 'asc';

    public function render()
    {
        $peps = Control::Where(DB::raw('CONCAT_WS(" ",name_one, name_two, last_name_one, last_name_two)'), 'like', '%' . $this->search . '%')
            ->orderBy($this->sort, $this->direction)
            ->paginate(8);

        return view('livewire.show-consult', compact('peps'));
    }

    public function order($sort)
    {
        if ($this->sort == $sort) {
            if ($this->direction == 'asc') {
                $this->direction = 'desc';
            } else {
                $this->direction = 'asc';
            }
        } else {
            $this->sort = $sort;
            $this->direction = 'asc';
        }
    }
}
