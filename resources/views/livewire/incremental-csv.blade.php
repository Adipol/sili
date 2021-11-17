<div>
    <a class="btn btn-green" wire:click="$set('open',true)"><i class="fas fa-upload"></i></a>
    @if ($list->link_csv)
        <a class="btn btn-red" wire:click="download_csv"><i class="fas fa-download"></i></a>
    @endif
    <x-jet-dialog-modal wire:model="open">
        <x-slot name='title'>
            Cargar
        </x-slot>
        <x-slot name='content'>
            <div class="mb-4">
                <x-jet-label value="Tipo de archivo" />
                <x-jet-input type="text" readonly class="w-full" value="Csv" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Cantidad de registros" />
                <x-jet-input wire:model="list.amount" type="text" class="block w-full" readonly />
            </div>
            <div wire:loading wire:target="file" class="mb-4 bg-red-100 border border-red-400">
                <strong class="font-bold">Archivo cargando!</strong>
                <span class="block sm:inline">Espere un momento hasta que el archivo se haya procesado.</span>
            </div>
            <div>
                <input type="file" wire:model="file" id="{{ $identificador }}">
                <x-jet-input-error for="file" />
            </div>
        </x-slot>
        <x-slot name='footer'>
            <x-jet-secondary-button wire:click="$set('open',false)">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click="save_csv" wire:loading.attr="disabled" class="disabled:opacity-25">
                Guardar
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>

</div>
