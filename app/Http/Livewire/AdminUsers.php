<?php

namespace App\Http\Livewire;

use App\Models\Entity;
use App\Models\User;
use Livewire\Component;

class AdminUsers extends Component
{
    public function render()
    {
        $users = User::paginate(8);


        return view('livewire.admin-users', compact('users'));
    }
}
