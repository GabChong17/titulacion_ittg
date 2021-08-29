<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    @yield('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     
    <title>ITTG - TITULACION</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/admin/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/inicio">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-user-circle "></i>
                </div>
                <div class="sidebar-brand-text mx-3">Inicio</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">          

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                ITTG
            </div>

            <!-- Nav Item - Menu inicio de tramite -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-folder-plus"></i>
                    <span>Inicio de Tramite</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Subida de documentos:</h6>
                        <a class="collapse-item" href="/tesis">Tesis</a>
                        <a class="collapse-item" href="/proyecto">Proyecto</a>
                        <a class="collapse-item" href="/prototipo">Texto o prototipo</a>
                    </div>
                </div>
            </li>

            

            <!-- Nav Item - Liberacion-->
            <li class="nav-item">
                <a class="nav-link" href="/liberacion">
                    <i class="fas fa-folder-minus"></i>
                    <span>Liberacion</span></a>
            </li>

           

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div>

        </ul>
        <!-- End of Sidebar -->

    @extends('admin.layouts.dashboard') <!-- Inicio Pagina de Administrador Gral.  -->

    @section('content')

    <div class="contenedor-titulo">
        <img src="/Imagenes/ITTG_Escudo.png" style="width: 150px; height: 150px;">
        <h2 style="padding: 50px 30px;">Proyecto para: {{ Auth::user()->name }} {{ Auth::user()->a_paterno }} {{ Auth::user()->a_materno }}</h2>
    </div>
    


    <script>
        var documentos_subidos=false;

        function validar() {
    console.log( !document.getElementById('cita_d').value.length); 
    document.getElementById("subir").disabled = !((document.getElementById('documento1').value.length)&&(document.getElementById('documento2').value.length)&&(document.getElementById('documento3').value.length));
    if( !document.getElementById("subir").disabled)
    {
        documentos_subidos=true;
        console.log("documentos_subidos"); 

    }
    }
    function validar2() {
    console.log( "va= "+documentos_subidos); 
    if(documentos_subidos)
    {
    document.getElementById("boton_enviar").disabled = !((document.getElementById('cita_d').value.length)&& (document.getElementById('fecha').value.length) &&(document.getElementById('subir').disabled));
    }
    }

</script>

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<div class="container">
    <br>
    <div class="row text-primary">
    <div class="col-md-4  font-weight-bold">     
        <div class=" text-center">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <p style="text-align:center; color: #190D47;">1- INSTRUCCIONES </p>
                <br>
                <p style="text-align:center; color: #190D47;">A continuacion te solicitamos anexes los documentos que se te solicitan</p>
            </div>
        </div>

    <div style=”text-align: justify;”>
        <ol>
        
    </ol>

    </div>
    </div> 
    <div class="col-md-4 text-center font-weight-bold">
        <div class=" text-center">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <p style="text-align:center; color: #190D47;">2- SUBE TUS REQUISITOS </p>
                </div>
        </div>
        <form method="POST" action="/documento" enctype="multipart/form-data"> 
            @csrf
        
           
        <p style="text-align:center; color: #190D47;">
        <label for="documento">Agrega documento PDF para </label>
        <br>

        
        <input type="file" id="documento1" onInput="validar()" class="form-control document" name="documento" multiple>
        <br>
        <input type="file" id="documento2" onInput="validar()" class="form-control document" name="documento" multiple>
        <br>
        <input type="file" id="documento3" onInput="validar()" class="form-control document" name="documento" multiple>
     
      </p>
        
      <button  style="background-color: #384085;" type="submit" id="subir" disabled >Subir</button>
       {{-- style="color:#000; border: 1px solid #fff; padding: 5px 5px; background: #fff;" --}}
        </form>


    <div class="col-md-4 text-center font-weight-bold">
        <div class="row text-center text-primary">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <p style="text-align:center; color: #190D47;">3- AGENDA TU CITA</p>
                </div>
        </div>  
       <div class="row my-4">
            <form method="POST" action="/crearCita" enctype="multipart/form-data"> 
                @csrf
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker1'>
                         <input type="datetime-local" id="cita_d" onInput="validar2()" name="cita">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>         
                <br>
                <input type="submit" id="boton_enviar"  value="Enviar">
                
            </form>   


        
    @endsection

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">¿Desea cerrar sesión?</h5>
<button class="close" type="button" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body"></div>
<div class="modal-footer">
<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
<form method="POST" action="{{ route('logout') }}">
    @csrf

    <x-dropdown-link :href="route('logout')"
            onclick="event.preventDefault();
                        this.closest('form').submit();" class="btn btn-success">
        {{ __('Cerrar Sesión') }}
    </x-dropdown-link>
</form>
</div>
</div>
</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/js/admin/sb-admin-2.js"></script>

<!-- Page level plugins -->
<script src="/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="/js/admin/demo/chart-area-demo.js"></script>
<script src="/js/admin/demo/chart-pie-demo.js"></script>
@yield('js')
</body>

</html>