<?php

namespace App\Http\Livewire;

use App\Models\HondurasImport;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class IncrementalHonduras extends Component
{
    use WithFileUploads;

    public $fecha_ini, $fecha_fin,
        $new_aso_pep, $update_aso_pep,
        $new_fbi, $update_fbi,
        $new_f_pep, $update_f_pep,
        $new_gafi, $update_gafi,
        $new_interpol, $update_interpol,
        $new_ofac, $update_ofac,
        $new_onu, $update_onu,
        $new_opi, $update_opi,
        $new_pep_ex, $update_pep_ex,
        $new_pep_nal, $update_pep_nal,
        $new_pepu_ex, $update_pepu_ex,
        $new_pepu_nal, $update_pepu_nal,
        $new_ue, $update_ue,
        $description_one;

    public function render()
    {
        $controls = HondurasImport::all();

        return view('livewire.incremental-honduras', compact('controls'));
    }

    public function save()
    {
        $this->validate([
            'fecha_ini' => 'required',
            'fecha_fin' => 'required',
        ]);

        HondurasImport::create([
            'description_beginning' => $this->fecha_ini,
            'description_final' => $this->fecha_fin,
            'aso_pep_new' => $this->new_aso_pep,
            'aso_pep_upgrade' => $this->update_aso_pep,
            'fbi_new' => $this->new_fbi,
            'fbi_upgrade' => $this->update_fbi,
            'f_pep_new' => $this->new_f_pep,
            'f_pep_upgrade' => $this->update_f_pep,
            'gafi_new' => $this->new_gafi,
            'gafi_upgrade' => $this->update_gafi,
            'interpol_new' => $this->new_interpol,
            'interpol_upgrade' => $this->update_interpol,
            'ofac_new' => $this->new_ofac,
            'ofac_upgrade' => $this->update_ofac,
            'onu_new' => $this->new_onu,
            'onu_upgrade' => $this->update_onu,
            'opi_new' => $this->new_opi,
            'opi_upgrade' => $this->update_opi,
            'pep_ex_new' => $this->new_pep_ex,
            'pep_ex_upgrade' => $this->update_pep_ex,
            'pep_nal_new' => $this->new_pep_nal,
            'pep_nal_upgrade' => $this->update_pep_nal,
            'pepu_ex_new' => $this->new_pepu_ex,
            'pepu_ex_upgrade' => $this->update_pepu_ex,
            'pepu_nal_new' => $this->new_pepu_nal,
            'pepu_nal_upgrade' => $this->update_pepu_nal,
            'ue_new' => $this->new_ue,
            'ue_upgrade' => $this->update_ue,
            'description' => $this->description_one
        ]);
    }

    public function destroy($id)
    {
        $control = HondurasImport::where('id', $id)->first();

        if ($control->link_xlsx) {
            Storage::disk('s3')->delete($control->link_xlsx);
        }
        if ($control->link_csv) {
            Storage::disk('s3')->delete($control->link_csv);
        }
        HondurasImport::destroy($id);
    }
}
