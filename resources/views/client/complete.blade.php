<x-client-layout>
    <h1 class="text-2xl font-bold">Información de la lista completa</h1>
    <hr class="mt-2 mb-6 border-2 border-yellow-500">

    <article class="mb-6 card">
        <div class="text-sm text-justify text-gray-500 card-body bh-gray-100">
            <p>Estimado Usuario</p>
            <p>Bienvenido al sitio de Listas de Control</p>
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
                @livewire('client.all-download')
            </div>
        </div>
    </article>
</x-client-layout>
