@section('title', __('Dashboard'))
<div>
    <div class="max-w-7xl mx-auto pt-6 px-2">
        @include('livewire.crear-usuario')
        
        <div class="flex justify-between p-2 bg-white rounded-t shadow">
            <div>
                <x-input wire:model="nombre" right-icon="search" placeholder="Código o Nombre" />
            </div>
            <div>
                
                <div class="flex gap-2">
                    {{-- <div>Informes</div>
                    <div>Categoria</div> --}}
                    {{-- <div>
                        <a href="#" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-400 active:bg-blue-600 focus:outline-none focus:border-blue-600 focus:ring focus:ring-blue-300 disabled:opacity-25 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </a>
                    </div> --}}
                    <div>
                        <a onclick="$openModal('simpleModal')" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-400 active:bg-green-600 focus:outline-none focus:border-green-600 focus:ring focus:ring-green-300 disabled:opacity-25 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                            </svg>
                            {{ __('Vender') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex gap-8 px-4 py-2 bg-gray-200 rounded-b mb-2 text-gray-600 text-sm">
            <div>
                <div>
                    <strong>Hoy</strong>: 0 Venta
                </div>
                <div class="text-lg">
                    RD$0.00
                </div>
            </div>
            <div>
                <div>
                    <strong>Ayer</strong>: 0 Venta
                </div>
                <div class="text-lg">
                    RD$0.00
                </div>
            </div>
            <div>
                <div>
                    <strong>Esta semana</strong>: 0 Venta
                </div>
                <div class="text-lg">
                    RD$0.00
                </div>
            </div>
            <div>
                <div>
                    <strong>Este mes</strong>: 0 Venta
                </div>
                <div class="text-lg">
                    RD$0.00
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

    </div>{{-- main div --}}
    
</div>
