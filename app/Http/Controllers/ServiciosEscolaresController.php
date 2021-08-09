<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosEscolaresController extends Controller
{
    
    public function citaAgenda()
    {
        $cita = request()->except(['_token']);
        //no funciona hasta que se ingrese como un empleado
        $cita['empleado_id'] = Auth::id();
        Tramite::insert($cita);

        return redirect('/agendarCita')->with('message', 'Cita guardada');  

        
    }
    public function cita()
    {
        return view('servicios.cita');
    }

    public function noincoveniencia()
    {
        return view('servicios.noincoveniencia');
    }

    public function notiJurado()
    {
        return view('servicios.notijurado');
    }
    
    public function imprimirProtocolo()
    {
        return view('servicios.protocolo');
    }

    public function imprimirJuramento()
    {
        return view('servicios.juramento');
    }
}