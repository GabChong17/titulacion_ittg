@extends('dashboard')
@section('content')

    

@section('content')

<div class="container text-center" style="color: #190D47;>
    <div class="row" >
        <div class="container my-4">
            <h2 class="font-weight-bold">Bienvenido  {{ Auth::user()->name }}</h2>
        </div>
    
        <div class="container">
            <h4 class="text-center text-danger font-weight-normal">Tu cita ha sido agendada.</h4>
        </div>

        <div class="container">
            <h4 class="text-center text-danger font-weight-normal">Imprime tu <a target="_tab" href="/imprimir_solicitud_autorizacion/{{$egresado->id}}"" >solicitud de Autorización</a> y la entregara en el momento de tu cita junto con tus requistos en la división de estudios.</h4>
        </div>

       
            <a href="{{ url('inicio') }}" class="button" ><p>Volver al inicio</p></a>

        
        <style>
            .button {
            background-color: #0D2697; 
            border: none;
            color: white;
            padding: 5px 22px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 15px;
            }

            .button:hover{
                background-color: white;   
                color: black;
            }
        </style>
    </div>
    
</div>

<div class="footer mx-auto px-4 sm:px-6 lg:px-8">
    <p style="text-align:center;">Carretera Panamericana Km. 1080, C.P. 29050, Apartado Postal: 599,</p>
    <p style="text-align:center;">Tels. (961)61 5 04 61, (961)61 5 01 38, (961) 61 5 48 08</P>
</div>


    
@endsection


        
@endsection
