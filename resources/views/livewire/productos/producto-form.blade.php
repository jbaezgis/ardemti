
<x-modal wire:model.defer="simpleModal">
    <x-card title="Producto">
        <div class="mb-4">
            Prodctos form
        </div>
 
        <x-slot name="footer">
            <div class="flex justify-end gap-x-4">
                <x-button flat label="Cancel" x-on:click="close" />
                <x-button primary label="Save" x-on:click="close"/>
            </div>
        </x-slot>
    </x-card>
</x-modal>