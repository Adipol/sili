<x-import-layout>
    <h1 class="text-2xl font-bold">Importar la lista completa</h1>
    <hr class="mt-2 mb-6 border-2 border-yellow-500">

    <article class="mb-6 card">
        <div class="text-sm text-justify text-gray-500 card-body bh-gray-100">
            <p>Estimado Usuario</p>
            <p>Usted puede importar las listas de control completa en formato Excel o Csv (archivo plano)</p>
        </div>
    </article>

    <div>
        @livewire('all-resources')
    </div>

</x-import-layout>
