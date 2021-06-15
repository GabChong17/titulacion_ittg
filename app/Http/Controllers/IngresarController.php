<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IngresarController extends Controller
{
    public function regisrarse(){
            return view('auth.register');
    }
    public function guardarNuevo(){
        //en la tabla que egresados  agregar un nuevo 
    }
    public function iniciarSesion(){
        // muestra el formulario de usuario y contraseña
    }
    public function validarUsuarioYContrasena(){

    }
    public function recuperarContrasena(){
        //le muestras un formulario e instrucciones
    }
    public function recuperarContrasena2(){
        //procesas los datos (envias correo, pregunta secreta, )
        //...recuperarContrasena3....
    }

        //$asdfasd->toArray();
        //$objeto->toSql();

}
