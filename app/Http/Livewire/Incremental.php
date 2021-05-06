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
        $fbi = DB::table('controls')
            ->where([['report_date', $this->import->description_final], ['code', 'FBI']])
            ->count();

        $fpep = DB::table('controls')
            ->where([['report_date', $this->import->description_final], ['code', 'F-PEP']])
            ->count();

        $gafi = DB::table('controls')
            ->where([['report_date', $this->import->description_final], ['code', 'GAFI']])
            ->count();

        $interpol = DB::table('controls')
            ->where([['report_date', $this->import->description_final], ['code', 'INTERPOL']])
            ->count();

        $ofac = DB::table('controls')
            ->where([['report_date', $this->import->description_final], ['code', 'OFAC']])
            ->count();

        $onu = DB::table('controls')
            ->where([['report_date', $this->import->description_final], ['code', 'ONU']])
            ->count();

        return view('livewire.incremental', compact('controls', 'fbi', 'fpep', 'gafi', 'interpol', 'ofac', 'onu'));
    }
}
