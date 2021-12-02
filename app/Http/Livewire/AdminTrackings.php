<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use Carbon\Carbon;

class AdminTrackings extends Component
{
    use WithPagination;
    public $search;

    public function render()
    {
        $devices = DB::table('device_user')
            ->join('devices', 'device_user.device_id', '=', 'devices.id')
            ->join('users', 'device_user.user_id', '=', 'users.id')
            ->select('users.name', 'users.email', 'devices.created_at', 'devices.updated_at', 'devices.device_type', 'devices.ip')
            ->Where('users.name', 'like', '%' . $this->search . '%')
            ->orWhere('users.email', 'like', '%' . $this->search . '%')
            ->paginate(10);

        return view('livewire.admin-trackings', compact('devices'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
