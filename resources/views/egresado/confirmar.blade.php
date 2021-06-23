<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="color: #fff;">
            {{ __('Confirmar') }}
        </h2>
    </x-slot>


    <div class="container text-center" style="color: #fff;>
        <div class="row" >
            <div class="container my-4">
                <h2 class="font-weight-bold">Bienvenido  {{ Auth::user()->name }}</h2>
            </div>
        
            <div class="container">
                <h4 class="text-center text-danger font-weight-normal">Tu cita ha sido agendada.</h4>
            </div>
    
            <div class="container">
                <h4 class="text-center text-danger font-weight-normal">Imprime tu solicitud de Autorización y la entregara en el momento de tu cita junto con tus requistos en la división de estudios.</h4>
            </div>
    
            
            <div class="container col-4">
                <h4 class="text-center text-danger font-weight-normal">Si deseas modificar la fecha y hora de tu cita puedes hacerlo.</h4>
                <form method="POST" class="text-center" action="/crearCita" enctype="multipart/form-data"> 
                    @csrf
                    <div class="form-group">
                        <div class='input-group date' id='datetimepicker1'>
                            <input type='text' class="form-control" name ="cita"/>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary my-4">Guardar</button>
                </form>
                <script type="text/javascript">
                    $(function () {
                        $('#datetimepicker1').datetimepicker({ format: 'YYYY/MM/DD HH:mm' });
                    });
                </script>
            </div>
    
        
           
        </div>
        
    </div>

    <div class="footer2 mx-auto px-4 sm:px-6 lg:px-8">
        <p style="text-align:center;">Carretera Panamericana Km. 1080, C.P. 29050, Apartado Postal: 599,</p>
        <p style="text-align:center;">Tels. (961)61 5 04 61, (961)61 5 01 38, (961) 61 5 48 08</P>
    </div>
    
</x-app-layout>
