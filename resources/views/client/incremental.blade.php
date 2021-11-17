<x-client-layout x-data="{open:false}" class="mt-2">

    <h1 class="text-2xl font-bold">Información de la lista incremental</h1>
    <hr class="mt-2 mb-6 border-2 border-yellow-500">

    <article class="mb-6 card">
        <div class="text-sm text-justify text-gray-500 card-body bh-gray-100">
            <p>Estimado Usuario</p>
            <p>Bienvenido al sitio de Listas de Control</p>
            <p>Usted puede descargar las listas de control incremental en formato Excel o Csv (archivo plano)</p>
        </div>
    </article>

    @livewire('client.incremental-download')

</x-client-layout>
