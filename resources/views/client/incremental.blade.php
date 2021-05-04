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

    @foreach ($imports as $import)
        <article class="mb-6 card">
            <div class="card-body bh-gray-100">
                <header>
                    <h1 class="cursor-pointer"><strong>Fecha: </strong>{{ $import->description_beginning }}
                        <strong>al </strong>{{ $import->description_final->format('d/m/Y') }}
                    </h1>
                    <div>
                        {{ $import->created_at->format('d/m/Y') }}
                    </div>
                </header>
            </div>
        </article>
    @endforeach
</x-client-layout>
