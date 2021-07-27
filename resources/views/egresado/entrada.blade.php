<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="color: #fff;">
            {{ __('Escritorio') }}
        </h2>
    </x-slot>

    @section('breadcum')

                <style>

                    .ca{
                        background-color: black;
                        text-align:center;
                    }
                    .estado{
                        background-color: #E2E2E5;
                        width: 100px;
                    }

                    .estado:hover{
                        background-color: #BABABF;
                    }
                </style>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex ca">
                    <a class="enlace-23 estado" href="{{ url('entrada') }}">
                        {{ __('Inicio') }}
                    </a>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <a class="enlace-23" href="{{ url('liberacion') }}">
                        {{ __('Liberación') }}
                    </a>
                </div>
    @endsection

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    ¡Bienvenid@ {{ Auth::user()->name }}, Ya estas loguead@!
                </div>
            </div>
        </div>
    </div>


    
     <div class="footer mx-auto px-4 sm:px-6 lg:px-8">
                    <p style="text-align:center;">Carretera Panamericana Km. 1080, C.P. 29050, Apartado Postal: 599,</p>
                    <p style="text-align:center;">Tels. (961)61 5 04 61, (961)61 5 01 38, (961) 61 5 48 08</P>
                </div>

</x-app-layout>
