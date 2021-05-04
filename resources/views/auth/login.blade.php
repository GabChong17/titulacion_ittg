<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Titulacion</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-3.1.1/css/bootstrap.min.css') }}">
</head>
<body bgcolor= "blue">
    @section('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css">
        
    @endsection
    

            

        
    <center><br><br><br><br><br>

        <div class="card loginpanel">
            <div class="card-block">
        
        <table id="login" class="table table-striped table-bordered" style="width:60% " >
            <thead>
                <tr>
                    <th><center><img src="/imagen/ittg.png"  width="150" alt="Cover Image"> </th>
                </table>
                    <table id="login" class="table table-striped table-bordered" style="width:60% ">
                    <th>

                        
                        <div class="contrainer">
                            <div class="row" style="margin-top:45px">
                                <div class="col-md-4 col-md-offset-4">
                                    <h4>Login</h4><hr>
                                    <form action="{{ route('auth.check') }}" method="post">
                                        @if(Session::get('fail'))
                                           <div class="alert alert-danger">
                                              {{ Session::get('fail') }}
                                           </div>
                                        @endif
                                        @csrf
                    
                    
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" name="email" placeholder="Introduzca su correo electronico" value="{{ old('name') }}">
                                            <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                                         </div>
                        
                                         <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Ingrese contraseña">
                                            <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                                         </div>
                    
                                    <button type="submit" class="btn btn-block btn-primary">Ingresar</button>
                                    <br>
                                    
                                    <a href="{{ route('auth.register') }}" class="">Crear cuenta nueva.</a>
                                </from>
                                </div>
                            </div>
                    
                        </div>
                    
                  
                    </th>
                    
                </tr>
            </thead>
        </table>
    </div>
</div>
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