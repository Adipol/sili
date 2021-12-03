<?php

namespace App\Http\Livewire;

use App\Models\Import;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class IncrementalOriginalXlsx extends Component
{
    use WithFileUploads;

    public $control, $open = false, $file, $identificador;

    protected $rules = [
        'control.aso_pep_new' => 'required',
        'control.aso_pep_upgrade' => 'required',
        'control.fbi_new' => 'required',
        'control.fbi_upgrade' => 'required',
        'control.f_pep_new' => 'required',
        'control.f_pep_upgrade' => 'required',
        'control.gafi_new' => 'required',
        'control.gafi_upgrade' => 'required',
        'control.interpol_new' => 'required',
        'control.interpol_upgrade' => 'required',
        'control.ofac_new' => 'required',
        'control.ofac_upgrade' => 'required',
        'control.onu_new' => 'required',
        'control.onu_upgrade' => 'required',
        'control.opi_new' => 'required',
        'control.opi_upgrade' => 'required',
        'control.pep_ex_new' => 'required',
        'control.pep_ex_upgrade' => 'required',
        'control.pep_nal_new' => 'required',
        'control.pep_nal_upgrade' => 'required',
        'control.pepu_ex_new' => 'required',
        'control.pepu_ex_upgrade' => 'required',
        'control.pepu_nal_new' => 'required',
        'control.pepu_nal_upgrade' => 'required',
        'control.ue_new' => 'required',
        'control.ue_upgrade' => 'required',
        'control.description' => 'required',
    ];
    public function mount(Import $control)
    {
        $this->control = $control;
        $this->identificador = rand();
    }

    public function save_xlsx()
    {
        //$this->validate();
        if ($this->file) {
            Storage::disk('s3')->delete($this->control->link_xlsx);
            $this->control->link_xlsx = $this->file->store('resources', 's3');
        }
        $this->control->save();
        $this->reset(['open', 'file']);
        $this->identificador = rand();
        $this->emitTo('Incremental', 'render');
        $this->emit('alert', 'El registro se actualizó satisfactoriamente');
    }

    public function download_xlsx()
    {
        return Storage::disk('s3')->download($this->control->link_xlsx);
        //return response()->download(storage_path('app/public/' . $this->control->link_xlsx));
    }

    public function render()
    {
        return view('livewire.incremental-original-xlsx');
    }
}
