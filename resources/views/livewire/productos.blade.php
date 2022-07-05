<div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex gap-2 text-xs text-gray-500 mb-2">
            <span>{{ __('Mantenimientos') }} </span>
            <span class="pt-0.5">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </span>
            <span>{{ __('Productos') }}</span>
        </div>
    
        <div class="flex justify-between">
            <div>
                {{-- Title --}}
                <h1 class="text-3xl font-bold text-gray-700">{{__('Productos')}}</h1>
            </div>
    
            {{-- Actions buttons --}}
            <div>
                {{-- <a onclick="$openModal('simpleModal')" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-400 active:bg-blue-600 focus:outline-none focus:border-blue-600 focus:ring focus:ring-blue-300 disabled:opacity-25 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg>
                    {{ __('Agregar Usuario') }}
                </a> --}}
            </div>
            
        </div>

        <livewire:producto-table/>

    </div>

</div>
