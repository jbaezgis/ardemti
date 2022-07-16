@section('title', __('Productos'))
<div>
    <div class="max-w-7xl mx-auto pt-6 px-2">
        <div class="flex justify-between p-2 bg-white rounded-t shadow">
            <div>
                <x-input wire:model="search" right-icon="search" placeholder="ID o Descripción" />
            </div>
            <div>
                <div class="flex gap-2">
                   <div>
                        <x-jet-button wire:click="createShowModal">
                            {{ __('Agregar') }}
                        </x-jet-button>
                    </div>
                </div>
            </div>
        </div>

        {{-- table --}}
        <div>
            <div class="shadow-sm overflow-hidden my-8">
                <table class="border-collapse table-auto w-full text-sm">
                  <thead>
                    <tr>
                        <th class="border-b font-medium p-4 pt-0 pb-3 text-gray-400 text-left">#</th>
                        <th class="border-b font-medium p-4 pt-0 pb-3 text-gray-400 text-left">Fecha</th>
                        <th class="border-b font-medium p-4 pt-0 pb-3 text-gray-400 text-left">Cliente</th>
                        <th class="border-b font-medium p-4 pt-0 pb-3 text-gray-400 text-left">Productos</th>
                        <th class="border-b font-medium p-4 pt-0 pb-3 text-gray-400 text-left">Valor</th>
                        <th class="border-b font-medium p-4 pt-0 pb-3 text-gray-400 text-left"></th>
                    </tr>
                  </thead>
                  <tbody class="bg-white">
                    <tr>
                        <td class="border-b border-gray-100 p-4 text-gray-500">220720-01</td>
                        <td class="border-b border-gray-100 p-4 text-gray-500">20/07/2022 6:00 pm</td>
                        <td class="border-b border-gray-100 p-4 text-gray-500">Cliente Demo</td>
                        <td class="border-b border-gray-100 p-4 text-gray-500">
                            3 productos
                        </td>
                        <td class="border-b border-gray-100 p-4 text-gray-500">
                            <div class="flex gap-2">
                                <div>
                                    <img class="h-6" src="{{ asset('images/iconos/billete.png') }}" alt="Billete">
                                </div>
                                <div>
                                    RD$650.00
                                </div>
                            </div>
                        </td>
                        <td class="border-b border-gray-100 p-4 text-gray-500">
                            <img class="h-6" src="{{ asset('images/iconos/factura.png') }}" alt="Factura">
                        </td>
                    </tr>
                    <tr>
                        <td class="border-b border-gray-100 p-4 text-gray-500">220720-01</td>
                        <td class="border-b border-gray-100 p-4 text-gray-500">20/07/2022 6:00 pm</td>
                        <td class="border-b border-gray-100 p-4 text-gray-500">Cliente Demo</td>
                        <td class="border-b border-gray-100 p-4 text-gray-500">
                            3 productos
                        </td>
                        <td class="border-b border-gray-100 p-4 text-gray-500">
                            <div class="flex gap-2">
                                <div>
                                    <img class="h-6" src="{{ asset('images/iconos/billete.png') }}" alt="Billete">
                                </div>
                                <div>
                                    RD$650.00
                                </div>
                            </div>
                        </td>
                        <td class="border-b border-gray-100 p-4 text-gray-500">
                            <img class="h-6" src="{{ asset('images/iconos/factura.png') }}" alt="Factura">
                        </td>
                    </tr>
                    <tr>
                        <td class="border-b border-gray-100 p-4 text-gray-500">220720-01</td>
                        <td class="border-b border-gray-100 p-4 text-gray-500">20/07/2022 6:00 pm</td>
                        <td class="border-b border-gray-100 p-4 text-gray-500">Cliente Demo</td>
                        <td class="border-b border-gray-100 p-4 text-gray-500">
                            3 productos
                        </td>
                        <td class="border-b border-gray-100 p-4 text-gray-500">
                            <div class="flex gap-2">
                                <div>
                                    <img class="h-6" src="{{ asset('images/iconos/transferencia-bancaria.png') }}" alt="Billete">
                                </div>
                                <div>
                                    RD$650.00
                                </div>
                            </div>
                        </td>
                        <td class="border-b border-gray-100 p-4 text-gray-500">
                            <img class="h-6" src="{{ asset('images/iconos/factura.png') }}" alt="Factura">
                        </td>
                    </tr>
                    <tr>
                        <td class="border-b border-gray-100 p-4 text-gray-500">220720-01</td>
                        <td class="border-b border-gray-100 p-4 text-gray-500">20/07/2022 6:00 pm</td>
                        <td class="border-b border-gray-100 p-4 text-gray-500">Cliente Demo</td>
                        <td class="border-b border-gray-100 p-4 text-gray-500">
                            3 productos
                        </td>
                        <td class="border-b border-gray-100 p-4 text-gray-500">
                            <div class="flex gap-2">
                                <div>
                                    <img class="h-6" src="{{ asset('images/iconos/debit-cards.png') }}" alt="Billete">
                                </div>
                                <div>
                                    RD$650.00
                                </div>
                            </div>
                        </td>
                        <td class="border-b border-gray-100 p-4 text-gray-500">
                            <img class="h-6" src="{{ asset('images/iconos/factura.png') }}" alt="Factura">
                        </td>
                    </tr>
                  </tbody>
                </table>
              </div>
        </div>

        <br />
    {{ $productos->links() }}

    {{-- Modal Form --}}
    <x-jet-dialog-modal wire:model="modalFormVisible">
        <x-slot name="title">
            {{ __('Save Page') }} {{ $modelId }}
        </x-slot>

        <x-slot name="content">
            <div class="mt-4">
                <x-jet-label for="title" value="{{ __('Title') }}" />
                <x-jet-input id="title" class="block mt-1 w-full" type="text" name="title"
                    wire:model.debounce.500ms="title" />
                @error('title')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="slug" value="{{ __('Slug') }}" />
                <div class="mt-1 flex rounded-md shadow-sm">
                    <span
                        class="inline-flex items-center px-3 rounded-l-md border border-r-0 py-3 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                        http://localhost:8000/
                    </span>
                    <input wire:model.lazy="slug"
                        class="form-input flex-1 block w-full pl-1 rounded-none border rounded-r-md transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                        placeholder="url-slug">
                </div>
                @error('slug')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            
            
            
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modalFormVisible')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            @if ($modelId)
                <x-jet-danger-button class="ml-3" wire:click="update" wire:loading.attr="disabled">
                    {{ __('Update') }}
                </x-jet-danger-button>
            @else
                <x-jet-danger-button class="ml-3" wire:click="create" wire:loading.attr="disabled">
                    {{ __('Create') }}
                </x-jet-danger-button>
            @endif
        </x-slot>
    </x-jet-dialog-modal>

    {{-- Delete Modal --}}
    <x-jet-dialog-modal wire:model="modalConfirmDelete">
        <x-slot name="title">
            {{ __('Delete Page') }}
        </x-slot>

        <x-slot name="content">
            {{ __('Are you sure you want to delete this page? Once the page is deleted, all of its resources and data will be permanently deleted.') }}
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modalConfirmDelete')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            <x-jet-danger-button class="ml-3" wire:click="delete" wire:loading.attr="disabled">
                {{ __('Delete Page') }}
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>

    </div>

</div>
