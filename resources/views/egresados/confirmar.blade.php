
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ITTG</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-3.1.1/css/bootstrap.min.css') }}">
</head>
<body>

<div class="container text-center">
    <div class="row" >
        <div class="container my-4">
            <h2 class="font-weight-bold">Bienvenido, Gabo</h2>
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
