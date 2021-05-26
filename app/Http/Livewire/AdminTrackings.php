<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class AdminTrackings extends Component
{
    public function render()
    {
        $devices = DB::table('device_user')
            ->join('devices', 'device_user.device_id', '=', 'devices.id')
            ->join('users', 'device_user.user_id', '=', 'users.id')
            ->select('users.name', 'devices.*')
            ->get();

        return view('livewire.admin-trackings', compact('devices'));
    }
}
