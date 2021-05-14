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

<h1> {{$modo}} empleado</h1>

@if(count($errors)>0)
<ul>
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $error)
        <li> {{$error}} </li>
        @endforeach
    </ul>
    </div>

    

@endif


<br>

    <div class="form-group">
    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" name="Nombre" value="{{isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')}}" id="Nombre">
    <span class="text-danger">@error('Nombre'){{ $message }} @enderror</span>
    </div>

    <div class="form-group">
    <label for="APaterno">Apellido Paterno</label>
    <input type="text" class="form-control" name="APaterno" value="{{ isset($empleado->APaterno)?$empleado->APaterno:old('APaterno')}}" id="APaterno">
    <span class="text-danger">@error('APaterno'){{ $message }} @enderror</span>
    </div>

    <div class="form-group">
    <label for="AMaterno">Apellido Materno</label>
    <input type="text" class="form-control" name="AMaterno" value="{{isset($empleado->AMaterno)?$empleado->AMaterno:old('AMaterno')}}" id="AMaterno">
    <span class="text-danger">@error('AMaterno'){{ $message }} @enderror</span>
    </div>

    <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" name="email" value="{{isset($empleado->email)?$empleado->email:old('email')}}" id="email">
    <span class="text-danger">@error('email'){{ $message }} @enderror</span>
    </div>

    <div class="form-group">
    <label for="Foto"></label>
    @if(isset($empleado->Foto))
   
    <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$empleado->Foto}}" width="100" alt="">
    @endif
    <input type="file" class="form-control" name="Foto" value="" id="Foto">
    
    </div>
 
    <div class="form-group">
    <label for="Telefono">Telefono</label>
    <input type="text" class="form-control" name="Telefono" value="{{isset($empleado->Telefono)?$empleado->Telefono:old('Telefono')}}" id="Telefono">
    <span class="text-danger">@error('Telefono'){{ $message }} @enderror</span>
    </div>

    <div class="form-group">
    <label for="password">password</label>
    <input type="password" class="form-control" name="password" value="{{isset($empleado->password)?$empleado->password:old('password')}}" id="password">
    <span class="text-danger">@error('password'){{ $message }} @enderror</span>
    </div>

    <input class="btn btn-success" type="submit" value="{{$modo}} datos">
    
    <a  class="btn btn-primary" href="{{url('empleado/')}}">Regresar</a>

</body>
</html>
