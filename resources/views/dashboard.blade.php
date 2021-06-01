<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Escritorio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    ¡Bienvenid@ {{ Auth::user()->name }}, Ya estas loguead@!
                </div>
            </div>
        </div>
    </div>
    
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <p style="text-align:center;"> A continuacion se te presentan las opciones disponibles por las cuales podras iniciar tu tramite de titulación, ten en cuenta que segun la opción que elijas tendras que proporcionar los documentos que te soliciten </p>
                </div>
</x-app-layout>
