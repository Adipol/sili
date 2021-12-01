<x-client-layout>
    <h1 class="text-2xl font-bold">Información de la lista completa (Honduras)</h1>
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
                    <strong>Fecha de carga: </strong>
                    @if ($complete)
                        {{ $complete->updated_at->isoFormat('ll') }}
                    @endif
                </h1>
                <div>
                    <strong>Actualizado: </strong>
                    @if ($complete)
                        {{ $complete->updated_at->diffForHumans() }}
                    @endif
                </div>
            </header>

            <div>
                @if ($complete)
                    @livewire('client.all-download-honduras',['download_all'=>$complete],key($complete->id))
                @endif
            </div>
            <div>
                <strong>Cantidad total: </strong>
                @if ($lists)
                    {{ $lists }}
                @endif
            </div>
        </div>
    </article>
</x-client-layout>
