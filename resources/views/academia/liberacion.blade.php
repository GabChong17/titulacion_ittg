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
        
        <div class="container">        
            <div class="card-body">
            <div class="card-body">
        
                <table  id="academia" class="table table-striped table-bordered" style="width:80%"> 
                    <thead class="thead-light">
        
                <tr>
                    <th>Estado</th>
                    <th>NC</th>
                    <th>Nombre</th>
                    <th>Carrera</th>
                    <th>Opción</th>
                    <th>Cita</th>
                    <th>Acciones</th>
                </tr>
            </thead>
        
            <tbody>
            
                <tr>
                    <td>Estado</td>
                    <td>NoControl</td>
                    <td>Nombre</td>
                    <td>Carrera</td>
                    <td>Opción</td>
                    <td>Cita</td>
                    <td>Acciones</td>
                </tr>
                
                
            </tbody>
        </table>
        </div>
        </div>
       
        <br><br><br><br><br><br><br><br><br><br>
        
        </div>
        

    <div class="footer2 mx-auto px-4 sm:px-6 lg:px-8">
        <p style="text-align:center;">Carretera Panamericana Km. 1080, C.P. 29050, Apartado Postal: 599,</p>
        <p style="text-align:center;">Tels. (961)61 5 04 61, (961)61 5 01 38, (961) 61 5 48 08</P>
    </div>

</x-app-layout>
