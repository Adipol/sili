<?php

namespace App\Http\Livewire;

use App\Models\Entity;
use Livewire\Component;
use Livewire\WithPagination;

class AdminEntities extends Component
{
    use withPagination;
    protected $paginationTheme = "bootstrap";
    public $search;

    public function render()
    {
        $entities = Entity::where('name', 'LIKE', '%' . $this->search . '%')->paginate(8);

        return view('livewire.admin-entities', compact('entities'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
