<x-client-layout>
    {{-- <header class="mb-6 bg-white shadow">
        <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900">
                Descarga
            </h1>
        </div>
    </header> --}}
    <h1 class="text-2xl font-bold">Información de la lista incremental</h1>
    <hr class="mt-2 mb-6">

    @foreach ($imports as $item)
        <article class="mb-6 card" x-data="{open:false}">
            <div class="card-body bh-gray-100">
                <header class="flex items-center justify-between">
                    <h1 x-on:click="open=!open" class="cursor-pointer"> <i class="far fa-calendar-alt"></i>
                        <strong>Fecha:
                        </strong>{{ $item->description_beginning->formatLocalized('%d %B %Y') }}
                        <strong>al </strong>{{ $item->description_final->formatLocalized('%d %B %Y') }}
                    </h1>
                    <div>
                        <strong>Cargado:
                        </strong> {{ $item->created_at->diffForHumans() }}
                    </div>
                </header>
                <div x-show="open">
                    @livewire('incremental',['import'=>$item],key($item->id))
                </div>
                <div class="flex items-center justify-end">
                    <a href="{{ route('exportExcel', $item->description_final) }}"><button
                            class="mt-4 mr-2 btn btn-blue">Descarga
                            CSV</button></a>
                    <button class="mt-4 btn btn-green">Descarga XLSX</button>
                </div>

            </div>
        </article>
    @endforeach
</x-client-layout>
