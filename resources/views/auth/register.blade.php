<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-3.1.1/css/bootstrap.min.css') }}">
</head>
<body>

    <div class="contrainer">
        <div class="row" style="margin-top:45px">
            <div class="col-md-4 col-md-offset-4">
                <h4>Registro</h4><hr>
                <form action="{{ route('auth.save') }}" method="post">
 
                    @if(Session::get('success'))
                    <div class="alert alert-success">
                       {{ Session::get('success') }}
                    </div>
                  @endif
       
                  @if(Session::get('fail'))
                    <div class="alert alert-danger">
                       {{ Session::get('fail') }}  
                    </div>
                  @endif


                @csrf

                <div class="form-group">
                    <label>NoControl</label>
                    <input type="string" class="form-control" name="NoControl" placeholder="Ingrese N° de control" value="{{ old('NoControl') }}">
                    <span class="text-danger">@error('NoControl'){{ $message }} @enderror</span>
                 </div>

                 <div class="form-group">
                    <label>Nombre</label>
                    <input type="string" class="form-control" name="Nombre" placeholder="Ingrese nombre" value="{{ old('Nombre') }}">
                    <span class="text-danger">@error('Nombre'){{ $message }} @enderror</span>
                 </div>

                 <div class="form-group">
                    <label>Apellido Paterno</label>
                    <input type="string" class="form-control" name="APaterno" placeholder="Ingrese apellido paterno" value="{{ old('APaterno') }}">
                    <span class="text-danger">@error('APaterno'){{ $message }} @enderror</span>
                 </div>

                 <div class="form-group">
                    <label>Apellido Materno</label>
                    <input type="string" class="form-control" name="AMaterno" placeholder="Ingrese apellido materno" value="{{ old('AMaterno') }}">
                    <span class="text-danger">@error('AMaterno'){{ $message }} @enderror</span>
                 </div>

                 <div class="form-group">
                    <label>Carrera</label>
                    <br>
                    <div class="col-md-6">
                        <select class="form-select" aria-label="Default select example" name="Carrera" value="{{ old('Carrera') }}">
                            <option selected>Selecciona una Carrera</option>
                            <option >Sistemas Computacionales</option>
                            <option >Logistica</option>
                            <option >Gestion Empresarial</option>
                            <option >Industrial</option>
                            <option >Mecanica</option>
                            <option >Electrica</option>
                            <option >Electronica</option>
                            <option >Quimica</option>
                            <option >Bioquimica</option>
                          </select>
                    </div>
                    <span class="text-danger">@error('Carrera'){{ $message }} @enderror</span>
                 </div><br>

                 <div class="form-group">
                    <label>Campus</label>
                   <br>
                    <div class="col-md-6">
                     <select class="form-select" aria-label="Default select example" name="Campus" value="{{ old('Campus') }}">
                         <option selected>Selecciona un campus</option>
                         <option >Instituto Tecnologico de Tuxtla Gutierrez</option>
                         <option >Instituto Tecnologico de Comitan</option>
                         <option >Instituto Tecnologico de Tapachula</option>
                         <
                       </select>
                 </div>
                    <span class="text-danger">@error('Campus'){{ $message }} @enderror</span>
                 </div><br>

                 <div class="form-group">
                    <label>Plan de estudios</label>
                    <input type="string" class="form-control" name="PlanDeEstudios" placeholder="Ingrese su plan de estudios" value="{{ old('PlanDeEstudios') }}">
                    <span class="text-danger">@error('PlanDeEstudios'){{ $message }} @enderror</span>
                 </div>

                 <div class="form-group">
                    <label>Email</label>
                    <input type="string" class="form-control" name="email" placeholder="Ingrese correo electronico" value="{{ old('name') }}">
                    <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                 </div>

                 <div class="form-group">
                    <label>Telefono</label>
                    <input type="string" class="form-control" name="Telefono" placeholder="Ingrese numero de telefono" value="{{ old('Telefono') }}">
                    <span class="text-danger">@error('Telefono'){{ $message }} @enderror</span>
                 </div>

                 <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" class="form-control" name="password" placeholder="Ingrese contraseña">
                    <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                 </div>

               
                <button type="submit" class="btn btn-block btn-primary">Registrar</button>
                <br>

                <a href="{{ route('auth.login') }}" class="">Ya tengo cuenta, ingresar</a>
            </from>
            </div>
        </div>

    </div>
    
</body>
</html>