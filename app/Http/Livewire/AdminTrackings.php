<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class AdminTrackings extends Component
{
    public function render()
    {
        $devices = db::select('select* from devices');

        return view('livewire.admin-trackings', compact('devices'));
    }
}
