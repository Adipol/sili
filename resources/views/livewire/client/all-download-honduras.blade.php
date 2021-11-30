<div>
    <article class="mt-4 card">
        <div class="card-body">
            <header><i class="text-blue-500 fas fa-chart-pie"></i> Cantidad por tipo</header>
        </div>
        <div class="flex flex-col space-y-2 sm:flex-row sm:space-y-0 sm:space-x-4">
            <div class="flex-1 p-4 bg-white border rounded shadow" style="height: 30rem;">
                <livewire:livewire-column-chart key="{{ $columnChartModel->reactiveKey() }}"
                    :column-chart-model="$columnChartModel" />
            </div>
            <div class="flex-1 p-4 bg-white border rounded shadow" style="height: 30rem;">
                <livewire:livewire-pie-chart key="{{ $pieChartModel->reactiveKey() }}"
                    :pie-chart-model="$pieChartModel" />
            </div>
        </div>
    </article>

    <div class="flex items-center justify-end mt-2">
        <button class="mt-4 mr-2 btn btn-green" wire:click="download_xlsx"><i class="fa fa-download"></i> Descarga
            XLSX</button>
        <button class="mt-4 mr-2 btn btn-blue" wire:click="download_csv"><i class="fa fa-download"></i> Descarga CSV
        </button>
    </div>
    <livewire:scripts />
    @livewireChartsScripts
</div>
