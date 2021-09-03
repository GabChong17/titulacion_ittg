<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Egresado;
use App\Models\User;
use App\Models\Tramite;
 

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
        $egresado = User::orderBy('id', 'asc')->get();

        return view('servicios.noincoveniencia', ['egresado' => $egresado]);
      
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
