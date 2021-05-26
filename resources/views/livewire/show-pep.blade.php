<div>
    <a class="btn btn-blue" wire:click="$set('open',true)">
        <i class="fas far fa-binoculars"></i>
    </a>
    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Detalle de la persona
        </x-slot>
        <x-slot name="content">
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <x-jet-label value="Primer Nombre" />
                    <x-jet-input wire:model="pep.name_one" type="text" class="w-full readonly" />
                </div>
                <div>
                    <x-jet-label value="Segundo Nombre" />
                    <x-jet-input wire:model="pep.name_two" type="text" class="w-full readonly" />
                </div>
                <div>
                    <x-jet-label value="Primer Apellido" />
                    <x-jet-input wire:model="pep.last_name_one" type="text" class="w-full readonly" />
                </div>
                <div>
                    <x-jet-label value="Segundo Apellido" />
                    <x-jet-input wire:model="pep.last_name_two" type="text" class="w-full readonly" />
                </div>
            </div>

            <div class="grid grid-cols-3 gap-4">
                <div class="">
                    <x-jet-label value="Tipo de documento" />
                    <x-jet-input wire:model="pep.type_document" type="text" class="w-full readonly" />
                </div>
                <div class="">
                    <x-jet-label value="Numero de documento" />
                    <x-jet-input wire:model="pep.nro_document" type="text" class="w-full readonly" />
                </div>
                <div class="">
                    <x-jet-label value="Extension" />
                    <x-jet-input wire:model="pep.extension" type="text" class="w-full readonly" />
                </div>
                <div class="">
                    <x-jet-label value="Tipo de lista" />
                    <x-jet-input wire:model="pep.code" type="text" class="w-full readonly" />
                </div>
            </div>

            <div class="mb-4">
                <div>
                    <x-jet-label value="Cargo" />
                    <x-jet-input wire:model="pep.position" type="text" class="w-full readonly" />
                </div>
                <div>
                    <x-jet-label value="Entidad" />
                    <x-jet-input wire:model="pep.entity" type="text" class="w-full readonly" />
                </div>
                <div>
                    <x-jet-label value="Gestión" />
                    <x-jet-input wire:model="pep.management" type="text" class="w-full readonly" />
                </div>
                <div>
                    <x-jet-label value="Justificación" />
                    <textarea wire:model="pep.justification" class="w-full form-control readonly" rows="3"></textarea>
                </div>
            </div>
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
