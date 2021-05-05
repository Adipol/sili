<?php

namespace App\Http\Livewire;

use App\Models\Control;
use App\Models\Import;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Incremental extends Component
{
    public $import;

    public function mount(Import $import)
    {
        $this->import = $import;
    }

    public function render()
    {
        $controls = DB::table('controls')->where('report_date', $this->import->description_final)->count();

        return view('livewire.incremental', compact('controls'));
    }
}
