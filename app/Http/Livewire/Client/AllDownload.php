<?php

namespace App\Http\Livewire\Client;

use App\Models\Control;
use App\Models\whole;
use Livewire\Component;
use Asantibanez\LivewireCharts\Models\AreaChartModel;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Asantibanez\LivewireCharts\Models\LineChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;

class AllDownload extends Component
{
    public $download_all;

    public $code = ['F-PEP', 'INTERPOL', 'OFAC', 'PEP-EX', 'PEP-NAL'];
    public $colors = [
        'F-PEP' => '#f6ad55',
        'INTERPOL' => '#fc8181',
        'OFAC' => '#90cdf4',
        'PEP-EX' => '#66DA26',
        'PEP-NAL' => '#cbd5e0',
    ];

    public $firstRun = true;

    public function mount(whole $download_all)
    {
        $this->download_all = $download_all;
    }

    public function render()
    {
        $expenses = Control::whereIn('code', $this->code)->get();
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

        return view('livewire.client.all-download')->with([
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
