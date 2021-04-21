<div>
    <a class="btn btn-blue" wire:click="$set('open',true)">
        <i class="fas far fa-eye"></i>
    </a>
    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Información de la persona
        </x-slot>
        <x-slot name="content">
            <div class="mb-4">
                <x-jet-label value="Primer Nombre" />
                <x-jet-input wire:model="pep.name_one" type="text" class="w-full readonly" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Segundo Nombre" />
                <x-jet-input wire:model="pep.name_two" type="text" class="w-full readonly" />
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
