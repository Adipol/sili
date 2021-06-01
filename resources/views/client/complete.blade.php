<x-client-layout>
    <h1 class="text-2xl font-bold">Información de la lista completa</h1>
    <hr class="mt-2 mb-6 border-2 border-indigo-500">

    <article class="mb-6 card">
        <div class="text-sm text-justify text-gray-500 card-body bh-gray-100">
            <p>Estimado Usuario</p>
            <p>Bienvenido al sitio de descarga de Listas de Control</p>
            <p>Usted puede descargar las listas de control completa en formato Excel o Csv (archivo plano)</p>
        </div>
    </article>

    <article class="mb-6 card">
        <div class="text-sm card-body bh-gray-100">
            <header class="flex items-center justify-between">
                <h1> <i class="far fa-calendar-alt"></i>
                    <strong>Fecha: </strong>
                    {{ $inicio1 }}
                    <strong>al </strong>
                    {{ $fin1 }}
                </h1>
                <div>
                    <strong>Actualizado: </strong>
                    {{ $control_three->created_at->diffForHumans() }}
                </div>
            </header>

            <div class="flex items-center justify-between">
                <div>
                    <strong>Cantidad total de registros:
                    </strong> {{ $control_two->count() }}
                </div>
                <div>
                    <a href="{{ route('complete.exportCsv', $control_three->report_date) }}"><button
                            class="mt-4 mr-2 btn btn-blue">Descarga
                            CSV</button></a>
                    <a href="{{ route('complete.exportXlsx', $control_three->report_date) }}"><button
                            class="mt-4 mr-2 btn btn-green">Descarga
                            XLSX</button></a>
                </div>
            </div>
        </div>
    </article>
</x-client-layout>
