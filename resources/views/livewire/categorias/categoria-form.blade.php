
<x-modal wire:model.defer="categoriaModal">
    <x-card title="Categoría">
        <div class="mb-4">
            {{-- <x-jet-label for="nombre" value="{{ __('Nombre') }}" />
            <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre"
                wire:model="nombre" /> --}}
            <x-input label="Categoría" wire:model="nombre" id="nombre" name="nombre" placeholder="Categoría" />
        </div>
 
        <x-slot name="footer">
            <div class="flex justify-end gap-x-4">
                <x-button flat label="Cancel" x-on:click="close" />
                @if ($modelId)
                    <x-button primary wire:click="update" label="Actualizar" x-on:click="close"/>
                @else
                    <x-button primary wire:click="create" label="Crear" x-on:click="close"/>
                @endif
            </div>
        </x-slot>
    </x-card>
</x-modal>