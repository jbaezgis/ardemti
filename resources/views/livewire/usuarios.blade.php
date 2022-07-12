@section('title', __('Usuarios'))
<div>
    <div class="max-w-7xl mx-auto pt-6 px-2">
    
        <div class="flex justify-between">
            <div class="flex gap-4">
                {{-- Title --}}
                <h1 class="text-3xl font-bold text-gray-700">{{__('Users')}}</h1>
                {{-- <div class="text-xl text-gray-500 pt-1"> {{ $usuarios->count() }}</div> --}}

            </div>
    
            {{-- Actions buttons --}}
            <div>
                
            </div>
            
            {{-- Modal --}}
            @include('livewire.crear-usuario')
            
        </div>

        <div class="mt-4">
            <div class="flex justify-between p-2 bg-white rounded shadow mb-2">
                <div>
                    <x-input wire:model="nombre" right-icon="search" placeholder="Nombre o Apellido" />
                </div>
                <div>
                    
                    <div class="flex gap-2">
                        {{-- <div>Informes</div>
                        <div>Categoria</div> --}}
                        <div>
                            <a href="#" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-400 active:bg-blue-600 focus:outline-none focus:border-blue-600 focus:ring focus:ring-blue-300 disabled:opacity-25 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                  </svg>
                            </a>
                        </div>
                        <div>
                            <a onclick="$openModal('simpleModal')" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-400 active:bg-blue-600 focus:outline-none focus:border-blue-600 focus:ring focus:ring-blue-300 disabled:opacity-25 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                                </svg>
                                {{ __('Usuario') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        {{-- Foreach --}}
            @foreach ($usuarios as $usuario)
                <div class="bg-white border rounded mb-4">
                    <div class="px-4 py-2">
                        <div class="flex gap-6 py-2">
                            <div>
                                <div class="text-xs text-gray-500">ID</div>
                                <div>
                                    {{ $usuario->id }}
                                </div>
                            </div>
                            <div>
                                <div class="text-xs text-gray-500">ROL</div>
                                <div>
                                    @foreach ($usuario->getRoleNames() as $rol)
                                        {{ $rol }}
                                    @endforeach
                                </div>
                            </div>
                        

                            <div>
                                <div class="text-xs text-gray-500">{{ __('NOMBRE') }}</div>
                                <div class="font-bold">
                                    {{$usuario->name}}
                                </div>
                            </div>
                            <div>
                                <div class="text-xs text-gray-500">{{ __('EMAIL') }}</div>
                                <div class="font-bold">
                                    {{$usuario->email}}
                                </div>
                            </div>
                            
                            <div>
                                <div class="text-xs text-gray-500">{{ __('CEDULA') }}</div>
                                <div>
                                    <h3 class=""></h3>
                                </div>
                            </div>
                            
                            <div>
                                <div class="text-xs text-gray-500">{{ __('PHONE') }}</div>
                                <div>
                                    <h3 class="">809-321-1234</h3>
                                </div>
                            </div>
                        </div>
            
                    </div>
                    
                    <div class="border-t px-4 py-2"> 
                        <div class="flex gap-4 justify-between">
                            <div class="text-gray-600 align-middle py-1 text-sm">
                                <span>{{ __('Agregado el') }}:</span> <span class="font-bold">{{ date('j F Y', strtotime($usuario->created_at)) }}</span> ({{ $usuario->created_at->diffForHumans() }})
                            </div>

                            {{-- Actions --}}
                            <div class="flex gap-2">
                                
                                <a href="#" class="inline-flex items-center px-2 py-1 font-semibold text-xs rounded text-gray-500 uppercase tracking-widest hover:bg-gray-100 active:bg-gray-200 focus:outline-none focus:border-gray-200 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </a>
                                <a wire:click="editarUsuario({{$usuario->id}})" onclick="$openModal('simpleModal')" class="inline-flex items-center px-2 py-1 rounded text-gray-500 uppercase tracking-widest hover:bg-gray-100 active:bg-gray-200 focus:outline-none focus:border-gray-200 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </a>
                                <a href="#" onclick="$openModal('simpleModal')" class="inline-flex items-center px-2 py-1 rounded text-gray-500 uppercase tracking-widest hover:bg-gray-100 active:bg-gray-200 focus:outline-none focus:border-gray-200 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                      </svg>
                                </a>
                                {{-- <a wire:click="eliminarUsuario({{$usuario->id}})" class="inline-flex items-center px-4 py-2 bg-red-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-400 active:bg-red-600 focus:outline-none focus:border-red-600 focus:ring focus:ring-red-300 disabled:opacity-25 transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </a> --}}
                                {{-- <x-button icon="trash"
                                    class="p-1 rounded text-gray-500 uppercase tracking-widest hover:bg-gray-100 active:bg-gray-200 focus:outline-none focus:border-gray-200 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
                                    x-on:confirm="{
                                        title: 'Sure Delete?',
                                        icon: 'warning',
                                        method: 'eliminarUsuario',
                                        params: {{ $usuario->id }}
                                    }"
                                /> --}}
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- <livewire:user-table/> --}}
    
</div>
