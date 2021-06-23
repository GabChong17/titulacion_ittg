


<div class="container">


<form action="{{url ('/empleado/'.$egresado->id )}}" method="post" enctype="multipart/form-data"   >
@csrf
{{method_field('PATCH')}}
    
    @include('empleado.formEgresado',['modo'=>'Editar'])
</form>

</div>

