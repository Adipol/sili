<?php

namespace App\Http\Livewire;

use App\Models\Control;
use App\Models\Expense;
use Asantibanez\LivewireCharts\Models\AreaChartModel;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Asantibanez\LivewireCharts\Models\LineChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;
use Livewire\Component;

class LivewireCharts extends Component
{
    public $code = ['F-PEP', 'INTERPOL', 'OFAC', 'PEP-EX', 'PEP-NAL'];
    public $colors = [
        'F-PEP' => '#f6ad55',
        'INTERPOL' => '#fc8181',
        'OFAC' => '#90cdf4',
        'PEP-EX' => '#66DA26',
        'PEP-NAL' => '#cbd5e0',
    ];
    public $firstRun = true;

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
                    ->setTitle('Expenses by Type')
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
                    ->setTitle('Expenses by Type')
                    ->setAnimated($this->firstRun)
                    ->withOnSliceClickEvent('onSliceClick')
            );

        $this->firstRun = false;
        return view('livewire.livewire-charts')
            ->with([
                'columnChartModel' => $columnChartModel,
                'pieChartModel' => $pieChartModel
            ]);
    }
}
