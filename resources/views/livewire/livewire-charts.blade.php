<div class="container p-4 mx-auto space-y-4 sm:p-0">
    <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
        <div class="flex-1 p-4 bg-white border rounded shadow" style="height: 32rem;">
            <livewire:livewire-column-chart key="{{ $columnChartModel->reactiveKey() }}"
                :column-chart-model="$columnChartModel" />
        </div>
        <div class="flex-1 p-4 bg-white border rounded shadow" style="height: 32rem;">
            <livewire:livewire-pie-chart key="{{ $pieChartModel->reactiveKey() }}"
                :pie-chart-model="$pieChartModel" />
        </div>
    </div>
    <livewire:scripts />
    @livewireChartsScripts
</div>
