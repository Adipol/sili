<x-client-layout>

    <h1 class="text-2xl font-bold">Información de la lista</h1>
    <hr class="mt-2 mb-6">

    @foreach ($imports as $import)
        <article class="mb-6 card">
            <div class="card-body bh-gray-100">
                <header class="flex items-center justify-between">
                    <h1 x-on:click="open=!open" class="cursor-pointer"> <i class="far fa-calendar-alt"></i>
                        <strong>Fecha:
                        </strong>{{ $import->description_beginning->formatLocalized('%d %B %Y') }}
                        <strong>al </strong>{{ $import->description_final->formatLocalized('%d %B %Y') }}
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
