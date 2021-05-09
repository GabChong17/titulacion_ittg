


<div class="container">


<form action="{{url ('/empleado/'.$empleado->id )}}" method="post" enctype="multipart/form-data"   >
@csrf
{{method_field('PATCH')}}
    @include('empleado.formEmpleado',['modo'=>'Editar',$empleado])
</form>

</div>

