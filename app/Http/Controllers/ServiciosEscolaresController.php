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
    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->middleware('escolares',['only'=> ['index']]);
    // }
    public function citaAgenda()
    {
        $cita = request()->except(['_token']);
        //no funciona hasta que se ingrese como un empleado
        $cita['empleado_id'] = Auth::id();
        Tramite::insert($cita);

        return redirect('/NoIncoveniencia')->with('message', 'Cita guardada');  

        
    }
    public function documento()
    {
        return view('servicios.documento');
    }

    public function noincoveniencia()
    {
        $egresado = User::orderBy('id', 'asc')->get();

        return view('servicios.noincoveniencia', ['egresado' => $egresado]);
      
    }

    public function liberar()
    {
        $egresado = User::orderBy('id', 'asc')->get();

        return view('servicios.liberar', ['egresado' => $egresado]);
        
    }
    
    public function concluir()
    {
        $egresado = User::orderBy('id', 'asc')->get();

        return view('servicios.concluir', ['egresado' => $egresado]);
        
    }

    
}
