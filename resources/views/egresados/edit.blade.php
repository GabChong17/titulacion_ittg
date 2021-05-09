

<div class="container">


<form action="{{url ('/egresado/'.$egresado->id )}}" method="post" enctype="multipart/form-data"   >
@csrf
{{method_field('PATCH')}}
    @include('egresado.form',['modo'=>'Editar'])
</form>

</div>
