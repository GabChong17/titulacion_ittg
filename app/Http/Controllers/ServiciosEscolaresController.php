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
    public function documento($id)
    {
        $egresado = User::find($id);
        return view('servicios.documento', compact('egresado'));
    }

    public function noincoveniencia()
    {
        $egresado = User::where('rol', 'egresado')->get();
        //$users_cita_agendada = DB::select("SELECT estado from users where estado = 'Cita_Agendada'");
        //$users_tramite_iniciado = DB::select("SELECT estado from users where estado = 'Tramite_iniciado'");
        //$users_revision_escolares = DB::select("SELECT estado from users where estado = 'Revision_Escolares'");
        
        $users_revision_escolares = User::where('estado', '=', 'Revision_Escolares')->get();

        return view('servicios.noincoveniencia',compact('egresado','users_revision_escolares'));
      
    }

    public function liberarNoincoveniencia()
    {
        $egresado = User::where('rol', 'egresado')->get();        
        //$users_cita_agendada = DB::select("SELECT estado from users where estado = 'Cita_Agendada'");
        //$users_tramite_iniciado = DB::select("SELECT estado from users where estado = 'Tramite_iniciado'");
        //$users_revision_escolares = DB::select("SELECT estado from users where estado = 'Revision_Escolares'");
        
        $users_documentos_revisados = User::where('estado', '=', 'Documentos_Revisados')->get();


        return view('servicios.liberarInconveniencia',compact('egresado','users_documentos_revisados'));
      
    }

    public function escolaresProtocolo()
    {
        $egresado = User::where('rol', 'egresado')->get();
        
        //$users_cita_agendada = DB::select("SELECT estado from users where estado = 'Cita_Agendada'");
        //$users_tramite_iniciado = DB::select("SELECT estado from users where estado = 'Tramite_iniciado'");
        //$users_revision_escolares = DB::select("SELECT estado from users where estado = 'Revision_Escolares'");
        
        $users_acto_agendado = User::where('estado', '=', 'Acto_Agendado')->get();


        return view('servicios.protocolo',compact('egresado','users_acto_agendado'));
      
    }

    public function liberar($id)
    {
       $egresado = User::find($id);

        return view('servicios.liberar', compact('egresado'));
        
    }
    
    public function concluir($id)
    {
        $egresado = User::find($id);

        return view('servicios.concluir',compact('egresado'));
        
    }

    
}
