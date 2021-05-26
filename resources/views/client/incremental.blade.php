<x-client-layout>

    <h1 class="text-2xl font-bold">Información de la lista</h1>
    <hr class="mt-2 mb-6">

    @foreach ($imports as $import)
        <article class="mb-6 card">
            <div class="card-body bh-gray-100">
                <header class="flex items-center justify-between">
                    <h1 x-on:click="open=!open" class="cursor-pointer"> <i class="far fa-calendar-alt"></i>
                        <strong>Fecha:
                        </strong>{{ $import->description_beginning }}
                        <strong>al </strong>{{ $import->description_final }}
                    </h1>
                    <div>
                        <strong>Cargado:
                        </strong> {{ $import->created_at->diffForHumans() }}
                    </div>
                </header>
            </div>

        </article>
    @endforeach

</x-client-layout>
