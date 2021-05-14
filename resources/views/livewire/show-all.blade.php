<div>
    <a class="btn btn-green" wire:click="$set('open',true)">
        <i class="fas far fa-people-arrows"></i>
    </a>
    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Detalle del allegado
        </x-slot>
        <x-slot name="content">
            <div>
                <x-jet-label value="Nombre del PEP" />
                <x-jet-input wire:model="pep.full_name" type="text" class="w-full readonly" />
            </div>
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <th scope="col"
                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase cursor-pointer ">
                        Nombre
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase cursor-pointer ">
                        Nro. de documento
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase cursor-pointer ">
                        Tipo
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase cursor-pointer ">
                        Código
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase cursor-pointer ">
                        Detalle
                    </th>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($alls as $all)
                        <tr>
                            <td class="px-6 py-4 text-xs font-medium">
                                {{ $all->name_one }}
                            </td>
                    @endforeach
                </tbody>
            </table>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open',false)">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-secondary-button>
                Reporte
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
