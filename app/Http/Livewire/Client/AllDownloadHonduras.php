<?php

namespace App\Http\Livewire\Client;

use App\Models\ControlHonduras;
use App\Models\HondurasWhole;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;
use Livewire\Component;

class AllDownloadHonduras extends Component
{
    public $download_all;

    public $code = ['ASO-PEP', 'FBI', 'F-PEP', 'GAFI', 'INTERPOL', 'OFAC', 'ONU', 'OPI', 'PEP-EX', 'PEP-NAL', 'PEPU-EX', 'PEPU-NAL', 'UE'];
    public $colors = [
        'ASO-PEP' => '#f6ad55',
        'FBI' => '#fc8181',
        'F-PEP' => '#90cdf4',
        'GAFI' => '#66DA26',
        'INTERPOL' => '#cbd5e0',
        'OFAC' => '#f490b1',
        'ONU' => '#bdf490',
        'OPI' => '#f49890',
        'PEP-EX' => '#70423e61',
        'PEP-NAL' => '#3e706961',
        'PEPU-EX' => '#703e6e61',
        'PEPU-NAL' => '#911d0861',
        'UE' => '#07288d61',
    ];

    public $firstRun = true;

    public function mount(HondurasWhole $download_all)
    {
        $this->download_all = $download_all;
    }

    public function render()
    {
        $expenses = ControlHonduras::whereIn('code', $this->code)->get();
        $columnChartModel = $expenses->groupBy('code')
            ->reduce(
                function (ColumnChartModel $columnChartModel, $data) {
                    $type = $data->first()->code;
                    $value = $data->count('code');
                    return $columnChartModel->addColumn($type, $value, $this->colors[$type]);
                },
                (new ColumnChartModel())
                    ->setTitle('Cantidad por tipo')
                    ->setAnimated($this->firstRun)
                    ->withOnColumnClickEventName('onColumnClick')
            );
        $pieChartModel = $expenses->groupBy('code')
            ->reduce(
                function (PieChartModel $pieChartModel, $data) {
                    $type = $data->first()->code;
                    $value = $data->count('code');
                    return $pieChartModel->addSlice($type, $value, $this->colors[$type]);
                },
                (new PieChartModel())
                    ->setTitle('Cantidad por tipo')
                    ->setAnimated($this->firstRun)
                    ->withOnSliceClickEvent('onSliceClick')
            );

        $this->firstRun = false;

        return view('livewire.client.all-download-honduras')->with([
            'columnChartModel' => $columnChartModel,
            'pieChartModel' => $pieChartModel
        ]);
    }

    public function download_xlsx()
    {
        if ($this->download_all->link_xlsx) {
            return  response()->download(storage_path('app/public/' . $this->download_all->link_xlsx));
        } else {
        }
    }

    public function download_csv()
    {
        if ($this->download_all->link_csv) {
            return  response()->download(storage_path('app/public/' . $this->download_all->link_csv));
        } else {
        }
    }
}
