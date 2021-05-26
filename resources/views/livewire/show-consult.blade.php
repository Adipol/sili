<div>
    {{ $search }}

    <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <x-table>
            <div class="px-6 py-4">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="price" class="block text-sm font-medium text-gray-700">Nombre o numero de
                            documento</label>
                        <x-jet-input class="w-full mt-1"
                            placeholder="Escriba el nombre de persona o su numero de documento" type="text"
                            wire:model="search" />
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="price" class="block text-sm font-medium text-gray-700">Apellido</label>
                        <x-jet-input class="w-full mt-1" placeholder="Escriba el apellido de la persona" type="text"
                            wire:model="search1" />
                    </div>
                </div>
            </div>
    </div>
    @if ($peps->count())
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col"
                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase cursor-pointer "
                        wire:click="order('name_one')">
                        Nombre

                        @if ($sort == 'name_one')
                            @if ($direction == 'asc')
                                <i class="float-right mt-1 fas fa-sort-alpha-down"></i>
                            @else
                                <i class="float-right mt-1 fas fa-sort-alpha-up"></i>
                            @endif
                        @else
                            <i class="float-right mt-1 fas fa-sort"></i>
                        @endif

                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase cursor-pointer "
                        wire:click="order('type_document')">
                        Documento
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase cursor-pointer"
                        wire:click="order('nro_document')">
                        Nro. de Documento
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase cursor-pointer"
                        wire:click="order('code')">
                        Tipo
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase cursor-pointer"
                        wire:click="order('position_country')">
                        País
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase cursor-pointer"
                        wire:click="order('position')">
                        cargo
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase cursor-pointer"
                        wire:click="order('management')">
                        Gestión
                    </th>
                    <th scope="col" colspan="2"
                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                        Opciones
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($peps as $pep)
                    <tr>
                        <td class="px-6 py-4 text-xs font-medium">
                            {{ $pep->full_name }}
                        </td>
                        <td class="px-6 py-4 text-xs font-medium">
                            {{ $pep->type_document }}
                        </td>
                        <td class="px-6 py-4 text-xs font-medium">
                            {{ $pep->nro_document }}
                        </td>
                        <td class="px-6 py-4 text-xs font-medium">
                            {{ $pep->code }}</>
                        </td>
                        <td class="px-6 py-4 text-xs font-medium">
                            {{ $pep->position_country }}
                        </td>
                        <td class="px-6 py-4 text-xs font-medium">
                            <div class="text-sm text-gray-900">{{ $pep->position }}</div>
                            <div class="text-sm text-gray-500">{{ $pep->entity }}</div>
                        </td>
                        <td class="px-6 py-4 text-xs font-medium">
                            {{ $pep->management }}
                        </td>
                        <td class="px-6 py-4 text-sm font-medium" title="Detalle de la persona">
                            @livewire('show-pep',['pep' => $pep], key($pep->id))
                        </td>
                        <td class="text-sm font-medium " title="Detalle de allegados">
                            <a class="btn btn-green">
                                <i class="fas far fa-people-arrows"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="px-6 py-4 text-center">
            No existe ningún registro que coincida
        </div>
    @endif

    </x-table>
</div>
</div>
