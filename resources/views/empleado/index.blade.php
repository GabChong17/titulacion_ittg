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

<div class="container">

        @if(Session::has('mensaje'))
        <div class="alert alert-succes alert-dismissible" role="alert">
        {{Session::get('mensaje')}} 
       
    
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
    @endif

<a href="{{url('empleado/create')}}" class="btn btn-success" >Registrar nuevo empleado</a>
<br><br>
@section('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css">
    
@endsection

<div class="card">
    <div class="card-body">

<table  id="empleado" class="table table-striped table-bordered" style="width:100%"> 
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno </th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Acciones</th>
            <td><a href="{{ route('auth.logout') }}" class="btn btn-warning">Logout</a></td>
        </tr>
    </thead>

    <tbody>
        @foreach( $empleados as $empleado)
        <tr>
           
            <td>{{ $empleado ->id }}</td>

            <td>
                <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$empleado->Foto}}" width="100" alt="">

                
        
            </td>
            
            <td>{{ $empleado ->Nombre }}</td>
            <td>{{ $empleado ->APaterno }}</td>
            <td>{{ $empleado ->AMaterno }}</td>
            <td>{{ $empleado ->Telefono }}</td>
            <td>{{ $empleado ->email }}</td>
            <td> 
            
                <a href="{{ url('/empleado/'.$empleado->id.'/edit' )}}" class="btn btn-warning">Editar</a>
                 |

            <form action="{{ url('/empleado/'.$empleado->id )}}" class="d-inline" method="post">
                @csrf
                {{ method_field('DELETE')}}
                <input  class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar?')" 
                value="Borrar">
            </form> 
        </td>
        </tr>
        @endforeach
        
    </tbody>
</table>

@section('js')

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>
<script >
     $('#empleado').DataTable();
</script>

@endsection
</div>
</div>


</div>
</body>
</html>

