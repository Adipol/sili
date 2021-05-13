<?php

namespace App\Http\Livewire;

use App\Models\Control;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ShowConsult extends Component
{
    public $search;
    public $search1;
    public $search2;
    public $sort = 'name_one';
    public $direction = 'asc';

    public function render()
    {
        $peps = Control::Where(DB::raw('CONCAT_WS(" ",name_one, name_two)'), 'like', '%' . $this->search . '%')
            ->where(function ($query) {
                $query->Where(DB::raw('CONCAT_WS(" ",last_name_one, last_name_two)'), 'like', '%' . $this->search1 . '%');
            })
            ->orWhere('nro_document', $this->search2)
            //->orWhere(DB::raw('CONCAT_WS(" ",last_name_one, last_name_two)'), 'like', '%' . $this->search1 . '%')
            ->orderBy($this->sort, $this->direction)
            ->paginate(18);

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
