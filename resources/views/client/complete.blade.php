<x-client-layout>
    <h1 class="text-2xl font-bold">Información de la lista completa</h1>
    <hr class="mt-2 mb-6">
    <article class="mb-6 card">
        <div class="card-body bh-gray-100">
            <header class="flex items-center justify-between">
                <h1> <i class="far fa-calendar-alt"></i>
                    <strong>Fecha:
                    </strong>{{ $control_one->report_date }}
                    <strong>al </strong>{{ $control_three->report_date }}
                </h1>
                <div>
                    <strong>actualizado:
                    </strong> {{ $control_three->created_at }}
                </div>
            </header>
            {{-- <div x-show="open">
                    @livewire('incremental',['import'=>$item],key($item->id))
                </div> --}}
            <div class="flex items-center justify-end">
                {{-- <a href="{{ route('exportExcel', $item->description_final) }}"><button
                        class="mt-4 mr-2 btn btn-blue">Descarga
                        CSV</button></a> --}}
                <button class="mt-4 btn btn-green">Descarga XLSX</button>
            </div>

        </div>
    </article>
</x-client-layout>
