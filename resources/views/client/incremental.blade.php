<x-client-layout>

    <h1 class="text-2xl font-bold">Información de la lista</h1>
    <hr class="mt-2 mb-6">

    @foreach ($imports as $import)
        <article class="mb-6 card">
            <div class="card-body bh-gray-100">
                <header>
                    <h1 class="cursor-pointer"><strong>Año: </strong>{{ $import->year }}</h1>
                </header>
            </div>

        </article>
    @endforeach

</x-client-layout>
