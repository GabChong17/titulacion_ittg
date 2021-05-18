<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/plantilla.css') }}" rel="stylesheet">
    <title>Titulacion</title>
    
</head>
<body>
    @section('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css">
    <link href="{{ asset('/css/plantilla.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('bootstrap-3.1.1/css/bootstrap.min.css') }}">
    @endsection
            
        <!-- ID particulas -->

        <div id="particles-js"></div>
        
        
                    <div class="caja-ittg"> 

                        <div class="content-fa">

                            <div class="contenedor-logo">
                                <img class="logo-ittg" src="/imagen/ittg1.png" alt="cover logo">
                            
                    
                    
                                <div class="contenedor-login">
                                    <!-- <h4>Login</h4> -->
                                    <br>
                                    <form action="{{ route('auth.check') }}" method="post">
                                        @if(Session::get('fail'))
                                           <div class="alert alert-danger">
                                              {{ Session::get('fail') }}
                                           </div>
                                        @endif
                                        @csrf
                    
                    
                                        <div class="form-group">
                                            <label style="font-weight: bold;">Email</label>
                                            <div class="col-xs-5">
                                            <input type="text" class="form-control" name="email" placeholder="Introduzca su correo electronico" value="{{ old('name') }}">
                                            <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                                            </div>
                                         </div>
                                         <br>
                        
                                         <div class="form-group">
                                            <label style="font-weight: bold;">Password</label>
                                            <div class="col-xs-5">
                                            <input type="password" class="form-control" name="password" placeholder="Ingrese contraseña">
                                            <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                                            </div>
                                         </div>
                                         <br>
                    
                                            <button type="submit" class="boton-personalizado">Ingresar</button>
                                                <br><br>
                                    
                                                <a href="{{ route('auth.register') }}" class="">Crear cuenta nueva.</a><br><br>
                                    </from>
                                </div> 
                                    <img class="logo-ittg2" src="/imagen/logo_tecnm_2.png" alt="cover tec">      
                            </div> 
                        </div>
                     </div>        
                    
                    
               
            
      <!-- Js Particulas -->

      <script src="js/particles.min.js"></script>
      <script src="js/app.js"></script>
      

    @section('js')

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>
            <script >
              $('#login').DataTable();
             </script>

    @endsection
        
    
</body>
</html>