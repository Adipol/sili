<x-client-layout>

    <h1 class="text-2xl font-bold">Información de la lista</h1>
    <hr class="mt-2 mb-6 bg-red">

    <article class="mb-6 card">
        <div class="text-sm text-justify text-gray-500 card-body bh-gray-100">
            <p>Estimado Usuario</p>
            <p>Bienvenido al sitio de descarga de Listas de Control</p>
            <p>Usted puede dercargar las listas de control incrementales en formato Excel o Csv (archivo plano)</p>
        </div>
    </article>

    @foreach ($imports as $import)
        <article class="mb-6 card">
            <div class="card-body bh-gray-100">
                <header class="flex items-center justify-between">
                    <h1 x-on:click="open=!open" class="cursor-pointer"> <i class="far fa-calendar-alt"></i>
                        <strong>Fecha:
                        </strong>{{ $import->description_beginning }}
                        <strong>al </strong>{{ $import->description_final->format('d-m-Y') }}
                    </h1>
                    <div>
                        <strong>Cargado:
                        </strong> {{ $import->created_at->diffForHumans() }}
                    </div>
                </header>
                <div class="flex items-center justify-end">
                    <a href="{{ route('incremental.exportCsv', $import->description_final) }}"><button
                            class="mt-4 mr-2 btn btn-blue">Descarga
                            CSV</button></a>
                    <a href="{{ route('incremental.exportXlsx', $import->description_final) }}"><button
                            class="mt-4 mr-2 btn btn-green">Descarga
                            XLSX</button></a>
                </div>
            </div>

        </article>
    @endforeach

</x-client-layout>
