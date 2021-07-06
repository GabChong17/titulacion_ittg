<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="color: #fff;">
            {{ __('Academia') }}
        </h2>
    </x-slot>

    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );

        </script>

       <br><br>

       <p style="text-align:center; color: #fff;" >

            <table class="rwd-table" id="academia" style="width:80%; text-align:center; color: #fff;" >
                <tr style="color: #fff;">
                    <td>Estado</td>
                    <td>NoControl</td>
                    <td>Nombre</td>
                    <td>Carrera</td>
                    <td>Opción</td>
                    <td>Cita</td>
                    <td>Acciones</td>
                </tr>
                <tr style="color: #fff;">
                    <td data-th="Estado">Estado </td>
                    <td data-th="NoControl">{{ Auth::user()->NoControl }}</td>
                    <td data-th="Nombre">{{ Auth::user()->name }}</td>
                    <td data-th="Carrera">{{ Auth::user()->carrera }}</td>
                    <td data-th="Opción">{{ Auth::user()->planDeestudios }}</td>
                    <td data-th="Cita">Cita</td>
                    <td data-th="Acciones">
                        <form method="POST" action="/protocolo" enctype="multipart/form-data"> 
                            @csrf

                            <input type="file" id="protocolo" onInput="validar()" class="form-control document" name="protocolo" multiple>
        
                    </td>
                    
                </tr>
            </table>   
    </p>
    <div class="button-25">
    <input type="submit" id="subir"  value="Subir"></div>
</div>

<br><br>
    <div class="footer2 mx-auto px-4 sm:px-6 lg:px-8">
        <p style="text-align:center;">Carretera Panamericana Km. 1080, C.P. 29050, Apartado Postal: 599,</p>
        <p style="text-align:center;">Tels. (961)61 5 04 61, (961)61 5 01 38, (961) 61 5 48 08</P>
    </div>

    

</x-app-layout>





