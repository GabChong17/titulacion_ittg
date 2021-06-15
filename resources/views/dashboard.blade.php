<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="color: #fff;">
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
                <p style="text-align:center; color: #fff;"> A continuación se te presentan las opciones disponibles por las cuales podrás iniciar tu trámite de titulación, ten en cuenta que según la opción que elijas tendrás que proporcionar los documentos que te soliciten </p>
    </div>

    <div class="logos max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="libro-img"><a href="/tesis"><img src="/Imagenes/libros.png"><div class="text-content"><p>Tesis</a></p></div></div>
        <div class="globo-img"><a href="/proyecto"><img src="/Imagenes/terraqueo.png"><div class="text-content"><p>Proyecto</a></p></div></div>
        <div class="examen-img"><a href="/prototipo"><img src="/Imagenes/exam.png"><div class="text-content"><p>Texto o Prototipo</a></p></div></div>
     </div>

     <div class="footer mx-auto px-4 sm:px-6 lg:px-8">
                    <p style="text-align:center;">Carretera Panamericana Km. 1080, C.P. 29050, Apartado Postal: 599,</p>
                    <p style="text-align:center;">Tels. (961)61 5 04 61, (961)61 5 01 38, (961) 61 5 48 08</P>
                </div>

</x-app-layout>
